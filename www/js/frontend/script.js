/**
 * Created by asus1 on 30.05.2015.
 */
$ = jQuery.noConflict();
$(document).ready(function() {
    $(".sidebar-menu .expand").click(function()
    {
        $(this).parent().children('.sub-menu').slideToggle(100);
    });
    $("#log-button").click(function()
    {
        $("#log").slideToggle();
    });
    $("#log").dblclick(function()
    {
        $(this).slideUp();
    });

    $('body').on('click', "#add_to_cart", function()
    {
        var product_id = $(this).attr('data-product');
        var params = {
            'action': 'add_to_cart',
            'common': true,
            'values': {product_id: product_id},
            'callback': function (msg) {
                ajax_respond(msg, function(respond) {
                    $(".basket").html('<span>' + respond.count + '</span>');
                });

            }
        };
        ajax(params);
    });
});