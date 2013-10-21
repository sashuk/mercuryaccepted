<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/png" href="http://lesvzime.ru/images/favicon.png">
	<title><?php print $head_title; ?></title>

	<?php print $head; ?>
	<?php print $styles; ?>
	<?php print $scripts; ?>
  
    <link rel="stylesheet" type="text/css" href="/css/lightbox2/lightbox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/slider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/common.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/style_pages.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/simple-slider-volume.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.css" media="screen" />
	
	
    <link rel="stylesheet" type="text/css" href="/css/simple-slider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/simple-slider-volume.css" media="screen" />

    <script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/js/simple-slider.min.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.compatibility.js"></script>
    <script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="/js/slider.js"></script>
    <script type="text/javascript" src="/js/bbs_mercury.js"></script>
    <script type="text/javascript" src="/js/ajaxcallback.js"></script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <div class="wrapper">
        <div class="tmpl_sector_headertop">
            <div class="centered_wrap">
                <span class="c_font_color_beige">Основной телефон</span>
                <img src="/images/icon_phone_small.png" alt=""/>
                <span class="c_font_color_beige layout_phone_number c_marright40">
					<?php echo CLIENT_PHONE_PREFIX; ?>
					<span class="c_font_color_white">
						<?php echo CLIENT_PHONE_BODY; ?>
					</span>
				</span>

                <img  class="c_marright0" src="/images/icon_recall_small.png" alt=""/>
                <span class="headertop_action headertop_callback c_font_ul_dash_beige c_marright20">заказать звонок</span>

                <span class="span_or c_marright20">или</span>

                <!--<img  class="c_marright0" src="/images/icon_recall_small.png" alt=""/>-->
                <span class="headertop_action headertop_write_to_us c_font_ul_dash_beige c_marright30">написать нам</span>

                <div class="delimiter"></div>

                <img  class="c_marleft30 c_marright0" src="/images/icon_mappin.png" alt=""/>
                <a href="/kontakty#map" class="headertop_map_look_at c_font_ul_dash_beige">мы на карте</a>
            </div>
        </div>
        <div class="tmpl_head_overlay_sector">
            <div class="centered_wrap">
                <div class="overlay_sectors">
                    <div class="overlay_sector overlay_sector_callback">
                        <span class="title">Заказ обратного звонка</span>
                        <div class="form_close"></div>
                        <form class="form_callback" action="#" method="post">
                            <span class="form_input_title">Представьтесь</span>
                            <input class="form_callback_name" placeholder="Иванов Иван Сергеевич" type="text" name="callback_name"/>
                            <br>

                            <span class="form_input_title">Ваш Email</span>
                            <input class="form_callback_email" placeholder="email@email.com" type="text" name="callback_email"/>
                            <br>

                            <span class="form_input_title">Ваш Телефон</span>
                            <input class="form_callback_phone" placeholder="+7 ХХХ-ХХ-ХХ-ХХХ" type="text" name="callback_phone"/>
                            <br>
                            <br>

                            <span class="form_input_title">Осталось нажать...</span>
                            <button typebut="callback" class="form_submit" type="button">ЗАКАЗАТЬ ЗВОНОК</button>
                        </form>
                    </div>

                    <div class="overlay_sector overlay_sector_order">
                        <span class="title">Оформляем ваш заказ</span>
                        <div class="form_close"></div>
                        <form class="form_order" action="#" method="post">
                            <span class="form_input_title">Ваш заказ</span>
                            <textarea class="form_order_text" placeholder="-/-" name="order_text"></textarea>
                            <br>

                            <span class="form_input_title">Представьтесь</span>
                            <input class="form_order_name" placeholder="Иванов Иван Сергеевич" type="text" name="order_name"/>
                            <br>

                            <span class="form_input_title">Ваш Email</span>
                            <input class="form_order_email" placeholder="email@email.com" type="text" name="order_email"/>
                            <br>

                            <span class="form_input_title">Ваш Телефон</span>
                            <input class="form_order_phone" placeholder="+7 ХХХ-ХХ-ХХ-ХХХ" type="text" name="order_phone"/>
                            <br>
                            <br>

                            <span class="form_input_title">Осталось нажать...</span>
                            <button typebut="order" class="form_submit" type="button">СДЕЛАТЬ ЗАКАЗ</button>
                        </form>
                    </div>

                    <div class="overlay_sector overlay_sector_write_to_us">
                        <span class="title">Напишите нам</span>
                        <div class="form_close"></div>
                        <form class="form_write_to_us" action="#" method="post">
                            <span class="form_input_title">Представьтесь</span>
                            <input class="form_write_to_us_name" placeholder="Иванов Иван Сергеевич" type="text" name="write_to_us_name"/>
                            <br>

                            <span class="form_input_title">Ваш Email</span>
                            <input class="form_write_to_us_email" placeholder="email@email.com" type="text" name="write_to_us_email"/>
                            <br>

                            <span class="form_input_title" style="vertical-align: top;">Сообщение</span>
                            <textarea class="form_write_to_us_message" placeholder="Текст сообщения" name="write_to_us_message"></textarea>
                            <br>
                            <br>

                            <span class="form_input_title">Осталось нажать...</span>
                            <button typebut="write_to_us" class="form_submit" type="button">ОТПРАВИТЬ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- Content area -->
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>

    <script type="text/javascript">
        $feedback_slide_counter = 0;
        $(document).ready(function(){

            $('.layout_callback').on('click', function(){
                $callback_item = $('.callback_overlay');
                $callback_item.css('display', 'block');
                $callback_item.find('.window').animate(
                    {
                        'top': 50
                    },
                    300);
            });

            $('.close_button').on('click', function(){
                $callback_item = $('.callback_overlay');
                $callback_item.find('.window').animate(
                    {
                        'top': -500
                    },
                    300, function(){
                        $callback_item.css('display', 'none');
                    });
            });

            $('.feedback_control_up').on('click', function(){
                $feedback_slide_counter = $feedback_slide_counter +  1;
                $('.feedback_ribbon_ul').animate(
                    {
                        'margin-top': $feedback_slide_counter * 320
                    },
                    300);
            });

            $('.feedback_control_down').on('click', function(){
                $feedback_slide_counter = $feedback_slide_counter - 1;
                $('.feedback_ribbon_ul').animate(
                    {
                        'margin-top': $feedback_slide_counter * 320
                    },
                    300);
            });
        });
    </script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22646656 = new Ya.Metrika({id:22646656,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/22646656" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
