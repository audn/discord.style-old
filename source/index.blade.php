
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
                  <div class="message">
                      <div class="icon pfp column">
                        <img class="responsive-img" src="/img/audun.png"/>
                     </div>
                    <div class="body">
                      <div class="msg column">
                      <div class="user-name">audn <span class="timestamp">Today at 13:37</span></div>
                      <div class="content">
                          <img src="https://discordapp.com/assets/c90098069e61110397d4552647ade33d.svg" class="emoji" alt=":sparkles:" draggable="false"> Tired of designing your own Discord server? So am I. Today, I'll take you on a ride through discord.style!
                          <p><br>
                          We're a website featuring awesome Discord templates for your server! You don't even need to install anything, as it's all done over our Discord bot! You just invite it to your server, and read the quick tutorial!

                          <p><br>
                          <strong>It's super easy!</strong> You can watch the video in #video if you don't believe us yet.
                          <p><br>
                          <strong>Editing templates</strong><br>
                          Not satisfied with the template? No worries! You can drag the channels around, change the channel names, and delete whatever you'd like to! <i>(Everything will go back to normal after you refresh, so be careful!)</i>
                          <p><br>
                          <strong>Why should I use this</strong><br>
                          We offer a cool Discord bot that will do it all for you! Our bot will load in the template you want to get, by <span id="markdown">ds.load </span> <name>, and make a backup of the one you currently have. <i>(The backup part is something you need to do yourself, before loading in the template!)</i>
                          <p><br>
                          <strong>Real invite</strong><br>
                          Join our Discord server! We're always online to answer your questions, and we won't call you out for being a "noob", even if you don't know how to invite the BOT to your server, we'll help you!
                          <p>@include('_partials.discInvite')
                       </div>
                      </div>
                    </div>
                  </div>
                  <div class="message">
                  <div class="icon"><img class="responsive-img pl-2" src="https://discordapp.com/assets/b8029fe196b8f1382e90bbe81dab50dc.svg"/></div>
                  <div class="body">
                   <div class="content"><strong>discord.style</strong> <span style="color:hsla(0,0%,100%,.6)">joined the server</span></div>
                 </div>
                </div>
              <div class="message">
                <div class="icon"><img class="responsive-img" src="https://i.imgur.com/0z3EQVg.png"/></div>
                <div class="body">
                  <div class="user-name">discord.style <span id="bot">BOT</span></div>
                  <div class="embed-wrapper">
                    <div class="color-pill"></div>
                    <div class="content-inner">
                      <div class="content">
                        <img src="https://discordapp.com/assets/c90098069e61110397d4552647ade33d.svg" class="emoji" alt=":sparkles:" draggable="false"> <strong>Sup fellow Discordians!</strong> I've been summoned by Wumpus to style your Discord server, am I in the right place?<p><br>
                        <p>You can start by doing <span id="markdown">ds.templates</span>! If you need anything, our <span id="markdown">ds.help</span> command should cover for you, but if not, don't hesitate joining our official Discord for support.</p>
                        <p><br>
                          <img alt="cute doggo" src="https://media1.tenor.com/images/2c8d007f9afac75dcb49b8ec76b92e19/tenor.gif" style="width: 400px; border-radius: 0.4em;; height: 199px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="message">
                  <div class="icon pfp column">
                    <img class="responsive-img" src="/img/audun.png"/>
                 </div>
                <div class="body">
                  <div class="msg column">
                  <div class="user-name">audn <span class="timestamp">Today at 13:38</span></div>
                  <div class="content">
                    ds.templates
                   </div>
                  </div>
                </div>
              </div>
              <div class="message">
                  <div class="icon pfp column">
                    <img class="responsive-img" src="https://i.imgur.com/0z3EQVg.png"/>
                 </div>
                <div class="body">
                  <div class="msg column">
                  <div class="user-name">discord.style <span id="bot">BOT</span><span class="timestamp"> Today at 13:38</span></div>
                  <div class="content">
                    You can see all the templates here! <br>
                    <img src="https://discordapp.com/assets/6fc965fbef1b4aeb6167f652cd0544fc.svg" class="emoji" alt=":point_right:" draggable="false">&nbsp; <strong>https://discord.style/</strong>
                   </div>
                  </div>
                </div>
              </div>
              <div class="message">
                  <div class="icon pfp column">
                    <img class="responsive-img" src="/img/audun.png"/>
                 </div>
                <div class="body">
                  <div class="msg column">
                  <div class="user-name">audn <span class="timestamp">Today at 13:39</span></div>
                  <div class="content">
                    ds.load
                   </div>
                  </div>
                </div>
              </div>
              <div class="message">
                <div class="icon"><img class="responsive-img" src="https://i.imgur.com/0z3EQVg.png"/></div>
                <div class="body">
                  <div class="user-name">discord.style <span id="bot">BOT</span><span class="timestamp"> Today at 13:39</span></div>
                  <div class="embed-wrapper">
                    <div class="color-pill"></div>
                    <div class="content-inner">
                      <div class="content">
                        <img src="https://discordapp.com/assets/c90098069e61110397d4552647ade33d.svg" class="emoji" alt=":sparkles:" draggable="false">
                        <strong style="color:white;">Mention a valid template!</strong><p><br>
                        <p>You need to mention a valid template to load in! You can get a list off all the templates by doing <span id="markdown">ds.templates!</span></p>
                        <p><br>
                          <img alt="cute doggo" src="https://images-ext-2.discordapp.net/external/wB4Z9aLJIH0pIDv4ChIKHMnYmxCnDNKjKUpJH-N6wMc/https/media.tenor.com/images/79bd3003483eee230c13a077cc331a00/tenor.gif" style="width: 119px; border-radius: 0.4em;; height: 90px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="message">
                  <div class="icon pfp column">
                    <img class="responsive-img" src="/img/audun.png"/>
                 </div>
                <div class="body">
                  <div class="msg column">
                  <div class="user-name">audn <span class="timestamp">Today at 13:40</span></div>
                  <div class="content">
                    ds.load 1
                   </div>
                  </div>
                </div>
              </div>
              <div class="message">
                <div class="icon"><img class="responsive-img" src="https://i.imgur.com/0z3EQVg.png"/></div>
                <div class="body">
                  <div class="user-name">discord.style <span id="bot">BOT</span><span class="timestamp"> Today at 13:40</span></div>
                  <div class="embed-wrapper">
                    <div class="color-pill-green"></div>
                    <div class="content-inner">
                      <div class="content">
                        <img src="https://discordapp.com/assets/c90098069e61110397d4552647ade33d.svg" class="emoji" alt=":sparkles:" draggable="false">
                        <strong style="color:white;">Loading in!</strong><p>
                        <p>Might take up to 5 minutes, depending on the size of the template!</p>
                        <p><br>
                          <img alt="cute doggo" src="https://media1.tenor.com/images/1f84b096cbe1cc9f3763c803bb17e10e/tenor.gif?itemid=5878976" style="width: 400px; border-radius: 0.4em;; height: 199px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="message">
                <div class="icon"><img class="responsive-img" src="https://i.imgur.com/0z3EQVg.png"/></div>
                <div class="body">
                  <div class="user-name">discord.style <span id="bot">BOT</span><span class="timestamp"> Today at 13:42</span></div>
                  <div class="embed-wrapper">
                    <div class="color-pill-green"></div>
                    <div class="content-inner">
                      <div class="content">
                        <img src="https://discordapp.com/assets/c90098069e61110397d4552647ade33d.svg" class="emoji" alt=":sparkles:" draggable="false">
                        <strong style="color:white;">Ladies and gentlemen, we got em</strong><p>
                        <p>Successfully loaded in template <strong>1</strong>!</p>
                        <p><br>
                          <img alt="cute doggo" src="https://media.tenor.com/images/24a645c2860aaf2170ca56eb2c6534fd/tenor.gif" style="width: 124px; border-radius: 0.4em;; height: 90px;">
                      </div>
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
                      <div class="content">    
                        <h4 class="text-white font-bold">Make your own template!</h4>
                        <p>
                          <br>
                          Customize your own server on our website! Just add a channel, rename it to whatever you'd like, and click the big green button when done!
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
