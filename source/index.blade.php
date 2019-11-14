
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
             <!-- elements under this div, is not slide"able"-->
             <div class="category" id="category">
               <svg class="iconCollapsed-3hFp_8 iconTransition-2pOJ7l directionRight-O8AY4M" width="12" height="12" viewBox="0 0 24 24">
                 <path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7 10L12 15 17 10"></path>
               </svg>
               <img src="https://discordapp.com/assets/e770e7da3fb872af10856268118a6e34.svg" class="emoji jumboable" alt=":star:" draggable="false"> Website related
               <svg style="float:right;" name="PlusAlt" class="addButtonIcon-3u-3Hu" width="18" height="18" viewBox="0 0 18 18">
               <polygon fill-rule="nonzero" id="category-plus" class="category-expand" fill="#6d6e71" points="15 10 10 10 10 15 8 15 8 10 3 10 3 8 8 8 8 3 10 3 10 8 15 8">
               </polygon>
             </svg>
            </div>

            <a href="#" style="width:220px;top:30px;">
               <div class="item trigger-group" data="default">support</div>
             </a>
             <a href="#" style="width:220px;top:30px;">
                <div class="item trigger-group" data="default">bugs</div>
              </a>
              <a href="#" style="width:220px;top:30px;">
                 <div class="item trigger-group" data="default">known-issues</div>
               </a>

               <a href="#" class="absolute" style="width:220px;top:30px;">
                 <a href="#" style="width:220px;top:30px;bottom:0;">
                    <div class="relative" style="margin-top:193px;background:#292b2f;padding:10px;margin-left: -10px;width: 240px;"data="default">
                    <div class="icon pfp column">
    	                 <img class="responsive-img float-left" src="/img/audun.png" style="border-radius:50%;margin-right:10px;width:32px;">
    	                </div>
                      <div class="user-name text-white font-bold">audn </div>
                      <font style="color:#999b9c;font-size:10px;">#0001</font>
                    </div>
                  </a>
                </a>

            </div>
          </div>
            <div class="messages-panel">
              <div class="messages-group hide-unless-show" id="default">
                <div class="header">general</div>
                <div class="messages">
                  <div class="message" style="border: 1px solid transparent;">
                     <div class="body">
                       <div class="wrappers">
                       <div class="content" style="text-align:left;">
                         <img src="/img/wumpus.png" class="w-64">
                         <p>
                         <br>
                         <h4 class="text-white font-bold text-3xl">Get pre-made templates!</h4>
                         <p>
                           <br>
                           We all hate to add tons of text-channels in our Discord server, and find fancy symbols to use.. right? That's why we're introducing <strong>discord.style</strong>
                           <div style="margin-top:25px;">

                       </div>
                     </div>
                   </div>
                   <h4 class="text-grey text-lg" style="margin-top:40px !important;">
                     Discover amazing templates made by our users!
                   </h4>
                   <div style="border-bottom:solid 1px #3a3d46">&nbsp;</div>

                    <div class="stock">
                      <div class="stockphoto">
                        Pewdiepie
                      </div>
                      <div class="info">
                          <span id="title">Pewdiepie</span>
                          <span id="content">Copy of Pewdiepie official Discord server!</div>
                      </div>

                      <div class="stock">
                        <div class="stockphoto">
                           Streamer
                        </div>
                        <div class="info">
                            <span id="title">Twitch Streamer</span>
                            <span id="content">A perfect template for Twitch Streamers!</div>
                        </div>


                      <div class="stock">
                        <div class="stockphoto">
                          Shroud
                        </div>
                          <div class="info">
                            <span id="title">Shroud</span>
                            <span id="content">Copy of Shourds official Discord server!</div>
                        </div>

                  </div>
                </div>
              </div>
              </div>
              <div class="messages-group hide-unless-show" id="streamer">
                <div class="header">streamer</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="/img/audun.png"/></div>
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
                    <div class="icon"><img class="responsive-img" src="/img/audun.png"/></div>
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
                    <div class="icon"><img class="responsive-img" src="/img/audun.png"/></div>
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
                  <div class="message" style="border: 0px !important;margin-top: 4rem;">
                    <div class="body">
                      <div class="wrapper">
                      <div class="content" style="text-align:center;">
                        <img src="/img/welcome.png" class="w-64">
                        <p>
                        <br>
                        <h4 class="text-white font-bold text-3xl">Make your own template!</h4>
                        <p>
                          <br>
                          Customize your own server on our website! Just add a channel, rename it to whatever you'd like, and click the big green button when done!

                          <p>

                          <div class="content" style="margin-top:25px;">
                            <div class="select">
                              <div id="text">
                                <i class="fas fa-gamepad-alt"><!--  --></i>
                                <p>
                                  Gaming Server
                              </div>
                            </div>
                            <div class="select">
                              <div id="text">
                                Content Creator
                              </div>
                            </div>
                          <div class="select">
                            <div id="text">
                              Study Group
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
  </div>

@endsection
