function moveBackgorund() {
    // if (dsnGrid.isMobile())
    //     return;
    $(".dsn-animate-bg").each(function () {
        let $this = $(this),
            bgSection = $this.find(".animate-bg"),
            items = $this.find(".item-animate-bg");

        if (!bgSection || items.length < 3) {
            bgSection = $this = null;
            return;
        }


        if (!$this.hasClass("hide-animate-bg"))
            moveSection(items.get(1));
        items.each(function () {
            $(this).on("click", function () {
                console.log("clic");
                moveSection(this);
            });
            // if ($this.hasClass("hide-animate-bg")) {
            //     $this.on("mouseleave", function () {
            //         TweenLite.to(bgSection, 0.2, { width: 0, height: 0 });
            //     });
            // }

        });

        function moveSection($element) {
            $element = dsnGrid.convertToJQuery($element);
            TweenLite.to(bgSection, 0.3, {
                left: $element.position().left,
                top: $element.position().top,
                width: $element.outerWidth(),
                height: $element.outerHeight(),

            });
        }

    });
}

moveBackgorund();