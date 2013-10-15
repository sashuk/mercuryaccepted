<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<!-- Header Section -->
<?php
    $is_page_front = true;
    include TEMPLATE_PATH . 'header.php';
?>
<!-- Header Section -->
	<div class="tmpl_sector_header_bottom">
        <div class="sector_bottom_glare"></div>
        <div class="centered_wrap">
            <div class="block_feature">
                <span class="icon_1"></span>
                <span class="description">Более 5 лет<br>на рынке</span>
            </div>
            <div class="block_feature">
                <span class="icon_2"></span>
                <span class="description">Качественное<br>оборудование</span>
            </div>
            <div class="block_feature">
                <span class="icon_3"></span>
                <span class="description">Квалифицированные<br>сотрудники</span>
            </div>
        </div>
    </div>

    <div class="tmpl_sector_news_about">
        <div class="tmpl_news_top_edge"></div>
        <div class="tmpl_news_bottom_edge"></div>
        <div class="centered_wrap">
            <div class="timer_info">
                <div class="icon_timer"></div>
                <span class="text">За время пребывания на сайте изготовлено <span><span class="timer_info_value">10</span> м³</span> бруса</span>
            </div>
            <div class="left_wrap">
				<span class="block_title">Что нового?</span>
				<?php if ($page['fp_shortnews']) { ?>
					<?php print render($page['fp_shortnews']);?>
				<?php } ?>
            </div>
            <div class="right_wrap">
                <span class="block_title">Коротко о нас...</span>
                <span class="block_about_text">
				<?php if ($page['fp_aboutus']) { ?>
					<?php print render($page['fp_aboutus']);?>
				<?php } ?>
                </span>
            </div>
        </div>
    </div>

    <div class="tmpl_sector_productions">
        <div class="tmpl_productions_edge_top"></div>
        <div class="tmpl_productions_edge_bottom"></div>
        <div class="centered_wrap">
            <div class="left_wrap">
				<div class="dev_wrapper">
				<?php if($page['fp_production']){ ?>
					<?php print render($page['fp_production']);?>
				<?php } ?>
				</div>
            </div>
            <div class="right_wrap">
				<?php if ($page['fp_calculator_overall']) { ?>
					<?php print render($page['fp_calculator_overall']);?>
				<?php } ?>
            </div>
        </div>
    </div>

    <div class="tmpl_sector_works">
        <div class="sector_glare_top"></div>
        <div class="sector_blackout_bottom"></div>
        <div class="centered_wrap">
            <span class="block_title">Строительные решения</span>
            <br>
            <span class="block_works_description">Выполненные с использованием наших материалов</span>
            <div class="gborder_horizontal"></div>
            <div class="row_wrap block_tabs">
                <a href="/proekty/doma"><div class="block_tabs_tab"><span class="title">Дома</span><div class="edge_left"></div><div class="edge_right"></div><div class="edge_arrow"></div></div></a>
                <a href="/proekty/bani"><div class="block_tabs_tab"><span class="title">Бани</span><div class="edge_left"></div><div class="edge_right"></div><div class="edge_arrow"></div></div></a>
                <a href="/proekty/besedki"><div class="block_tabs_tab"><span class="title">Беседки</span><div class="edge_left"></div><div class="edge_right"></div><div class="edge_arrow"></div></div></a>
            </div>
        </div>
    </div>

    <div class="tmpl_sector_feedback">
        <div class="glare">
            <div class="layout_header_glare_white"></div>
            <div class="layout_header_glare_green"></div>
        </div>
        <div class="sector_glare_top"></div>
        <div class="tmpl_sector_feedback_wood"></div>
        <div class="centered_wrap">
			<span class="block_title">Отзывы наших клиентов</span>
			<?php if ($page['fp_feedback']) { ?>
				<?php print render($page['fp_feedback']);?>
			<?php } ?>
            <div class="wrap_center block_feedback_slider_controls">
                <div class="control_previous_slide"><span>предыдущий отзыв</span></div>
                <div class="control_next_slide"><div class="progress"></div><span>следующий отзыв</span></div>
            </div>
            <script type="text/javascript">
                var slider_feedback = new FeedbackSliderObject();
            </script>
        </div>
    </div>

    <!-- Footer Section -->
    <?php
        include TEMPLATE_PATH . 'footer.php';
    ?>
    <!-- Footer Section -->