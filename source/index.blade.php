
@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')
  @include('_partials.header')


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
                <div class="minimize" onclick="minimize"></div>
                <div class="zoom" onclick="zoom"></div>
              </div>
              <script>
              </script>
              @include('_partials.nav')
            </div>
            <div class="sidebar-panel hide-on-med-and-down">
              <div class="header">Discord Templates</div>
              <div class="items" id="items">
                <div class='all-slides'>
                 <div class='slides'>
                <div class="category" id="category">
                  <svg class="iconCollapsed-3hFp_8 iconTransition-2pOJ7l directionRight-O8AY4M" width="12" height="12" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7 10L12 15 17 10"></path>
                  </svg>
                  <img src="https://discordapp.com/assets/e4d52f4d69d7bba67e5fd70ffe26b70d.svg" class="emoji jumboable" alt=":star:" draggable="false"> Text Channels
                  <svg style="float:right;" name="PlusAlt" class="addButtonIcon-3u-3Hu" width="18" height="18" viewBox="0 0 18 18">
                  <polygon fill-rule="nonzero" id="category-plus" class="category-expand" fill="#6d6e71" points="15 10 10 10 10 15 8 15 8 10 3 10 3 8 8 8 8 3 10 3 10 8 15 8">
                  </polygon>
                </svg>
               </div>

               <a href="#" style="width:220px;top:30px;">
                  <div class="item trigger-group active mt-32" data="default">general</div>
                </a>
                <a href="#" style="width:220px;top:60px;">
                  <div class="item trigger-group locked" data="streamer">streamer</div>
                </a>
                <a href="#" style="width:220px;top:90px;">
                  <div class="item trigger-group locked" data="community">community</div>
                </a>
                <a href="#" style="width:220px;top:120px;">
                  <div class="item trigger-group locked " data="startup">startup</div>
                </a>
                <a href="#" style="width:220px;top:150px;">
                  <div class="item trigger-group" data="git">changes</div>
                </a>
                <a href="#" style="width:220px;top:180px;">
                  <div style="display:none" class="item trigger-group locked" data="partner">Partner</div>
                </a>
              </div>
             </div>
            </div>
          </div>
            <div class="messages-panel">
              <div class="messages-group hide-unless-show" id="default">
                <div class="header">general</div>
                <div class="messages">

                  <div class="message">
                      <div class="icon pfp column">
                        <img class="responsive-img" src="https://pbs.twimg.com/profile_images/1106214503069429763/Y8VhNXcd_400x400.png"/>
                     </div>
                    <div class="body">
                      <div class="msg column">
                      <div class="user-name">audn <span class="timestamp">Today at 13:37</span></div>
                      <div class="content">
                          <img src="https://discordapp.com/assets/c90098069e61110397d4552647ade33d.svg" class="emoji" alt=":sparkles:" draggable="false"> Tired of designing your own Discord server? So am I. Today, I'll take you on a ride through discord.style!
                          <p><br>
                          We're a website featuring awesome Discord templates for your server! You don't need to install anything! It's only needed to invite our Discord bot to you server,  in order to download the templates!
                          <p><br>
                          <strong>It's super easy!</strong> You can watch the video in #video if you don't believe us yet.
                          <p><br>
                          <strong>Editing templates</strong><br>
                          Not satisfied with the template? No worries! You can drag them, change name, and delete whatever you'd like to!
                          Keep in mind, it will go back to normal after you refresh the page
                          <p><br>
                          <strong>Why should I use this</strong><br>
                          We offer a cool Discord BOT that will do it all for you! You can do commands such as <span id="markdown">ds.load </span>, or even <span id="markdown">ds.new</span> to save your own template, before loading in one of ours!
                          <p><br>
                          <strong>Real invite</strong><br>
                          Join our Discord server! We're always online to answer your questions, and we won't call you out for being a "noob", even if you don't know how to invite the BOT to your server, we'll help you!
                          <p>@include('_partials.discInvite')
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messages-group hide-unless-show" id="streamer">
                <div class="header">streamer</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1106214503069429763/Y8VhNXcd_400x400.png"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">
                        <div class="body">
                          <strong>Streamer templates!</strong><br>
                          Template for Content Creators, such as Streamers or Youtubers.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messages-group hide-unless-show" id="community">
                <div class="header">streamer</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1106214503069429763/Y8VhNXcd_400x400.png"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">
                        <div class="body">
                          <strong>Community templates!</strong><br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messages-group hide-unless-show" id="startup">
                <div class="header">streamer</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1106214503069429763/Y8VhNXcd_400x400.png"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">
                        <div class="body">
                          <strong>Startup templates!</strong><br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messages-group hide-unless-show" id="add-server">
                <div class="header">Adding server</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1106214503069429763/Y8VhNXcd_400x400.png"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">Add your server on our website!
                        <div class="body">
                          <div class="embed-wrapper">
                            <div class="color-pill"></div>
                            <div class="content-inner">
                              <div class="content">
                                <div class="title">Partnership</div>
                                <p>audn#0001</p>
                                <p>audunhilden@live.no</p>
                                <p>Average 240 daily views</p><br/>
                                <p><b>
                                    <u>Quick contact  </u></b></p>
                                <p>Avg. </p>
                                <p>Avg. </p>
                                <p>Avg. </p>
                              </div><img class="thumb" src="https://i.imgur.com/0z3EQVg.png"/>
                            </div>
                          </div>
                        </div>
                      </div>
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
