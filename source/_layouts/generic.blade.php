@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')
    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}
@endpush

@section('title', $page->title . ' | Apex Hub')
@section('description', $page->description)

{{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
@section('body')
<div class="container center-div">
  <div class="row valign-wrapper no-valign-wrap-on-mobile">
    <div class="col s12 l19">
      <div class="discord-mockup z-depth-3">
        <div class="items-panel">
          <div class="actions">
            <div class="close"></div>
            <div class="minimize"></div>
            <div class="zoom"></div>
          </div>
          <div class="items">
            <div class="item"><a href="#"><img class="responsive-img" src="https://i.imgur.com/0z3EQVg.png"/></a></div>
            <div class="item">
            </div>
          </div>
        </div>
        <div class="sidebar-panel hide-on-med-and-down">
          <div class="header">Discord Templates</div>
          <div class="items" id="items">
            <div class="category" id="category">
              <svg class="iconCollapsed-3hFp_8 iconTransition-2pOJ7l directionRight-O8AY4M" width="12" height="12" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7 10L12 15 17 10"></path></svg>
              @yield('content')
              <svg style="float:right;" name="PlusAlt" class="addButtonIcon-3u-3Hu" width="18" height="18" viewBox="0 0 18 18">
              <polygon fill-rule="nonzero" id="category-plus" class="category-expand" fill="#6d6e71" points="15 10 10 10 10 15 8 15 8 10 3 10 3 8 8 8 8 3 10 3 10 8 15 8">
              </polygon>
            </svg>
           </div>
           <a href="#">
              <div class="item trigger-group active" data="default">general</div>
            </a>
            <a href="#">
              <div class="item trigger-group locked" data="help">help</div>
            </a>
            <a href="#">
              <div class="item trigger-group" data="roadmap">roadmap</div>
            </a>
            <a href="#">
              <div class="item trigger-group" data="git">changes</div>
            </a>
            <a href="#">
              <div style="display:none" class="item trigger-group locked" data="partner">Partner</div>
            </a>

         </div>
        </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
