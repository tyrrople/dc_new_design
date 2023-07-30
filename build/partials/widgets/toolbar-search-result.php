<div class="w-search-result">
  <div class="table-hor">
    <a href="#" class="picture">
      <img src="<?php print $sres['img'] ?>"/>
    </a>
    <div class="table-vert">
      <div class="title-rus"><?php print $sres['title_rus'] ?></div>
      <div class="hor-row">
        <div class="type">
          <span>Тип:</span>
          <a href="#" class="w-group-tag m-tag-color-red"><?php print $sres['type'] ?></a>
        </div>
        <div class="year">
          <span>Год:</span>
          <a href="#" class="w-group-tag m-tag-color-lilac"><?php print $sres['year'] ?></a>
        </div>
        <div class="season">
          <span>Сезон:</span>
          <a href="#" class="w-group-tag m-tag-color-blue"><?php print $sres['season'] ?></a>
        </div>
      </div>
      <div class="hor-row">
        <div class="studio">
          <span>Студия:</span>
          <a href="#"  class="w-studio-name-text"><?php print $sres['studio'] ?></a>
        </div>
        <div class="episodes">
          <div><?php print $sres['episodes'][0] ?>/<?php print $sres['episodes'][1] ?></div>
        </div>
        <div class="status">
          <a href="#" class="w-group-tag m-tag-color-green"><?php print $sres['status'] ?></a>
        </div>
      </div>
      <div class="genres hor-row">
        <div class="season">
          <span>Жанр:</span>
          <?php foreach ($sres['genres'] as $genre) { ?>
            <a href="#" class="w-genre-tag"><?php print $genre ?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
    
