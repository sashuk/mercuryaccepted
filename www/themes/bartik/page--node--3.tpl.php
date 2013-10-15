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
<?php
    $is_page_front = false;
    include TEMPLATE_PATH . 'header.php';
?>

    <div class="tmpl_sector_content">
        <div class="tmpl_content_top_edge"></div>
        <div class="tmpl_content_top_blackout"></div>
        <div class="centered_wrap">
            <div class="breadcrumbs_wrap">
                <a href="#index">Главная</a>
                    <span class="delimeter">></span>
                <a href="#projects">Наши проекты</a>
                    <span class="delimeter">></span>
                <span>Проект Бани 3D-6</span>
            </div>
            <div class="left_wrap">
				<div class="image_wrap">
                    <img src="/images/projects/proj_1/253-2-571x428.jpg" alt=""/>
                    <div class="image_wrap_overlay"></div>
				</div>

                <span class="projects_sector_title">Визуализация</span>

                <div class="projects_images_wrap">
                    <div class="image_wrap" style="width: 120px;">
                        <img src="/images/projects/proj_1/Project-31-571x428.jpg" alt=""/>
                        <div class="image_wrap_overlay"></div>
                    </div>
                    <div class="image_wrap" style="width: 120px;">
                        <img src="/images/projects/proj_1/Project-32-kopiya-571x428.jpg" alt=""/>
                        <div class="image_wrap_overlay"></div>
                    </div>
                    <div class="image_wrap" style="width: 120px;">
                        <img src="/images/projects/proj_1/Project-33-571x428.jpg" alt=""/>
                        <div class="image_wrap_overlay"></div>
                    </div>
                    <div class="image_wrap" style="width: 120px;">
                        <img src="/images/projects/proj_1/Project-34-571x428.jpg" alt=""/>
                        <div class="image_wrap_overlay"></div>
                    </div>
                </div>

                <span class="projects_sector_title">Планировка</span>

                <div class="projects_images_wrap">
                    <div class="image_wrap" style="width: 120px;">
                        <img src="/images/projects/proj_1/proekt3-1-571x426.jpg" alt=""/>
                        <div class="image_wrap_overlay"></div>
                    </div>
                    <div class="image_wrap" style="width: 120px;">
                        <img src="/images/projects/proj_1/proekt3-2-571x426.jpg" alt=""/>
                        <div class="image_wrap_overlay"></div>
                    </div>
                    <div class="image_wrap" style="width: 120px;">
                        <img src="/images/projects/proj_1/proekt3-3-571x426.jpg" alt=""/>
                        <div class="image_wrap_overlay"></div>
                    </div>
                    <div class="image_wrap" style="width: 120px;">
                        <img src="/images/projects/proj_1/proekt3-4-571x426.jpg" alt=""/>
                        <div class="image_wrap_overlay"></div>
                    </div>
                </div>
            </div>
            <div class="right_wrap">
                <div class="middle_wrap">
                    <h2 class="c_displayinlineblock">Проект Бани 3D-6</h2><span class="block_price c_marleft30"><div class="block_price_edge"></div>Цена 20 000<img src="/images/ico_rub.png" alt="рублей"/></span>
                </div>

                <p class="block_about_text">
                    Наша компания занимается деревообработкой  с 2000 года. За это время мы не упустили ни одной возможности осуществления женской мечты иметь самое лучшее нижнее белье на любой случай жизни.
                    <br>
                    <br>
                    За все те годы мы досконально изучили особенности нашего товара, и можем сказать, что мы знаем в нем толк. Нашим оптовым партнерам мы готовы предложить выгодные условия сотрудничетсва, а клиентам наших павильонов широчайший ассортимент товара, на любые финансовые возможности.
                </p>

                <br>
                <br>
                <span class="block_title c_marbot30">Характеристики</span>

                <table class="content_block_project_features">
                    <tr>
                        <td>Размеры</td><td>7.8 x 9.3 м.</td>
                    </tr>
                    <tr>
                        <td>Общая площадь</td><td>53.4 кв.м.</td>
                    </tr>
                    <tr>
                        <td>Жилая площадь</td><td>37.2 кв.м.</td>
                    </tr>
                    <tr>
                        <td>Высота этажа</td><td>50.0 кв.м.</td>
                    </tr>
                    <tr>
                        <td>Высота этажа</td><td>2.5 м.</td>
                    </tr>
                    <tr>
                        <td>Жилых комнат</td><td>1</td>
                    </tr>
                    <tr>
                        <td>Ванных и санузлов</td><td>2</td>
                    </tr>
                    <tr>
                        <td>Фундамент</td><td>столбчатый, монолитный ж/б</td>
                    </tr>
                    <tr>
                        <td>Стены</td><td>оцилиндрованное бревно d=200мм 35.0куб.м.</td>
                    </tr>
                    <tr>
                        <td>Перегородки</td><td>каркасные</td>
                    </tr>
                    <tr>
                        <td>Перекрытия</td><td>по деревянным балкам 200х100мм</td>
                    </tr>
                    <tr>
                        <td>Кровля</td><td>мягкая черепица S=78кв.м.</td>
                    </tr>
                    <tr>
                        <td>Цоколь</td><td>натуральный камень</td>
                    </tr>
                    <tr>
                        <td>Фасады</td><td>антисептическая тонировка</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>





<div id="page-wrapper">
<div id="page">
  <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>"><div class="section clearfix">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
              <strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>

      </div> <!-- /#name-and-slogan -->
    <?php endif; ?>

    <?php print render($page['header']); ?>

    <?php if ($main_menu): ?>
      <div id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#main-menu -->
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <div id="secondary-menu" class="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#secondary-menu -->
    <?php endif; ?>

  </div></div> <!-- /.section, /#header -->

	<?php if ($messages): ?>
		<div id="messages"><div class="section clearfix">
		  <?php print $messages; ?>
		</div></div> <!-- /.section, /#messages -->
	<?php endif; ?>
	<?php if ($page['featured']): ?>
		<div id="featured"><div class="section clearfix">
		  <?php print render($page['featured']); ?>
		</div></div> <!-- /.section, /#featured -->
	<?php endif; ?>
	<div id="main-wrapper" class="clearfix">
		<div id="main" class="clearfix">
			<div class="dev_wrapper">
				<?php if ($page['fp_calculator_overall']) { ?>
					<?php print render($page['fp_calculator_overall']);?>
				<?php } ?>
			</div>
			<div class="dev_wrapper">
				<?php if ($page['fp_shortnews']) { ?>
					<?php print render($page['fp_shortnews']);?>
				<?php } ?>
			</div>
			<div class="dev_wrapper">
				<?php if ($page['fp_feedback']) { ?>
					<?php print render($page['fp_feedback']);?>
				<?php } ?>
			</div>
			<div class="dev_wrapper">
				<?php if ($page['fp_production']) { ?>
					<?php print render($page['fp_production']);?>
				<?php } ?>
			</div>
		</div>
	</div> <!-- /#main, /#main-wrapper -->
	<div id="footer-wrapper">
		<div class="section">
			<?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
			  <div id="footer-columns" class="clearfix">
				<?php print render($page['footer_firstcolumn']); ?>
				<?php print render($page['footer_secondcolumn']); ?>
				<?php print render($page['footer_thirdcolumn']); ?>
				<?php print render($page['footer_fourthcolumn']); ?>
			  </div> <!-- /#footer-columns -->
			<?php endif; ?>
			<?php if ($page['footer']): ?>
			  <div id="footer" class="clearfix">
				<?php print render($page['footer']); ?>
			  </div> <!-- /#footer -->
			<?php endif; ?>
		</div>
	</div> <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->

<?php
include TEMPLATE_PATH . 'footer.php';
?>
