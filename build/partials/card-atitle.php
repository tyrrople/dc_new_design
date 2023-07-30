<div class="w-card-atitle w-card-atitle-status-<?php print $atitle["user_status"] ?>">
  <div class="card">
    <a href="#">
      <img src="<?php print $atitle['img']; ?>"/>
    </a>
    <div class="info">
      <div class="rating">
        <div class="text">3,5</div>
        <span class="icon"><img src="/img/widget/icon/star.svg"/></span>
      </div>

      <div class="actions">
        <?php include("widgets/widget-atitle-status-switch-notext.php"); ?>
      </div>
    </div>
  </div>
  <div class="popup">
    <div>
      <div class="div">
        <div class="title-rus"><?php print $atitle['title_rus'] ?></div>
        <div class="title-original"><?php print $atitle['title_original'] ?></div>
      </div>
      <div class="studio">
        <span class="title">Студия:</span>
        <span class="w-studio-name-text">
          <?php print $atitle['studio'] ?>
        </span>
      </div>
      <div class="episodes">
        <span class="title">Эпизоды:</span>
        <span class="data">
          <?php print $atitle['episodes'][0] ?>/<?php print $atitle['episodes'][1] ?>
        </span>
        <span class="w-group-tag m-tag-color-green"><?php print $atitle['status'] ?></span>
      </div>
      <div class="dubbers">
        <span class="title">Озвучили:</span>
        <?php foreach ($atitle['dubbers'] as $dubber) { ?>
          <span class="dubber w-studio-name-text"><?php print $dubber ?></span>
        <?php } ?>
      </div>
      <div class="tags">
        <?php $tag_colors = [
            'Осень' => 'blue', '2022' => 'lilac', 'TV' => 'red'
        ];?>
        <?php foreach ($atitle['tags'] as $tag) { ?>
          <span class="w-group-tag m-tag-color-<?php print $tag_colors[$tag] ?>"><?php print $tag ?></span>
        <?php } ?>
      </div>
      <div class="genres">
        <?php foreach ($atitle['genres'] as $genre) { ?>
          <span class="w-genre-tag"><?php print $genre ?></span>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
