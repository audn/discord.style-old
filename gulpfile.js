'use strict'

const gulp = require('gulp')
const es = require('event-stream')
const runSequence = require('run-sequence')
const args = require('yargs').argv
const exec = require('child_process').exec
const { transform, lqip } = require('gulp-html-transform')

const $ = require('gulp-load-plugins')({
  pattern: [
    'gulp-*',
    'gulp.*',
    'postcss-*',
    'tailwindcss',
    'autoprefixer',
    'browser-sync',
    'webpack',
    'webpack-stream',
    'cssnano',
    'precss'
  ]
})

const isProduction = typeof args.production !== 'undefined'
const isLocal = !isProduction

/*
  Paths:

  * watch: The file(s) to be watched for changes
  * src: The file(s) to be compiled on change
  * dest: The directory to place the compiled assets

*/

const outputFolder = isLocal ? 'build_local' : 'build_production'

const paths = {
  css: {
    watch: ['./source/_assets/css/**/*'],
    src: './source/_assets/css/main.css',
    dest: './source/css'
  },
  js: {
    watch: ['./source/_assets/js/**/*'],
    src: ['./source/_assets/js/main.js'],
    dest: './source/js'
  },
  imagemin: {
    watch: './source/_assets/img/**/*.{jpg,png,gif}',
    dest: './source/img'
  },
  svgmin: {
    watch: ['./source/_assets/img/svg/*.svg'],
    dest: './source/img'
  },
  php: {
    watch: './source/**/*.php'
  },
  build: {
    watch: `./${outputFolder}/**/*.html`,
    dest: `./${outputFolder}`
  }
}

/*
  CSS Task:

  * Compiles PostCSS / Tailwind to CSS
  * Creates sourcemap
  * Creates minified version

*/
const postCssPlugins = [
  $.postcssEasyImport({ prefix: '_', extensions: ['.css'] }),
  $.tailwindcss('./tailwind-config.js'),
  $.precss({
    unresolved: 'ignore'
  }),
  $.postcssAutomath(),
  $.postcssInlineSvg(),
  $.autoprefixer() // check browserslist in package.json
]

isProduction && postCssPlugins.push($.cssnano())

gulp.task('css', () => {
  return (
    gulp
      .src(paths.css.src)
      .pipe($.sourcemaps.init())
      .pipe($.postcss(postCssPlugins, { parser: $.postcssScss }))
      .pipe(
        isLocal
          ? $.util.noop()
          : $.purgecss({
            content: [
              './source/**/*.blade.php',
              './source/_assets/js/**/*.js',
              './source/_assets/img/**/*.svg'
            ],
            whitelistPatterns: [
              /flickity/,
              /^hf-/,
              /editable/,
              /ex-/,
              /logged-in/,
              /admin/
            ], // Example: Whitelist third party classes (eg. Flickity)
            extractors: [
              {
                extractor: class {
                  static extract (content) {
                    return content.match(/[A-z0-9-:/]+/g) || []
                  }
                  },
                extensions: ['php', 'js', 'svg']
              }
            ]
          })
      )
      .pipe($.sourcemaps.write('./'))
      .pipe(gulp.dest(paths.css.dest))
      // reload browserSync if we're not on production
      .pipe(
        $.browserSync
          ? $.browserSync.stream({ match: '**/*.css' })
          : $.util.noop()
      )
  )
})

/*
  JS Task:

  * Use webpack to convert new syntax to ES5
  * Creates sourcemap
  * Creates minified version

*/
gulp.task('js', () => {
  const streams = []
  paths.js.src.forEach(item => {
    streams.push(
      gulp
        .src(item)
        .pipe(
          $.webpackStream(
            {
              devtool: isProduction ? 'source-map' : 'eval-source-map',
              module: {
                rules: [
                  {
                    test: /\.m?js$/,
                    loader: 'babel-loader'
                  }
                ]
              },
              plugins: isLocal
                ? []
                : [
                  new $.webpack.optimize.UglifyJsPlugin({
                    sourceMap: true,
                    compress: {
                      warnings: false
                    }
                  })
                ],
              output: {
                filename: item.split('/').pop()
              }
            },
            $.webpack
          )
        )
        .pipe(gulp.dest(paths.js.dest))
    )
  })
  return es.merge(streams).on('end', $.browserSync.reload)
})

gulp.task('js:lint', () => {
  return gulp
    .src(paths.js.watch)
    .pipe($.plumber())
    .pipe($.eslint())
    .pipe($.eslint.format())
})

/*
  Image Task:

  * Minifies SVGs, JPGs, and PNGs

*/
gulp.task('images', cb => {
  runSequence(['svgmin', 'imagemin'], cb)
})

gulp.task('svgmin', () => {
  return gulp
    .src(paths.svgmin.watch)
    .pipe($.plumber())
    .pipe($.svgmin())
    .pipe(gulp.dest(paths.svgmin.dest))
})

gulp.task('imagemin', () => {
  return gulp
    .src(paths.imagemin.watch)
    .pipe($.newer(paths.imagemin.dest))
    .pipe(
      $.imagemin({
        optimizationLevel: 7,
        interlaced: true,
        progressive: true
      })
    )
    .pipe(gulp.dest(paths.imagemin.dest))
})

/*
  Build Task:

  * Runs Jigsaw, compiles Blade files into static HTML files
  * Adds custom font files to the local build
  * Tidies the outputted HTML

*/
gulp.task('build', cb => {
  runSequence('jigsaw', 'fonts', 'lqip', 'html', cb)
})

const reload = isLocal ? $.browserSync.reload : $.util.noop
gulp.task('fonts', () => {
  return gulp
    .src('./source/_assets/fonts/**/*.{woff,woff2,eot,otf,ttf}')
    .pipe(gulp.dest(`${paths.build.dest}/fonts`))
})

const jigsawTask = isLocal
  ? 'jigsaw build --pretty=false'
  : './vendor/bin/jigsaw build production --pretty=false'
gulp.task('jigsaw', cb => {
  exec(jigsawTask, err => {
    if (err) console.log(err)
    gulp
      .src(`${paths.build.dest}/index.html`)
      .pipe($.connect.reload())
      .on('end', () => {
        reload()
        cb()
      })
  })
})

gulp.task('lqip', () => {
  return gulp
    .src(paths.build.watch)
    .pipe(
      transform(
        lqip({
          base: `${__dirname}/${outputFolder}`,
          // method: 'primaryColor',
          query: 'img.lazyload', // match lazysizes class
          srcAttribute: 'data-src',
          addStyles: true,
          carryClassList: false, // leave the lazyload class alone
          classList: 'mb-4'
        })
      )
    )
    .pipe(gulp.dest(paths.build.dest))
})

gulp.task('html', () => {
  return gulp
    .src(paths.build.watch)
    .pipe(
      isProduction
        ? $.htmlmin({
          collapseWhitespace: true,
          minifyCSS: true,
          minifyJS: true
        })
        : $.htmltidy({
          doctype: 'html5',
          hideComments: false,
          indent: true,
          indentWithTabs: true,
          wrap: false,
          dropEmptyElement: false,
          breakBeforeBr: true,
          mergeSpans: false
        })
    )
    .pipe(gulp.dest(paths.build.dest))
})

gulp.task('browserSync', () => {
  $.browserSync.init({
    server: {
      baseDir: 'build_local'
    }
  })
})

gulp.task('serve', cb => {
  exec(
    'jigsaw serve',
    err => {
      if (err) console.log(err)
    },
    cb
  )
})

const jsTasks = isProduction ? ['js'] : ['js:lint', 'js']
gulp.task('watch', ['browserSync'], cb => {
  $.watch('source/**/*.blade.php', () => runSequence('build'))
  $.watch(paths.css.watch, () => runSequence(['css'], 'build'))
  $.watch(paths.js.watch, () => runSequence(jsTasks, 'build'))
  $.watch(paths.imagemin.watch, () => runSequence(['imagemin'], 'build'))
  $.watch(paths.svgmin.watch, () => runSequence(['svgmin'], 'build'))
  $.watch(paths.php.watch, () => runSequence(['build']))
})

gulp.task('deploy', cb => {
  runSequence(['css', 'images', 'js'], 'build', cb)
})

gulp.task('default', cb => {
  runSequence('deploy', 'watch', cb)
})
