@php
    error_reporting(E_ALL & ~E_NOTICE);
    date_default_timezone_set('Europe/London');

    /*
        Essentially, this finds all your compiled assets, and adds a content
        generated hash to them, spitting them back out in the template.

        If you want to stop a script / stylesheet from being loaded on every
        page, add it's name to the blacklist.
    */

    $dirs = ['css', 'js'];
    $hashed_files = [];
    $count = 0;

    if (!function_exists('strposa')) {
        // Fuction to run strpos on an array
        function strposa($haystack, $needle, $offset = 0) {
            if (!is_array($needle)) $needle = array($needle);
            foreach($needle as $query) {
                if (strpos($haystack, $query, $offset) !== false) return true;
            }
            return false;
        }
    }

    foreach ($dirs as $key => $dir) {
        $dir_files = scandir(getcwd() . "/source/$dir");
        $files_found = [];

        foreach ($dir_files as $key => $dir_file) {
            $search = ['.css', '.js'];
            $blacklist = ['.map'];

            if (strposa($dir_file, $search) !== false) {
                if (strposa($dir_file, $blacklist) === false) {
                    $hash = md5_file(getcwd() . "/source/$dir/$dir_file");
                    $files_found[] = "$dir/$dir_file?$hash";
                }
            }
        }

        $hashed_files[$count] = $files_found;
        $count++;
    }

@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <head>
    <!--
          <script language="JavaScript" type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/draggabilly.pkgd_copy.js"></script>
          <script language="JavaScript" type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/packery.pkgd.js"></script>

  
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
            -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
             <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88967903-2"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-88967903-2');
            </script>

            <title>
                {{-- http://stackoverflow.com/questions/21804973/laravel-4-how-to-apply-title-and-meta-information-to-each-page-with-blade-master --}}
                @yield('title')
            </title>
            <meta charset="utf-8">
            {{-- https://css-tricks.com/snippets/html/responsive-meta-tag/ --}}
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="description" content="" />

            @foreach ($hashed_files[0] as $key => $file)

                <link rel="stylesheet" href="/{{ $file }}">

            @endforeach

            @stack('head')

            {{-- http://realfavicongenerator.net/ --}}
            <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png?v=M4mO9xng8d">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png?v=M4mO9xng8d">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png?v=M4mO9xng8d">
            <link rel="manifest" href="/favicon/site.webmanifest?v=M4mO9xng8d">
            <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg?v=M4mO9xng8d" color="#22292f">
            <link rel="shortcut icon" href="/favicon/favicon.ico?v=M4mO9xng8d">
            <meta name="msapplication-TileColor" content="#22292f">
            <meta name="theme-color" content="#22292f">

            {{-- https://developers.facebook.com/docs/opengraph/getting-started --}}
            <meta property="og:url" content="https://discord.style" />
            <meta property="og:title" content="discord.style" />
            <meta property="og:description" content="Tired of designing your Discord server from scratch? Use this free tool!" />
            <meta property="og:image" content="" />
            <meta property="og:locale" content="" />
            <meta property="fb:app_id" content="" />

        </head>
    </head>
    <body>



        @yield('body')

        @stack('scripts')

        @foreach ($hashed_files[1] as $key => $file)

            <script type="text/javascript" src="/{{ $file }}"></script>

        @endforeach

    </body>
</html>
<script>
var slidesElem = document.querySelector(".slides");
  var slideSize = getSize(document.querySelector(".item"));
  var pckry = new Packery(slidesElem);
  // get item elements
  var itemElems = pckry.getItemElements();
  // for each item...
  for (var i = 0, len = itemElems.length; i < len; i++) {
    var elem = itemElems[i];
    // make element draggable with Draggabilly
    var draggie = new Draggabilly(elem, {
      axis: "y"
    });
    // bind Draggabilly events to Packery
    pckry.bindDraggabillyEvents(draggie);
  }

  // re-sort DOM after item is positioned
  pckry.on("dragItemPositioned", function(_pckry, draggedItem) {
    var index = pckry.items.indexOf(draggedItem);
    var nextItem = pckry.items[index + 1];
    if (nextItem) {
      slidesElem.insertBefore(draggedItem.element, nextItem.element);
    } else {
      slidesElem.appendChild(draggedItem.element);
    }
  });

(function($) {
    "use strict"; // Start of use strict

    var defaultId = 'default';

    function showGroup(id) {

        if (typeof id == 'undefined') {
            showGroup(defaultId);
            return;
        }

        $('.messages-group').each(function() {
            if ($(this).attr('id') === id) {
                $(this).addClass('show');
            } else {
                $(this).removeClass('show');
            }
        });
    };

    $(document).ready(function() {
        showGroup(defaultId);
    });

    $('.trigger-group').click(function() {
        console.log($(this).attr('data-id'));
        var id = $(this).attr('data');
        showGroup(id);
    });
})(jQuery); // End of use strict
var header = document.getElementById("items");
var btns = header.getElementsByClassName("item");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) {
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
$(function() {
  $('#category').hover(function() {
    $('#category-plus').css('color:', '#b9bbbe');
  }, function() {
    // on mouseout, reset the background colour
    $('#category-plus').css('color', '');
  });
});
</script>
