<div class="atitles-group">
  <div class="atitles">
    <div class="view-area">
      <?php 
      $atitleTemplate = [
              'img' => '/img/tmp/cards/last-titles/1.png',
              'title_rus' => 'Эта фарфоровая кукла влюбилась',
              'title_original' => 'Sono Bisque Doll wa Koi wo Suru',
              'studio' => 'CloverWorks',
              'episodes' => [5,12],
              'status' => 'Онгоинг',
              'dubbers' => ['Jerwis','Mirona','Orru','Indominus_Rex'],
              'tags' => ['Осень','2022','TV'],
              'genres' => ['Школа', 'Романтика', 'Сэйнэн', 'Повседневность'],
              'user_status' => 'watching'
      ];
      $atitles = [
          [
              'img' => '/img/tmp/cards/last-titles/1.png',
              'user_status' => 'watching'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/2.png',
              'user_status' => 'planned'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/3.png',
              'user_status' => 'planned'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/4.png',
              'user_status' => 'viewed'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/7.png',
              'user_status' => 'rewatching'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
          [
              'img' => '/img/tmp/cards/last-titles/6.png',
              'user_status' => 'favorite'
          ],
      ];

      ?>
      <?php $pageNum = 1; ?>
      <div class="page" data-page="<?php print $pageNum; ?>">
        <?php for ($i = 0; $i < count($atitles); $i++) { 
            $atitleTmp = $atitles[$i];
            $atitle = $atitleTemplate;
            $atitle['img'] = $atitleTmp['img'];
            $atitle['user_status'] = $atitleTmp['user_status'];
            include('card-atitle.php');
        ?>
          <?php if ($i and (($i+1) % 6 == 0)) { 
              $pageNum++;
          ?>
      </div>
      <div class="page" data-page="<?php print $pageNum; ?>">
          <?php } ?>
        <?php } ?>
      </div>
    </div>
  </div>

  <div class="w-pager-oval">
    <?php for ($i = 0; $i < ceil(count($atitles) / 6); $i++) { ?>
      <a href="#" data-page="<?php print $i+1; ?>" class="w-page <?php if (! $i) { print "w-current-page"; } ?>"></a>
    <?php } ?>
  </div>
</div>
