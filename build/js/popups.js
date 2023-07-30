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
    if ($(e.target).parents("#" + $last_popup.id).length) {
        return;
    }

    for (let popup of dc_global.current_active_popups) {
        popup.popup.fadeOut("slow", function() {});
        popup.onClose();
    }
    dc_global.current_active_popups = [];
}
$(window).click(popupCloseHandler);

$('.w-btn-more').click(function(e) { popupToggleHandler(e, ".w-popup-btn-more"); });
$('.w-notifications').click(function(e) { popupToggleHandler(e, ".w-notifications-popup"); });
$(".w-search-widget input").click(function(e) { popupToggleHandler(e, ".w-search-popup"); });
$(".w-navbar > .w-avatar").click(function(e) { popupToggleHandler(e, ".w-toolbar-avatar-popup"); });


$(".w-atitle-status-switch > .button").click(function(e) {
    const $dropdown = $(e.target).parents(".w-atitle-status-switch").first().find(".dropdown").first();

    function closeHandler() {
        console.log($dropdown[0]);
    }

    $dropdown.css("top", "-11.7vw"); 
    popupToggleHandler(e, $dropdown, closeHandler );
});



$(".message > .close-btn").click(function(e) {
    e.stopPropagation();
    $(e.target).parent().parent().fadeOut( "slow", function() {});
});

$(".mark-as-read").first().click(function(e) {
    e.stopPropagation();
    $(".message").each((ind, el) => $(el).fadeOut("slow", function() {}));
});


