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
    const pageOffset = ($page.attr("data-page")-1) * 100;
    const $viewArea = $page.parents(".atitles-group").first().find(".view-area").first();
    $viewArea.animate({'left' : `-${pageOffset}vw`});
    //$page.parents(".atitles-group").first().find(".view-area").first().css("left", `-${pageOffset}vw`);
});


$(".js-acard-trigger").click(function(e) {
    e.preventDefault();
    $(e.target).parents(".w-atitle-status-switch-notext").first().find(".dropdown").first().fadeIn("slow", function() {});
});

$(".js-acard-ustatus-select").click(function(e) {
    e.preventDefault();
    $(e.target).parents(".w-atitle-status-switch-notext").first().find(".dropdown").first().fadeOut("slow", function() {});
});



$(".w-card-atitle").on("mouseover", function (e) {
    const $popup = $(e.target).parents(".w-card-atitle").first().find(".popup").first();
    let left = 103;

    if ( (e.target.getBoundingClientRect().left / document.documentElement.clientWidth) > 0.7) {
        left = -103;
    }
    $popup.css("left", `${left}%`);
    $popup.fadeIn("fast", function() {});
});

$(".w-card-atitle").on("mouseleave", function (e) {
    const $popup = $(e.target).parents(".w-card-atitle").first().find(".popup").first();
    $popup.fadeOut("fast", function() {});
});

