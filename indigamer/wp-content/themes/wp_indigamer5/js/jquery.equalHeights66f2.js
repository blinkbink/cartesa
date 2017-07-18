jQuery.fn.equalHeights = function (el) {
    jQuery(el).each(function () {
        var currentTallest = 0;
        jQuery(el).each(function (i) {
            if (jQuery(this).height() > currentTallest) { currentTallest = jQuery(this).height(); }
        });
        jQuery(el).css({ 'min-height': currentTallest });
    });
    return this;
};