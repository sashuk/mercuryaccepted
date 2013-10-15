    <div class="tmpl_sector_contacts">
        <div class="sector_shadow_top"></div>
        <div class="sector_glare_down"></div>
        <div class="centered_wrap">
            <span class="block_title">Контактная информация</span>
            <br>
            <div class="left_wrap">
                <div class="block_icon_map"></div>
                <span class="block_address"><?php echo CLIENT_ADDRESS_SHORT; ?></span>
                <a class="block_look_at_map" href="/kontakty#map">смотреть на карте</a>
            </div>
            <div class="right_wrap">
                <div class="block_icon_phone"></div>
                <span class="block_phone top"><?php echo CLIENT_PHONE_PREFIX; ?> <span style="color: #ffffff;"><?php echo CLIENT_PHONE_BODY; ?></span></span>
                <span class="block_phone"><?php echo CLIENT_PHONE_DUO_PREFIX; ?> <span style="color: #ffffff;"><?php echo CLIENT_PHONE_DUO_BODY; ?></span></span>
                <span class="block_callback" onclick="func_front_click_callback();">пререзвоните мне</span>
            </div>
        </div>
    </div>

    <div class="tmpl_sector_footer">
        <div class="tmpl_footer_top_edge"></div>
        <div class="centered_wrap">
            <div class="row_wrap block_footer_menu">
            <div class="block_scroll_to_top"><span>Наверх</span></div>
            <div class="tmpl_menu_wrap">
                <?php
                $tmp_counter = 1;
                foreach ($main_menu as &$item) {
                    if($tmp_counter == 3){
                        ?>
                        <div class="title_wrap">
                            <span><?php echo $item['title']; ?></span><div class="submenu_arrow"></div>
                            <div class="submenu">
                                <a href="/produkcija/radialnyj-raspil-drevesiny">Доска радиального распила</a>
                                <a href="/produkcija/cilindrovannyj-brus">Оцидиндрованное бревно</a>
                            </div>
                        </div>
                    <?php
                    } elseif($tmp_counter == 2) {
                        ?>
                        <div class="title_wrap">
                            <span><?php echo $item['title']; ?></span><div class="submenu_arrow"></div>
                            <div class="submenu">
                                <a href="/<?php echo drupal_get_path_alias('node/1'); ?>">О компании</a>
                                <!--<a href="/news_feedback">Новости & Отзывы</a>-->
                                <a href="/uslovia_dostavki_i_oplati">Условия доставки и оплаты</a>
                            </div>
                        </div>
                    <?php
                    } else {
                        ?>
                        <div class="title_wrap">
                            <a href="/<?php
                            $href = drupal_get_path_alias($item['href']);
                            if ($href !== '<front>')
                            {
                                echo $href;
                            }
                            else
                            {
                                echo '';
                            }
                            ?>"><?php echo $item['title']; ?></a>
                        </div>
                    <?php
                    }
                    $tmp_counter = $tmp_counter + 1;
                }
                ?>
            </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.block_scroll_to_top').on('click', function(){
                        /*window.scrollTo(0,0);*/
                        $('html, body').animate({scrollTop: 0}, 300);
                    });
                });
            </script>
            <div class="row_wrap block_footer_middle">
                <div class="gborder_horizontal left_middle_line"></div>
                <a href="/"><div class="logo_small"></div></a>
                <div class="gborder_horizontal right_middle_line"></div>
            </div>
            <div class="row_wrap">
                <div class="share">
                    <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                    <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="icon" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir"></div>
                </div>
            </div>
            <div class="row_wrap block_footer_bottom">
                <span class="block_developed" style="vertical-align: top;">Разработано в студии <a class="c_marleft20" target="_blank" href="http://blackboxstudio.ru/"><img src="/images/bbs_small_logo.png" alt=""/></a></span>
                <span class="block_copyright">© 2009-2013. ООО «Меркурий». Все права защищены.</span>
                <br>
                <span class="block_orders">Условия <a href="/uslovia_dostavki_i_oplati">оплаты и доставки</a></span>
            </div>
        </div>
    </div>