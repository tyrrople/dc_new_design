const atitleStatusSwitchCss = {
    active : {
        left: "0.1vw",
        bottom: "5px",
        "z-index" : 27,
        width : "12.8vw"
    },
    inactive : {
        left: "0",
        bottom: "0",
        "z-index" : 25,
        width : "13vw"
    }
};

function atitleStatusSwitchCloseHandler(e) {
    const $selected = $(e.currentTarget);
    const $statusWidget = $(".w-atitle-status-switch").first();

    const $dropdown = $statusWidget.find(".dropdown").first();
    const $borderBox = $statusWidget.find(".button-border").first();
    const $dropImage = $statusWidget.find(".drop-image>img").first();

    const $button = $statusWidget.find(".button").first();
    $button.css(atitleStatusSwitchCss.inactive);
    $dropImage.css("transform", "rotate(0deg)");

    // если вызов от щелчка внутри попапа
    if ($selected.hasClass("js-ustatus")) {
        const newStatus = Array.from($selected[0].classList).find((className) => className.startsWith("ustatus-") ).substring(8);
        const $widget = $statusWidget.find(".js-status").first();
        $widget.removeClass(Array.from($widget[0].classList).find((className) => className.startsWith("s-ustatus")));
        $widget.addClass("s-ustatus-" + newStatus);

        // сюда добавлять сохранение статуса на сервере ...
    }

    setTimeout(function() { $borderBox.css("border-width", "2px"); }, 400);
    $dropdown.fadeOut("slow", function() {});
}


$(".w-atitle-status-switch .button-border").on("click", function(e) {
    e.preventDefault();

    const $borderBox = $(e.currentTarget);
    const $button = $(e.currentTarget.parentNode).find(".button").first();
    const $statusWidget = $button.parents(".w-atitle-status-switch").first();
    const $dropdown = $statusWidget.find(".dropdown").first();
    const $dropImage = $statusWidget.find(".drop-image>img").first();
    const $Image = $statusWidget.find(".drop-image>img").first();
    $button.css(atitleStatusSwitchCss.active);

    $borderBox.css("border-width", 0);

    $dropImage.css("transform", "rotate(-90deg)");

    popupToggleHandler(e, $dropdown, atitleStatusSwitchCloseHandler);
});


$(".w-atitle-status-switch .dropdown div > a").on("click", function (e) {
    e.preventDefault();
    atitleStatusSwitchCloseHandler(e);
});
