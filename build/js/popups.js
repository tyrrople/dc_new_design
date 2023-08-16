function popupToggleHandler(e, selector, closeFunction = function () {}) {
    e.preventDefault();
    e.stopPropagation();
    const $popup = $(selector).first();
    if ($popup.css('display') === 'none') {
        dc_global.current_active_popups.push({
            "popup" : $popup,
            "onClose" : closeFunction
        });
        $popup.fadeIn( "slow", function() {});
    }
    else {
        dc_global.current_active_popups.pop();
        $popup.fadeOut( "slow", function() {});
    }
}

function popupCloseHandler(e) {
    if (!dc_global.current_active_popups.length)
        return;

    const last_popup = dc_global.current_active_popups[dc_global.current_active_popups.length - 1];
    const $last_popup = last_popup.popup;
    if ($last_popup[0].contains(e.target)) {
        return;
    }

    for (let popup of dc_global.current_active_popups) {
        popup.popup.fadeOut("slow", function() {});
        popup.onClose(e);
    }
    dc_global.current_active_popups = [];
}
$(window).click(popupCloseHandler);

$('.w-btn-more').click(function(e) { popupToggleHandler(e, ".w-popup-btn-more"); });
$('.w-notifications').click(function(e) { popupToggleHandler(e, ".w-notifications-popup"); });
$(".w-search-widget input").click(function(e) { popupToggleHandler(e, ".w-search-popup"); });
$(".w-navbar > .w-avatar").click(function(e) { popupToggleHandler(e, ".w-toolbar-avatar-popup"); });


$(".w-atitle-status-switch .button").on("click", function(e) {
    e.preventDefault();
    const $statusWidget = $(e.currentTarget).parents(".w-atitle-status-switch").first();
    const $dropdown = $statusWidget.find(".dropdown").first();
    const $dropImage = $statusWidget.find(".drop-image>img").first();
    $dropImage.css("transform", "rotate(-90deg)");
    // const $triggerButton = $statusWidget.find(".js-acard-trigger").first();

    // $({deg: 0 }).animate({ deg : -90 },{
    //     duration: 500,
    //     step: (now) => $dropImage.css({
    //             transform: 'rotate(' + now + 'deg)'
    //         })
    // });
    $dropdown.css("top", "-11.7vw"); 
    popupToggleHandler(e, $dropdown);
});

$(".w-atitle-status-switch .dropdown div > a").on("click", function (e) {
    e.preventDefault();
    let $selected = $(e.currentTarget);
    const $statusWidget = $selected.parents(".w-atitle-status-switch").first();
    const $dropdown = $statusWidget.find(".dropdown").first();
    const $dropImage = $statusWidget.find(".drop-image>img").first();
    $dropImage.css("transform", "rotate(0deg)");

    const newStatus = Array.from($selected[0].classList).find((className) => className.startsWith("ustatus-") ).substring(8);
    const $widget = $statusWidget.find(".js-status").first();
    $widget.removeClass(Array.from($widget[0].classList).find((className) => className.startsWith("s-ustatus")));
    $widget.addClass("s-ustatus-" + newStatus);

    $dropdown.fadeOut("slow", function() {});
    
    // сюда добавлять сохранение статуса на сервере ...
});




$(".message > .close-btn").click(function(e) {
    e.stopPropagation();
    $(e.target).parent().parent().fadeOut( "slow", function() {});
});

$(".mark-as-read").first().click(function(e) {
    e.stopPropagation();
    $(".message").each((ind, el) => $(el).fadeOut("slow", function() {}));
});


