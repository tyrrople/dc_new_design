function defaulPopupCloseHandler(event, popup) {
    popup.popup.fadeOut("slow", function() {});
}

function popupToggleHandler(e, selector, closeFunction = defaulPopupCloseHandler) {
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
        const currentOpenPopup = tdc_global.current_active_popups.pop();
        currentOpenPopup.popup.onClose(e, currentOpenPopup);
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
        popup.onClose(e, popup);
    }
    dc_global.current_active_popups = [];
}
$(window).click(popupCloseHandler);

$('.w-btn-more').click(function(e) { popupToggleHandler(e, ".w-popup-btn-more"); });
$('.w-notifications').click(function(e) { popupToggleHandler(e, ".w-notifications-popup"); });
$(".w-search-widget input").click(function(e) { popupToggleHandler(e, ".w-search-popup"); });
$(".w-navbar > .w-avatar").click(function(e) { popupToggleHandler(e, ".w-toolbar-avatar-popup"); });



$(".message > .close-btn").click(function(e) {
    e.stopPropagation();
    $(e.target).parent().parent().fadeOut( "slow", function() {});
});

$(".mark-as-read").first().click(function(e) {
    e.stopPropagation();
    $(".message").each((ind, el) => $(el).fadeOut("slow", function() {}));
});


