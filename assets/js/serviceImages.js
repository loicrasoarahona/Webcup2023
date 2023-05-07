function moveBackgorund() {
    // if (dsnGrid.isMobile())
    //     return;
    $(".dsn-animate-bg2").each(function () {
        let $this = $(this),
            bgSection = $this.find(".animate-bg2"),
            items = $this.find(".item-animate-bg2");

        if (!bgSection || items.length < 3) {
            bgSection = $this = null;
            return;
        }


        if (!$this.hasClass("hide-animate-bg2"))
            moveSection(items.get(1));
        items.each(function () {
            $(this).on("mouseenter", function () {
                moveSection(this);
            });
            if ($this.hasClass("hide-animate-bg2")) {
                $this.on("mouseleave", function () {
                    TweenLite.to(bgSection, 0.2, { width: 0, height: 0 });
                });
            }

        });

        function moveSection($element) {
            $element = dsnGrid.convertToJQuery($element);
            TweenLite.to(bgSection, 0.4, {
                left: $element.position().left,
                top: $element.position().top,
                width: $element.outerWidth(),
                height: $element.outerHeight(),

            });
        }

    });
}

moveBackgorund();