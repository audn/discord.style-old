<?php require_once ('assets/php/head.php')?>
<?php require_once ('assets/php/header.php')?>

<body>
  <div class="hero">
    <div class="container">
      <h1 class="text-white">
        Adding template
      </h1>
      <div class="left column">
        <form netlify="netlify" class="mt-8" name="hi" method="POST" data-netlify="true">
          <div class="input-group error">
            <label for='Email'>
              <h4>
                Template link
              </h4>
            </label>
            <input type="text" name="email">
          </div>
          <div class="input-group error">
            <label for='Email'>
              <h4>
                Template Description
              </h4>
            </label>
            <input type="text" name="email">
          </div>

          <div class="input-group error">
            <label for='Description'>
              <h4>
                Description
              </h4>
            </label>
            <textarea rows="5" cols="60" type="text" name="message"></textarea>
          </div>
          <p><br>
            <input type="checkbox" name="checkbox" value="check" style="float:left;margin-right:10px;width:auto !important;" id="agree"/>
            I have read and agree to the
            <a href="guidelines.php" style="color: #516494 !important;">template guidelines</a>.
          </div>

          <div class="right column">
            <div class="input-group error">
              <label for='color'>
                <h4>
                  Thumbnail color
                </h4>
              </label>
              <input type="color" id="color" name="color" value="#e66465">
            </div>
            <div class="input-group error">
              <label for='emoji'>
                <h4>
                  Thumbnail Emoji
                </h4>
              </label>
              <textarea rows="5" cols="60" type="text" name="message"></textarea>
            </div>
            <span class="dropdown">
              <button class="btn-gray text-white square mt40 mr-15 proxima-bold">
                Add tags
                <i class="fas fa-caret-down"></i>
              </button>
              <label>
                <input type="checkbox">
                <ul>
                  <li>Streamer</li>
                  <li>Fun</li>
                  <li>School</li>
                  <li>Gaming</li>
                  <li>Roleplay</li>
                  <li>Development</li>
                  <li>Support</li>
                  <li>Anime</li>
                  <li>Community</li>
                  <li>Clans</li>
                </ul>
              </label>
            </span>

            <div class="input-group btn-main text-white square mt40 mr-15 proxima-bold">
              <div type="submit">Post template</div>
            </div>
          </div>

        </form>

        <div class="after-float">&nbsp;</div>
      </div>
    </div>
    <div class="page2">
      <div class="container-trending">
        <div class="content">
          <div class="template column">
            <div class="template-left column template-emoji">
              🎮
            </div>
            <div class="template-right column">
              <span class="template-title">
                Template Name
              </span>
              <div class="template-author">
                Made by audn#0001
              </div>
            </div>
            <div class="template-content after-float">
              Type something about this template in this little box here
              <div class="template-tags">
                <div class="tag column">
                  gaming
                </div>
                <div class="tag column">
                  community
                </div>
              </div>
            </div>
            <div class="template-footer">

              <div class="template-footer-left column">
                <span class="template-downloads">848</span>
                <br>Downloads
              </div>

              <div class="column">
                <span class="template-downloads">12</span>
                <br>Votes
              </div>
              <div class="after-float">
                &nbsp;
              </div>
            </div>
          </div>
          <div class="server-preview column">
            &nbsp;
          </div>
          <div class="roles-preview column">
            <span class="previewRole" style="border: 1px solid #2ecc71">
              <span class="previewRoleDot align-middle" style="background-color: #2ecc71"></span>
              <span class="">Staff</span>
            </span>
            <span class="previewRole" style="border: 1px solid #2ecc71">
              <span class="previewRoleDot align-middle" style="background-color: #2ecc71"></span>
              <span class="">Staff</span>
            </span>
            <span class="previewRole" style="border: 1px solid #2ecc71">
              <span class="previewRoleDot align-middle" style="background-color: #2ecc71"></span>
              <span class="">Staff</span>
            </span>
            <span class="previewRole" style="border: 1px solid #2ecc71">
              <span class="previewRoleDot align-middle" style="background-color: #2ecc71"></span>
              <span class="">Staff</span>
            </span>
            <span class="previewRole" style="border: 1px solid #2ecc71">
              <span class="previewRoleDot align-middle" style="background-color: #2ecc71"></span>
              <span class="">Staff</span>
            </span>
          </div>
          <div class="after-float">
            &nbsp;
          </div>
          <!-- end template -->
        </div>
      </div>
    </div>
  </body>
