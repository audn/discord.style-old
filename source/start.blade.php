
@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')
  @include('_partials.start_header')


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
                <div class="item"><a href="https://apex-hub.com" target="_Blank"><img class="responsive-img" src="https://cdn.discordapp.com/icons/550004577404190729/04c1fac06656f28ad0ad5c3e8a2a6fea.png?"/></a></div>
                <div class="item">
                  <a href="#">
                    <button class="guild-add item trigger-group locked" data="add-server">
                      <span style="top: -4px;left: 2px;right: 0px; position: absolute;">
                        +
                      </span>
                    </button>
                  </a>
                </div>
              </div>
            </div>
            <div class="sidebar-panel hide-on-med-and-down">
              <div class="header">Discord Templates</div>
              <div class="items" id="items">
                <div class="category" id="category">
                  <path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M7 10L12 15 17 10"></path>
                  Welcome to server
                  <svg style="float:right;" name="PlusAlt" class="addButtonIcon-3u-3Hu" width="18" height="18" viewBox="0 0 18 18">
                  <polygon fill-rule="nonzero" id="category-plus" class="category-expand" fill="#6d6e71" points="15 10 10 10 10 15 8 15 8 10 3 10 3 8 8 8 8 3 10 3 10 8 15 8">
                  </polygon>
                </svg>
               </div><a href="#">
                  <div class="item trigger-group active" data="default">help</div></a><a href="#">
                  <div class="item trigger-group" data="tips">tips</div></a><a href="#">
                  <div class="item trigger-group locked" data="staff-chat-all">staff-chat-all</div></a>
                  <div style="display:none" class="item trigger-group locked" data="add-server">Partner</div></a>
             </div>
            </div>
            <div class="messages-panel">
              <div class="messages-group hide-unless-show" id="default">
                <div class="header">help</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://i.imgur.com/A256kGf.jpg"/></div>
                    <div class="body">
                      <div class="user-name">Adam</div>
                      <div class="content">Hello</div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://i.imgur.com/624tugY.jpg"/></div>
                    <div class="body">
                      <div class="user-name">Eve</div>
                      <div class="content">🍎 <i>*Eats apple*</i></div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1105210644406644736/lc7r2HOg_200x200.jpg"/></div>
                    <div class="body">
                      <div class="user-name">God</div>
                      <div class="content">Are you fucking serious?
                      </div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img ml-2 r180" style="fill:red;" src="https://cdn.discordapp.com/attachments/534174053184045057/554775908683350018/join.png"/></div>
                    <div class="body">
                      <div class="content"><strong>God</strong> <span style="color:hsla(0,0%,100%,.6)">left the server</span></div>
                    </div>
                  </div>

                  <div class="message">
                    <div class="icon"><img class="responsive-img pl-2" src="https://discordapp.com/assets/b8029fe196b8f1382e90bbe81dab50dc.svg"/></div>
                    <div class="body">
                      <div class="content"><strong>Envy</strong> <span style="color:hsla(0,0%,100%,.6)">joined the server</span></div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img pl-2" src="https://discordapp.com/assets/b8029fe196b8f1382e90bbe81dab50dc.svg"/></div>
                    <div class="body">
                      <div class="content"><strong>Greed</strong> <span style="color:hsla(0,0%,100%,.6)">joined the server</span></div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img pl-2" src="https://discordapp.com/assets/b8029fe196b8f1382e90bbe81dab50dc.svg"/></div>
                    <div class="body">
                      <div class="content"><strong>Gluttony</strong> <span style="color:hsla(0,0%,100%,.6)">joined the server</span></div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img pl-2" src="https://discordapp.com/assets/b8029fe196b8f1382e90bbe81dab50dc.svg"/></div>
                    <div class="body">
                      <div class="content"><strong>Lust</strong> <span style="color:hsla(0,0%,100%,.6)">joined the server</span></div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img pl-2" src="https://discordapp.com/assets/b8029fe196b8f1382e90bbe81dab50dc.svg"/></div>
                    <div class="body">
                      <div class="content"><strong>Pride</strong> <span style="color:hsla(0,0%,100%,.6)">joined the server</span></div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img pl-2" src="https://discordapp.com/assets/b8029fe196b8f1382e90bbe81dab50dc.svg"/></div>
                    <div class="body">
                      <div class="content"><strong>Sloth</strong> <span style="color:hsla(0,0%,100%,.6)">joined the server</span></div>
                    </div>
                  </div>
                  <div class="message">
                    <div class="icon"><img class="responsive-img pl-2" src="https://discordapp.com/assets/b8029fe196b8f1382e90bbe81dab50dc.svg"/></div>
                    <div class="body">
                      <div class="content"><strong>Wrath</strong> <span style="color:hsla(0,0%,100%,.6)">joined the server</span></div>
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
              <div class="messages-group hide-unless-show" id="add-server">
                <div class="header">Adding server</div>
                <div class="messages">
                  <div class="message">
                    <div class="icon"><img class="responsive-img" src="https://pbs.twimg.com/profile_images/1088584545987891200/aaIAhnMm_400x400.jpg"/></div>
                    <div class="body">
                      <div class="user-name">audn</div>
                      <div class="content">Add your server on our website!
                        <div class="body">
                          <div class="embed-wrapper">
                            <div class="color-pill"></div>
                            <div class="content-inner">
                              <div class="content">
                                <div class="title">Discord.design</div>
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
