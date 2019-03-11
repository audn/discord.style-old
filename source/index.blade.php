@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')

    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}
    <noscript>
        <style>
            .lqip {
                display: none !important;
            }
        </style>
    </noscript>

@endpush

@section('title', 'Example Page')

{{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
@section('body')

    @include('_partials.lazyload-image', [
        'src' => 'img/large-image-1.jpg',
        'class' => 'object-fit-cover'
    ])
    
    <div class="container mx-auto leading-normal">
        <div class="flex p-4 justify-center">
            <div class="flex-1 max-w-lg">
                <h2 class="text-3xl lg:text-4xl mb-6">Urbanout: Why people are moving away from busy cities</h2>

                <p class="text-lg lg:text-xl mb-4 text-grey-dark">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis id rerum, iste laboriosam fugiat beatae doloremque veniam! Totam tempora officiis, eius error accusantium doloribus quos deserunt dolorem, illum facilis atque.
                </p>

                @include('_partials.placeholder-text', ['paragraphs' => 8])

                @include('_partials.lazyload-image', [
                    'src' => 'img/large-image-2.jpg',
                    'class' => 'object-fit-cover'
                ])

                @include('_partials.placeholder-text', ['paragraphs' => 5])

                @include('_partials.lazyload-image', [
                    'src' => 'img/large-image-3.jpg',
                    'class' => 'object-fit-cover'
                ])

                @include('_partials.placeholder-text', ['paragraphs' => 6])

                <hr class="border-t border-grey-light my-8">

                <div class="my-6">
                    <p class="text-center italic text-sm text-grey mb-4">If you enjoyed this article and want to be notified in the future...</p>
                    <p class="text-center"><a href="#" class="no-underline inline-block bg-green hover:bg-green-dark text-white font-serif uppercase tracking-wide font-semibold text-center px-6 py-4 text-sm | js-subscribe">Subscribe</a></p>
                </div>

            </div>
        </div>
    </div>

@endsection
