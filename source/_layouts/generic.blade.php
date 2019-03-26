@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')
    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}
@endpush

@section('title', $page->title . ' | Apex Hub')
@section('description', $page->description)

{{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
@section('body')

<div class="min-h-1/4-screen bg-black flex justify-center items-center py-4 bg-top bg-cover lazyload" data-bg="/img/legends.jpg">
    <div class="p-8 mx-auto max-w-lg">
        <img src="/img/logo-white.png" alt="Apex Hub" class="block mx-auto" width="300">
    </div>
</div>

<article class="container mx-auto leading-normal">
    <div class="flex p-4 justify-center">
        <div class="flex-1 max-w-lg">
            <h1 class="text-3xl font-normal lg:text-4xl mb-6 mt-4 leading-none{{ $page->permalink == '404.html' ? ' text-center' : '' }}">{{ $page->title }}</h1>

            <div class="markdown-body">
                @yield('content')
            </div>
        </div>
    </div>
</article>

@endsection
