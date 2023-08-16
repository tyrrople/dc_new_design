$(".main-page-genres-show-more").click(function(e) {
    e.preventDefault();
    const $btnText = $(".main-page-genres-show-more>.text").first();
    const $btnPic = $(".main-page-genres-show-more>.icon>img").first();
    const $rg = $(".rest-genres");
    if ($rg.hasClass("s-state-hidden")) {
        $btnText.text("Скрыть");
        $btnPic.attr("src", "/img/widget/icon/arrow_down.svg");
        $rg.fadeIn("slow", function() {});
        $rg.removeClass("s-state-hidden");
    }
    else {
        $rg.addClass("s-state-hidden");
        $rg.fadeOut( "slow", function() {
            $btnText.text("Показать больше");
            $btnPic.attr("src", "/img/widget/icon/arrow_right.svg");
        });
    }
});


$(".w-pager-oval>a").click(function(e) {
    e.preventDefault();
    const $pager = $(e.target).parent();
    $pager.find('.w-current-page').removeClass("w-current-page");
    const $page = $(e.target);
    $page.addClass("w-current-page");
    const currentPage = $page.attr("data-page");
    const $pageContent = $(`.atitles > .view-area > .page[data-page='${currentPage}']`).first();

    const viewPortPos = $(".atitles > .view-area").first()[0].getBoundingClientRect();
    const pagePos = $pageContent[0].getBoundingClientRect();
    const leftShift = viewPortPos.left - pagePos.left;

    const $viewArea = $page.parents(".atitles-group").first().find(".view-area").first();
    $viewArea.animate({'left' : `${leftShift}`});
});


$(".js-acard-trigger").click(function(e) {
    e.preventDefault();
    $(".w-atitle-status-switch-notext .dropdown").fadeOut("slow", function() {});
    $(e.target).parents(".w-atitle-status-switch-notext").first().find(".dropdown").first().fadeIn("slow", function() {});
});

$(".js-acard-ustatus-select").click(function(e) {
    e.preventDefault();
    const newStatus = Array.from(e.currentTarget.classList).find((className) => className.startsWith("ustatus-") ).substring(8);
    const $widget = $(e.target).parents(".w-atitle-status-switch-notext").first();
    const $trigger = $widget.find(".js-acard-trigger").first();
    $trigger.removeClass(Array.from($trigger[0].classList).find((className) => className.startsWith("s-ustatus")));
    $trigger.addClass("s-ustatus-" + newStatus);

    // сюда добавлять сохранение статуса на сервере ...
    
    $widget.find(".dropdown").first().fadeOut("slow", function() {});
});


async function showAtitleInfoPopup(element) {
    let $element = $(element);
    dc_global.main_page_acard_active_popup = $element;

    const $popup = $element.find(".popup").first();
    let left = 100;

    if ( (element.getBoundingClientRect().left / document.documentElement.clientWidth) > 0.7) {
        left = -103;
    }
    $popup.css("left", `${left}%`);
    // console.log('showing');
    $popup.fadeIn("fast", function() { 
        // console.log('showed');
    });
}

async function closeAtitleInfoPopups() {
    $(".w-card-atitle .popup").fadeOut("fast", function() { 
        dc_global.main_page_acard_active_popup = null;
    });
}

$(".w-card-atitle").on("mouseover", async function (e) {
    await showAtitleInfoPopup(e.currentTarget);
});

$(".w-card-atitle").on("mouseleave", async function (e) {
    if (! dc_global.main_page_acard_active_popup[0].contains(e.target))
        return;

    await closeAtitleInfoPopups();
});



$("#js-main-scroll-to-updates").click(function() {
    $("html").css('scroll-behavior', 'auto');
    const topOffset = $("#last-updates-header").offset().top;
    $(document.body).animate({
        scrollTop: topOffset
    }, 1000, "linear");
});
