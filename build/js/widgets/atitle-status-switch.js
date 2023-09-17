(function () {  

    const $wContainer = $(".w-atitle-status-switch").first();
    const $wStatusesList = $wContainer.find(".statuses-list").first();
    const $wArrowBtn = $wContainer.find(".arrow-icon").first();
    const $wArrowBtnImg = $wContainer.find(".arrow-icon>img").first();

    const aStatusPoses = {
        opened: {
            height: "13vw",
            top: "-8.7vw"
        },
        closed: {
            height: "1.8vw",
            top: "2.5vw"
        },
    };

    const aStatusListPoses = {
        opened: {
            top: "0vw"
        },
        closed: {
            top: "1.8vw"
        },
    };

    function aStatusPopupClose(e) {
        const $selected = $(e.currentTarget);

        // если вызов от щелчка внутри попапа
        if ($selected.hasClass("js-ustatus")) {
            const newStatus = Array.from($selected[0].classList).find((className) => className.startsWith("ustatus-") ).substring(8);
            $wContainer.removeClass(Array.from($wContainer[0].classList).find((className) => className.startsWith("s-ustatus")));
            $wContainer.addClass("s-ustatus-" + newStatus);

            // сюда добавлять сохранение статуса на сервере ...
        }

        $({deg: -90}).animate({deg: 0}, {
            duration: 500,
            step: function(now) {
                $wArrowBtnImg.css({
                    transform: 'rotate(' + now + 'deg)'
                });
            }
        });


        $wContainer.animate(
            {
                height: `${aStatusPoses.closed.height}`,
                top: `${aStatusPoses.closed.top}`,
            }, 500, 
            "linear", 
            function () { $wStatusesList.css("top", `${aStatusListPoses.closed.top}`); },
        );
    }

    function aStatusPopupOpen(e) {
        $wStatusesList.css("top", `${aStatusListPoses.opened.top}`);

        $({deg: 0}).animate({deg: -90}, {
            duration: 500,
            step: function(now) {
                $wArrowBtnImg.css({
                    transform: 'rotate(' + now + 'deg)'
                });
            }
        });

        $wContainer.animate({
            height: `${aStatusPoses.opened.height}`,
            top: `${aStatusPoses.opened.top}`,
        }, 500, "linear");
    }

    $(".w-atitle-status-switch .selected-status").click(function (e) {
        e.preventDefault();

        aStatusPopupOpen(e);
        
    });

    $(".w-atitle-status-switch .statuses-list .js-ustatus").click(function (e) {
        e.preventDefault();
        aStatusPopupClose(e);
    });

})();
