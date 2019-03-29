
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
                <div class="minimize"></div>
                <div class="zoom"></div>
              </div>
              @include('_partials.nav')
            </div>
            <div class="sidebar-panel hide-on-med-and-down">
              <div class="header">Discord Templates</div>
              <div class="items" id="items">
                <div class="category" id="category">
                  <svg class="iconCollapsed-3hFp_8 iconTransition-2pOJ7l directionRight-O8AY4M" width="12" height="12" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7 10L12 15 17 10"></path></svg>
                  <img src="https://discordapp.com/assets/e4d52f4d69d7bba67e5fd70ffe26b70d.svg" class="emoji jumboable" alt=":star:" draggable="false"> Text Channels
                  <svg style="float:right;" name="PlusAlt" class="addButtonIcon-3u-3Hu" width="18" height="18" viewBox="0 0 18 18">
                  <polygon fill-rule="nonzero" id="category-plus" class="category-expand" fill="#6d6e71" points="15 10 10 10 10 15 8 15 8 10 3 10 3 8 8 8 8 3 10 3 10 8 15 8">
                  </polygon>
                </svg>
               </div>
               <a href="#">
                  <div class="item trigger-group active" data="default">general</div>
                </a>
                <a href="#">
                  <div class="item trigger-group locked" data="streamer">streamer</div>
                </a>
                <a href="#">
                  <div class="item trigger-group locked" data="community">community</div>
                </a>
                <a href="#">
                  <div class="item trigger-group locked mb-6" data="startup">startup</div>
                </a>
                <div class="category" id="category">
                  <svg class="iconCollapsed-3hFp_8 iconTransition-2pOJ7l directionRight-O8AY4M" width="12" height="12" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7 10L12 15 17 10"></path></svg>
                  <img src="https://discordapp.com/assets/d0df7bf4acd843defa4e417cf767a574.svg" class="emoji jumboable" alt=":sunglasses:" draggable="false"> Website things
                  <svg style="float:right;" name="PlusAlt" class="addButtonIcon-3u-3Hu" width="18" height="18" viewBox="0 0 18 18">
                  <polygon fill-rule="nonzero" id="category-plus" class="category-expand" fill="#6d6e71" points="15 10 10 10 10 15 8 15 8 10 3 10 3 8 8 8 8 3 10 3 10 8 15 8">
                  </polygon>
                </svg>
               </div>
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
                        <strong class="disc-bold">Welcome to our website!</strong>
                        <p>
                        <div class="wrapper-35wsBm userSelectNone-Iy6XEP cursorDefault-331ZcI">
                          <h5 class="h5-18_1nd title-3sZWYQ size12-3R0845 height16-2Lv3qA weightSemiBold-NJexzi header-2BTCnc marginBottom8-AtZOdT">
                            You've been invited to join a server
                          </h5>
                          <div class="content-2U5lSY">
                            <div class="icon-3o6xvg guildIconImage-3qTk45 guildIcon-lQ0uiM iconSizeLarge-161qtT iconActiveLarge-2nzn9z" style="background-image: url(&quot;https://i.imgur.com/0z3EQVg.png?&quot;);">
                            </div>
                            <div class="flex-1xMQg5 flex-1O1GKY vertical-V37hAW flex-1O1GKY directionColumn-35P_nr justifyCenter-3D2jYp alignStretch-DpGPf3 noWrap-3jynv6 guildInfo-1STtYi" style="flex: 1 1 auto;">
                            <div class="guildName-2hvnt_ marginBottom4-2qk4Hy medium-zmzTW- size16-14cGz5 height20-mO2eIN weightSemiBold-NJexzi">
                              discord.style
                            </div>
                            <div class="guildDetail-1nRKNE small-29zrCQ size12-3R0845 height16-2Lv3qA weightSemiBold-NJexzi">
                          <div class="flex-1xMQg5 flex-1O1GKY horizontal-1ae9ci horizontal-2EEEnY flex-1O1GKY directionRow-3v3tfG justifyStart-2NDFzi alignCenter-1dQNNs noWrap-3jynv6" style="flex: 0 1 auto;">
                            <span class="statusOnline-8PnF5L status-2L8Zc7">&nbsp;</span>
                            <span class="onlineCount-w6_WmG">10,521 Online</span>
                            <span class="statusOffline-37RKt7 status-2L8Zc7">&nbsp;</span>
                            <span>52,314 Members</span>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="button-3To2tQ height20-mO2eIN button-38aScr lookFilled-1Gx00P colorGreen-29iAKY buttonSize-DbrWhv grow-q77ONN">
                      <div class="contents-18-Yxp buttonInner-1IRxqd">
                        <div class="buttonContent-18Mz6_">Join</div>
                      </div>
                    </button>
                  </div>
                </div>

                      </div>
                    </div>
                  </div>
                </div>

                </div>
              </div>
              <div class="messages-group hide-unless-show" id="roadmap">
                <div class="header">roadmap</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1106214503069429763/Y8VhNXcd_400x400.png"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">
                        <strong class="discord-bold">
                          Look at the changes we've taken into concideration!
                        </strong>
                        <br><p>- Press <span id="markdown">spacebar</span> to randomly select a theme.
                          <div class="reactions">
                            <div class="react">
                              <img src="https://discordapp.com/assets/2af915882260fdb89538d1610e1d9baa.svg" alt="👍" draggable="false" class="emoji">
                              <div class="reactionCount" style="min-width: 9px;">1</div>
                            </div>
                            <div class="react">
                              <img src="https://discordapp.com/assets/9e1c3ddc9da7effefe8a370b7c33ed7b.svg" alt="👎" draggable="false" class="emoji">
                              <div class="reactionCount" style="min-width: 9px;">1</div>
                            </div>
                          </div>
                        <br><p>- Make it so people can actually chat online here.
                          <div class="reactions">
                            <div class="react">
                              <img src="https://discordapp.com/assets/2af915882260fdb89538d1610e1d9baa.svg" alt="👍" draggable="false" class="emoji">
                              <div class="reactionCount" style="min-width: 9px;">1</div>
                            </div>
                            <div class="react">
                              <img src="https://discordapp.com/assets/9e1c3ddc9da7effefe8a370b7c33ed7b.svg" alt="👎" draggable="false" class="emoji">
                              <div class="reactionCount" style="min-width: 9px;">1</div>
                            </div>
                          </div>
                        <br><p>- Add some cool animations to buttons.
                          <div class="reactions">
                            <div class="react">
                              <img src="https://discordapp.com/assets/2af915882260fdb89538d1610e1d9baa.svg" alt="👍" draggable="false" class="emoji">
                              <div class="reactionCount" style="min-width: 9px;">1</div>
                            </div>
                            <div class="react">
                              <img src="https://discordapp.com/assets/9e1c3ddc9da7effefe8a370b7c33ed7b.svg" alt="👎" draggable="false" class="emoji">
                              <div class="reactionCount" style="min-width: 9px;">1</div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messages-group hide-unless-show" id="git">
                <div class="header">changes</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1106214503069429763/Y8VhNXcd_400x400.png"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">
                        <strong class="discord-bold">
                          Look at the changes we've done public!
                        </strong>
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
