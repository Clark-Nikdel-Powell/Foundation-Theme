// Generic Class-Switching Function
/* global $, Foundation */

function toggle_link(el) {

    var state = $(el).attr('data-toggle-class');
    var target_str = $(el).attr('data-toggle-target');
    var target_to_close_str = $(el).attr('data-toggle-close-target');
    var target_attribute = $(el).attr('data-toggle-attribute');
    var scope_to_parent = $(el).attr('data-scope');
    var exclusive = $(el).attr('data-toggle-exclusive');

    if (typeof target_str === 'undefined') {
        var target_obj = $(el);
    }
    else if (typeof scope_to_parent !== 'undefined') {
        var target_obj = $(el).parents(target_str);
    }
    else {
        var target_obj = $(target_str);
    }

    if (typeof target_attribute !== 'undefined') {

        var originalState = target_obj.attr(target_attribute);

        // Change out the target attribute
        target_obj.attr(target_attribute, state).trigger('changeData');

        // Update el attribute to original target attribute
        $(el).attr('data-toggle-class', originalState);

        return false;
    }

    if (typeof exclusive !== 'undefined') {
        $('*').removeClass(state);
    }

    if (typeof state !== 'undefined') {
        target_obj.toggleClass(state);
    }

    if (typeof target_to_close_str != 'undefined') {

        var target_to_close_obj = $(target_to_close_str);

        target_to_close_obj.each(function(index) {

            var target_to_close_target = $(this).data('toggle-target');
            var class_to_remove = $(this).data('toggle-class');

            if (typeof target_to_close_target != 'undefined') {
                target_to_close_obj = $(target_to_close_target);
            }

            if (typeof class_to_remove != 'undefined' && $(target_to_close_obj).hasClass(class_to_remove)) {
                target_to_close_obj.removeClass(class_to_remove);
            }
        });
    }

}

(function () {
    "use strict";

    $(function () {
        $('body').on('click', '[data-toggle-class]', function() {
            toggle_link(this);
        });
    });

}());

