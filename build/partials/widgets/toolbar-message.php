<div class="message">
  <div class="message-type-<?php print $tbmsg["type"]; ?>">
    <a href="#" class="close-btn">
      <img src="/img/widget/icon/Close_round.svg"/>
    </a>
    <div class="info-container">
      <div class="picture">
        <img src="<?php print $tbmsg["img"] ?>"/>
      </div>
      <div class="w-status-area s-status-new"></div>
      <div class="text">
        <a class="title"><?php print $tbmsg["title"] ?></a>
        <div class="body"><?php print $tbmsg["text"] ?></div>
        <div class="date"><div><?php print $tbmsg["date"] ?></div></div>
      </div>
    </div>
  </div>
</div>
