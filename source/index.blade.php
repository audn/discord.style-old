
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
              <div class="items">
                <div class="item"><a href="#"><img class="responsive-img" src="https://i.imgur.com/0z3EQVg.png"/></a></div>
                <div class="item">
                  <!--
                  <a href="#">
                    <button class="guild-add item trigger-group locked" data="add-server">
                      <span style="top: -4px;left: 2px;right: 0px; position: absolute;">
                        +
                      </span>
                    </button>
                  </a>
                -->
                </div>
              </div>
            </div>
            <div class="sidebar-panel hide-on-med-and-down">
              <div class="header">Discord Templates</div>
              <div class="items" id="items">
                <div class="category" id="category">
                  <svg class="iconCollapsed-3hFp_8 iconTransition-2pOJ7l directionRight-O8AY4M" width="12" height="12" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7 10L12 15 17 10"></path></svg>
                  Important things
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
                        <br>You can get started by clicking the server icons on the left.
                        <br>The numbers indicate what kind of template it is (1st template, 2nd template).. and so on.
                        <p><br>
                        <strong class="disc-bold">Help!</strong>
                        <br>
                          We're always online to help! But it's probably best for you to check out
                        <a href="#">
                          <span class="channelID trigger-group" data="help">#help</span></a> first!

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
              <div class="messages-group hide-unless-show" id="help">
                <div class="header">help</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://i.imgur.com/0z3EQVg.png"/></div>
                    <div class="body">
                      <div class="user-name role-main">Discord.Style <span id="bot">BOT</span></div>
                      <div class="content">
                        <div class="body">
                          <div class="embed-wrapper">
                            <div class="color-pill-green"></div>
                            <div class="content-inner">
                              <div class="content">
                                <div class="title">I'm here to help!</div>
                                <p>This is a tab similar to FAQ (Frequently Asked Questions).</p>
                                <br>
                                <p>
                                <strong class="disc-bold">How do I change template?</strong><br>
                                You can <i>change servers</i> like you would normally do, and it changes the template. Keep in mind that this only works on the channels with a number as their server icon.
                                <p><br>
                                <strong class="disc-bold">(Not enough questions asked yet)</strong><br>
                                You guys need to ask us some more questions, so that we can add them here!
                              </div><img class="thumb" src="https://i.imgur.com/0z3EQVg.png"/>
                            </div>
                          </div>
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
