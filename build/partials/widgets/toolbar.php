<div class="w-navbar m-navbar-main">
  
  <a href="#" class="w-dc-logo-white m-logo-main">
    <img alt="" src="/img/widget/dc-logo-white.svg"/>
  </a>

  <div class="w-navbar-left m-navbar-left">
    <a href="#" class="w-button w-btn-release">
      <img alt="" src="/img/widget/icon/Desk_alt.svg"/>
      Релизы
    </a>
    <a href="#" class="w-button w-btn-rooms-list">
      <img alt="" src="/img/widget/icon/Playlist.svg"/>
      Список комнат
    </a>
    <a href="#" class="w-button w-btn-schedule">
      <img alt="" src="/img/widget/icon/Date_range.svg"/>
      Расписание
    </a>

    <div class="w-more-btn-container">
      <a href="#" class="w-button w-btn-more"><img alt="" src="/img/widget/icon/More_Vertical.svg"/></a>
      <div class="w-popup-btn-more" id="js-w-popup-btn-more">
        <div>
          <a href="#">
            <div>
              <div class="icon"><img src="/img/widget/icon/dollar.svg"/></div>
              <div class="text">Поддержка</div>
            </div>
          </a>
          <a href="#">
            <div>
              <div class="icon"><img src="/img/widget/icon/Users_Group.svg"/></div>
              <div class="text">Наша команда</div>
            </div>
          </a>
          <a href="#" style="margin-top: 1vw;">
            <div>
              <div class="icon"><img src="/img/widget/icon/Question.svg"/></div>
              <div class="text">FAQ</div>
            </div>
          </a>
          <a href="#">
            <div>
              <div class="icon"><img src="/img/widget/icon/info.svg"/></div>
              <div class="text">Правила сайта</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="w-spanner">
    
  </div>

  <div class="w-navbar-right">
    <form class="w-search-widget">
      <div class="w-search-widget-left">
        
      </div>
      <div class="w-search-widget-center">
        <input name="search" type="text" value=""/>
        <div class="w-search-popup" id="js-w-search-popup">
          <div class="spanner">
            <?php $sres = [
                'img' => '/img/tmp/cards/last-titles/sr.png',
                'title_rus' => 'Эта фарфоровая кукла влюбилась',
                'type' => 'TV',
                'year' => '2021',
                'season' => 'Осень',
                'status' => 'Завершён',
                'title_original' => 'Sono Bisque Doll wa Koi wo Suru',
                'studio' => 'CloverWorks',
                'episodes' => [5,12],
                'genres' => ['Этти', 'Драма', 'Фэнтези'],
            ]; ?>
            <?php include("toolbar-search-result.php"); ?>
            <?php include("toolbar-search-result.php"); ?>
            <?php include("toolbar-search-result.php"); ?>
            <?php include("toolbar-search-result.php"); ?>
          </div>
        </div>
      </div>
      <div class="w-search-widget-right">
        <button>
          <img alt="" src="/img/widget/icon/Search.svg"/>
        </button>
    </form>
      </div>
      <div class="w-notifications-container">
        <a href="#" class="w-notifications">
          <img alt="" src="/img/widget/icon/Notifications.svg"/>
          <div class="w-status-area s-status-new"></div>
        </a>
        <div class="w-notifications-popup" id="js-w-notifications-popup">
          <div class="w-notifications-popup-inner">
            <div class="msg-categories">
              <a href="#" class="category m-has-messages m-selected">
                <div class="text">Все</div>
                <div class="w-status-area s-status-new"></div>
              </a>
              <a href="#" class="category m-has-messages">
                <div class="text">Комментарии</div>
                <div class="w-status-area s-status-new "></div>
              </a>
              <a href="#" class="category m-has-messages">
                <div class="text">Новые&nbsp;серии</div>
                <div class="w-status-area s-status-new"></div>
              </a>
              <a href="#" class="category m-has-messages">
                <div class="text">Важные</div>
                <div class="w-status-area s-status-new"></div>
              </a>
            </div>

            <a href="#" class="mark-as-read w-picted-btn">
              <div>
                <div class="icon"><img src="/img/widget/icon/Status_list.svg"/></div>
                <div class="text">пометить всё как прочитанное</div>
              </div>
            </a>

            <div class="messages m-popup-scroll-area">
              <?php $tbmsg = [
                  'img' => '/img/tmp/toolbar/messages/6.svg',
                  'title' => 'Важное оповещение!',
                  'text' => 'Тебе было выдано предупреждение (1/3)',
                  'date' => '3 минут назад'
              ]; ?>
              <?php include("toolbar-message.php"); ?>
              <?php $tbmsg = [
                  'img' => '/img/tmp/toolbar/messages/7.svg',
                  'title' => '69 людей оценили твой комментарий:',
                  'text' => '<a href="#">Ты ебланище, влагалище, пердун, дрочила, пидор, пизда, туз, малафья...</a>',
                  'date' => '5 минут назад'
              ]; ?>
              <?php include("toolbar-message.php"); ?>
              <?php $tbmsg = [
                  'img' => '/img/tmp/toolbar/messages/1.png',
                  'title' => 'Вышла новая серия: 6/12',
                  'text' => 'Эта фарфоровая кукла влюбилась',
                  'date' => '2 дня назад'
              ]; ?>
              <?php include("toolbar-message.php"); ?>
              <?php $tbmsg = [
                  'img' => '/img/tmp/toolbar/messages/0.png',
                  'title' => 'Вышла новая серия: 5/12',
                  'text' => 'Созданный в Бездне: Солнце, вспыхнувшее в Золотом городе',
                  'date' => '5 дней назад'
              ]; ?>
              <?php include("toolbar-message.php"); ?>
              <?php $tbmsg = [
                  'img' => '/img/tmp/toolbar/messages/3.svg',
                  'title' => 'Yae Miko lover <3 ответил:',
                  'text' => 'Пошёл нахуй! <br/>на комментарий: <a href="#">Эммм... Чел... Ты забыл п...</a>',
                  'date' => '13 часов назад'
              ]; ?>
              <?php include("toolbar-message.php"); ?>
              <?php $tbmsg = [
                  'img' => '/img/tmp/toolbar/messages/5.png',
                  'title' => 'Достижение получено',
                  'text' => '<span class="w-achievemnt-yellow">Orru SIMP</span>',
                  'date' => '1 неделю назад'
              ]; ?>
              <?php include("toolbar-message.php"); ?>
            </div>
          </div>
        </div>
      </div>
  </div>

  <a href="#" class="w-avatar m-avatar-toolbar">
    <img src="/img/tmp/avatar.png"/>
  </a>

  <div class="w-toolbar-avatar-popup">
    <div>
      <a href="#" class="avatar-row">
        <span class="icon">
          <img src="/img/tmp/avatar.png"/>
        </span>
        <span class="text w-bage-designer">
          Hideri Lavanette
        </span>      
      </a>
      <div class="row1">
        <a href="#" class="bookmarks-btn">
          <img src="/img/widget/icon/Bookmark.svg"/>
          <span>Закладки</span>
        </a>
        <a href="#" class="settings-btn">
          <img src="/img/widget/icon/Setting_line.svg"/>
          <span>Настройки</span>
        </a>
      </div>
      <a href="#" class="w-color-theme-select">
        <div class="title">Тема сайта:</div>
        <div class="button">
          <img src="/img/widget/icon/color-theme-dark.svg"/>
        </div>
      </a>
      
      <a href="#" class="logout-btn">
        <div class="icon">
          <img src="/img/widget/icon/Sign_out_circle.svg"/>
        </div>
        <div class="text">Выйти</div>
      </a>
    </div>
  </div>
</div>

