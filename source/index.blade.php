
@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')

    {{-- You can use the head stack to push page specific elements to the head, such as stylesheets --}}
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
                <!--
                <div class="item">
                  <button class="guild-add">+</button>
                </div>
              -->
              </div>
            </div>
            <div class="sidebar-panel hide-on-med-and-down">
              <div class="header">Discord Templates</div>
              <div class="items" id="items"><a href="#">
                  <div class="item trigger-group active" data="default">help</div></a><a href="#">
                  <div class="item trigger-group" data="tips">tips</div></a><a href="#">
                  <div class="item trigger-group locked" data="staff-chat-all">staff-chat-all</div></a>
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
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
