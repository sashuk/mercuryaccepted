


/*  Управление cookie'ами  */



function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ))
    return matches ? decodeURIComponent(matches[1]) : undefined
}

function setCookie(name, value, props) {
    props = props || {}
    var exp = props.expires
    if (typeof exp == "number" && exp) {
        var d = new Date()
        d.setTime(d.getTime() + exp*1000)
        exp = props.expires = d
    }
    if(exp && exp.toUTCString) { props.expires = exp.toUTCString() }

    value = encodeURIComponent(value)
    var updatedCookie = name + "=" + value
    for(var propName in props){
        updatedCookie += "; " + propName
        var propValue = props[propName]
        if(propValue !== true){ updatedCookie += "=" + propValue }
    }
    document.cookie = updatedCookie
}


function deleteCookie(name) {
    setCookie(name, null, { expires: -1 })
}




/*  functions for site  */



var $func_process_overlay = function($action){
    if($action == 'remove'){
        $('.headertop_action').removeClass('active');
        $('.tmpl_head_overlay_sector').removeClass('active');

        return true;
    }

    if($('.tmpl_head_overlay_sector').hasClass('active')){
        $('.headertop_action').removeClass('active');
        $('.tmpl_head_overlay_sector').removeClass('active');
    } else {
        $(this).addClass('active');
        $('.tmpl_head_overlay_sector').addClass('active');
    }
}

function func_front_click_callback(){
    $('html, body').animate({scrollTop: 0}, 300);

    $func_process_overlay(false);

    $('.overlay_sector').css('display', 'none');
    $('.overlay_sector_callback').css('display', 'block');
}

function addOrderToForm($order_text){
    $('html, body').animate({scrollTop: 0}, 300);
    $func_process_overlay(false);
    $('.form_order_text').val($order_text);

    $('.overlay_sector').css('display', 'none');
    $('.overlay_sector_order').css('display', 'block');
}

$(document).ready(function(){
    $('.headertop_callback').on('click', function(){
        $func_process_overlay(false);

        $('.overlay_sector').css('display', 'none');
        $('.overlay_sector_callback').css('display', 'block');
    });
    $('.headertop_write_to_us').on('click', function(){
        $func_process_overlay(false);

        $('.overlay_sector').css('display', 'none');
        $('.overlay_sector_write_to_us').css('display', 'block');
    });

    $('.form_close').on('click', function(){
        $func_process_overlay('remove');
    });

    var $timer_info_value = $('.timer_info_value'),
        $timer_info_value_counter = parseFloat(getCookie('timer_info_counter'));

    if($timer_info_value_counter > 0){

    } else {
        /*console.log($timer_info_value_counter);*/
        $timer_info_value_counter = 0.0;
    }
    $timer_info_value.text($timer_info_value_counter.toFixed(3));
    var $info_timer = setInterval(function(){
        $timer_info_value.text($timer_info_value_counter.toFixed(3));
        $timer_info_value_counter = $timer_info_value_counter + 0.008;
        setCookie('timer_info_counter', $timer_info_value_counter, {expires: 86400});
    }, 1000);
});