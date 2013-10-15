        <div class="tmpl_sector_header <?php if(isset($is_page_front) && ($is_page_front === true)){echo 'is_page_front'; } ?>">
            <div class="layout_header_top_shadow"></div>
            <div class="centered_wrap">
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
                <a href="/">
                <div class="layout_header_logo">
                    <span class="layout_header_slogon">деревообрабатывающее предприятие</span>
                </div>
                </a>
                <?php
                    if(isset($is_page_front) && ($is_page_front === true)){
                        ?>
                            <div class="layout_header_illustration"></div>
                            <div class="layout_header_glare_green"></div>
                            <div class="layout_header_glare_white"></div>
                        <?php
                    } else {
                        ?>
                            <div class="layout_header_glare_green is_page_front"></div>
                            <div class="layout_header_glare_white is_page_front"></div>
                        <?php
                    }
                ?>
            </div>
        </div>