function MM_effectAppearFade(targetElement, duration, from, to, toggle)
{
	Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}

(function ($) {
    $(function () {

        $('div.body:eq(0)> div.expandable').hide();
        $('div.body:eq(0)> table')
            .addClass('expandable')
            .click(function () {
                $(this).toggleClass('expanded')
                       .next()
                       .slideToggle('slow');
        });
    });
})(jQuery);
(function ($) {
    $(function () {

        $('div.body1:eq(0)> div.expandable1').hide();
        $('div.body1:eq(0)> table')
            .addClass('expandable1')
            .click(function () {
                $(this).toggleClass('expanded1')
                       .next()
                       .slideToggle('slow');
        });
    });
})(jQuery);