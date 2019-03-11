
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

    @section('title', ' Discord Templates')

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
                  <button class="guild-add">+</button>
                </div>
              </div>
            </div>
            <div class="sidebar-panel hide-on-med-and-down">
              <div class="header">Discord Templates</div>
              <div class="items"><a href="#">
                  <div class="item trigger-group active" data="default">help</div></a><a href="#">
                  <div class="item trigger-group" data="tips">tips</div></a><a href="#">
                  <div class="item trigger-group" data="staff-chat-all">staff-chat-all</div></a>
             </div>
            </div>
            <div class="messages-panel">
              <div class="messages-group hide-unless-show" id="default">
                <div class="header">help</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Cat03.jpg/220px-Cat03.jpg"/></div>
                    <div class="body">
                      <div class="user-name">your neighbors cat</div>
                      <div class="content">Purr i heard this rumor where the humans are our owners, pfft, what do they know?! yet stick butt in face.</div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1105080326290845696/W7cDMv4s_200x200.jpg"/></div>
                    <div class="body">
                      <div class="user-name">random dog </div>
                      <div class="content">who are the people in our house?
                      </div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1088584545987891200/aaIAhnMm_400x400.jpg"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">who's a good girl?<br> <img src="https://i.imgur.com/6nPVlC3.png" style="width:100px;"></div>
                    </div>
                  </div>
                   <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1105080326290845696/W7cDMv4s_200x200.jpg"/></div>
                    <div class="body">
                      <div class="user-name">random dog </div>
                      <div class="content">THATS A BALL! OH MY GOD OH MY GOD THIS IS THE BEST DAY OF MY LIFE
                      </div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Cat03.jpg/220px-Cat03.jpg"/></div>
                    <div class="body">
                      <div class="user-name">your neighbors cat</div>
                      <div class="content">it's just a ball</div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1088584545987891200/aaIAhnMm_400x400.jpg"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content"><img src="https://i.imgur.com/5D2YoLc.png" style="width:100px;"></div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Cat03.jpg/220px-Cat03.jpg"/></div>
                    <div class="body">
                      <div class="user-name">your neighbors cat</div>
                      <div class="content">you gonna throw that or what?</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messages-group hide-unless-show" id="tips">
                <div class="header">tips</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1088584545987891200/aaIAhnMm_400x400.jpg"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">You can click channels to rename them!</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messages-group hide-unless-show" id="staff-chat-all">
                <div class="header">staff-chat-all</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1088584545987891200/aaIAhnMm_400x400.jpg"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">Hello dear staff, should we ban the cat from general?</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
