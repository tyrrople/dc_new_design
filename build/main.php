<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Главная</title>
    <link rel="stylesheet" href="/css/main.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/js/vendor/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="/js/globals.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="top-pane">

        <div class="video">
          <?php 
          $videos = [
              [
                  "src" => "/img/tmp/output.mp4",
                  "poster" => "/img/tmp/output.mp4.jpg"
              ],
              [
                  "src" => "/img/tmp/dc1.mp4",
                  "poster" => "/img/tmp/dc1.mp4.jpg"
              ],
              [
                  "src" => "/img/tmp/dc2.mp4",
                  "poster" => "/img/tmp/dc2.mp4.jpg"
              ],
              [
                  "src" => "/img/tmp/dc3.mp4",
                  "poster" => "/img/tmp/dc3.mp4.jpg"
              ]
          ];
          ?>
          <div class="player-container">
            <div class="view-port">
              <?php foreach ($videos as $video) { ?>
                <video data-src="<?php print $video["src"] ?>" muted loop>
                  <source src="<?php print $video['src'] ?>" type="video/mp4">
                </video>
              <?php } ?>
            </div>
          </div>

          <!-- player-bottom start -->
          <div class="player-bottom">
            <div class="group-left">
              <?php 
              $atstat = [
                  'status' => 'none'
              ];
              ?>
              <?php include("partials/widgets/widget-atitle-status-switch.php"); ?>
              <a href="#" class="w-button-light go-to-title">Перейти к тайтлу</a>
            </div>

            <div class="group-center">
              <a href="#" id="js-main-scroll-to-updates">
                <img alt="" src="/img/widget/icon/arrow_down_big.svg"/>
              </a>
            </div>

            <div class="group-right">
              <div class="seek-widget">
                <?php for ($i = 0; $i < count($videos); $i++) { ?>
                  <a href="#" data-url="<?php print $videos[$i]['src'] ?>" class="fragment <?php if ($i === 0) { print "current-fragment"; } ?>"><div class="progress"></div></a>
                <?php } ?>
              </div>
            </div>
          </div>
          <!-- player-bottom end -->

          
          <div class="overlay">
            <?php include("partials/widgets/toolbar.php"); ?>
            <div class="clearfix"></div>

            <div class="player-top">

              <div class="title-info">
                <a href="#" class="title">Твоё имя / Your name</a>
                <div class="genres">
                  <a href="#" class="w-genre-tag">Сёнен</a>
                  <a href="#" class="w-genre-tag">Исекай</a>
                  <a href="#" class="w-genre-tag">Гарем</a>
                  <a href="#" class="w-genre-tag">Что?</a>
                </div>
                <div class="clearfix"></div>
                <div class="tags">
                  <a href="#" class="w-group-tag m-tag-color-red">Film</a>
                  <a href="#" class="w-group-tag m-tag-color-blue">Зима</a>
                  <a href="#" class="w-group-tag m-tag-color-lilac">2019</a>
                </div>
              </div>

              <div class="player-control-pp">
                <a href="#" class="m-state-pause">
                  <div class="js-icon"></div>
                  <div class="js-text"><span></span></div>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="bottom-pane">
        <div class="gradients">
          <div class="gradient-pass1"></div>
          <div class="gradient-pass2"></div>
        </div>

        <div class="content-pane">
          <!-- ongoing -->
          <div class="picted-list" style="margin-top: 0">
            <h2 class="main-page-title" id="last-updates-header">Последние обновления</h2>
            <?php include('partials/main-page-atitles.php'); ?>
          </div>

          <!-- popular releases -->
          <div class="picted-list" style="margin-top: 8vw">
            <h2 class="main-page-title">Популярные релизы</h2>
            <?php include('partials/main-page-atitles.php'); ?>
          </div>

          <!-- popular genres -->
          <div class="picted-list" style="margin-top: 8vw">
            <h2 class="main-page-title">Популярные жанры</h2>
            <?php include('partials/main-page-top-genres.php'); ?>
          </div>

          <!-- news -->
          <div class="picted-list" style="margin-top: 8vw">
            <h2 class="main-page-title">Важные новости</h2>
            <div class="news">
              <?php 
              $new = [
                  'img' => '/img/tmp/cards/news/3.png',
                  'text' => 'ВНИМАНИЕ! Лена (Orru) не хочет озвучивать 6-ой сезон ДжоДжо!',
                  'date' => '01.07.22',
                  'time' => '22:41'
              ]; ?>
              <?php include('partials/main-page-new.php'); ?>
              <?php 
              $new = [
                  'img' => '/img/tmp/cards/news/1.png',
                  'text' => 'Почему так популярны исекаи? Пытаемся ответить на этот вопрос!',
                  'date' => '22.02.22',
                  'time' => '17:27'
              ]; ?>
              <?php include('partials/main-page-new.php'); ?>
              <?php 
              $new = [
                  'img' => '/img/tmp/cards/news/2.png',
                  'text' => 'Сборник няшных неко-лолей вам в ленту!',
                  'date' => '19.02.22',
                  'time' => '15:13'
              ]; ?>
              <?php include('partials/main-page-new.php'); ?>
            </div>
          </div>
        </div>

        <div class="footer">
          <div class="top-part">
            <div>
              <div class="info">
                Для правообладателей / Сотрудничество:<br/>
                <a href="#">partners@dreamerscast.com</a>
              </div>
              <div class="info">
                Появилась проблема? – Пиши:<br/>
                <a href="#">support@dreamerscast.com</a>
              </div>
            </div>
            <div class="socials">
              <a href="#" class="social-tg"></a>
              <a href="#" class="social-vk"></a>
              <a href="#" class="social-youtube"></a>
              <a href="#" class="social-discord"></a>
              <a href="#" class="social-twitch"></a>
              <a href="#" class="social-tiktok"></a>
            </div>
          </div>

          <div class="bottom-part">
            <div class="disclaimer">Все материалы на сайте представлены только для ознакомления</div>
            <div class="policy"><a href="#">Политика конфиденциальности</a></div>
          </div>
        </div>

      </div>
    </div>
    <script type="text/javascript" src="/js/popups.js"></script>
    <script type="text/javascript" src="/js/main-page.js"></script>
    <script type="text/javascript" src="/js/main-page-player.js"></script>
  </body>
</html>
