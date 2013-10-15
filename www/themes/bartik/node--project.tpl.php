<?php
/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>

<div class="tmpl_sector_content">
    <div class="tmpl_content_top_edge"></div>
    <div class="tmpl_content_top_blackout"></div>
    <div class="centered_wrap">
        <div class="breadcrumbs_wrap">
            <a href="/">Главная</a>
                <span class="delimeter">></span>
            <a href="/proekty">Проекты</a>
                <span class="delimeter">></span>
            <span><?php print $title; ?></span>
        </div>
            <div class="left_wrap">
				<div class="image_wrap">
                    <?php print render($content['field_main_photo']); ?>
				</div>

                <span class="projects_sector_title">Визуализация</span>

                <div class="projects_images_wrap">
                    <?php print render($content['field_visual']); ?>
                </div>

                <span class="projects_sector_title">Планировка</span>

                <div class="projects_images_wrap">
                     <?php print render($content['field_plan']); ?>
                </div>
            </div>
            <div class="right_wrap">
                <div class="middle_wrap">
                    <h2 class="c_displayinlineblock"><?php print $title; ?></h2>
					<?php if (render($content['field_price']) != '') { ?>
					<span class="block_price c_marleft30"><div class="block_price_edge"></div>Цена: <?php print $content['field_price']['#object']->field_price['und'][0]['value']; ?> Р<!--<img src="/images/ico_rub.png" alt="рублей"/>--></span>
					<?php } ?>
                </div>

                <p class="block_about_text">
                    <?php print render($content['body']); ?>
                </p>

                <br>
                <br>
                <span class="block_title c_marbot30">Характеристики</span>

				
				
				
                <table class="content_block_project_features">
                    <?php 
					$field = field_get_items('node', $node, 'field_size'); 
					if ($field) { ?>
					<tr>
                        <td>Размеры</td><td><?php print render($content['field_size']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_total_area'); 
					if ($field) { ?>
					<tr>
                        <td>Общая площадь</td><td><?php print render($content['field_total_area']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_living_area'); 
					if ($field) { ?>
					<tr>
                        <td>Жилая площадь</td><td><?php print render($content['field_living_area']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_building_area'); 
					if ($field) { ?>
					<tr>
                        <td>Площадь застройки</td><td><?php print render($content['field_building_area']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_height'); 
					if ($field) { ?>
					<tr>
                        <td>Высота этажа</td><td><?php print render($content['field_height']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_living_room'); 
					if ($field) { ?>
					<tr>
                        <td>Жилых комнат</td><td><?php print render($content['field_living_room']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_baths'); 
					if ($field) { ?>
					<tr>
                        <td>Ванных и санузлов</td><td><?php print render($content['field_baths']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_fundament'); 
					if ($field) { ?>
					<tr>
                        <td>Фундамент</td><td><?php print render($content['field_fundament']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_walls'); 
					if ($field) { ?>
					<tr>
                        <td>Стены</td><td><?php print render($content['field_walls']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_middlewalls'); 
					if ($field) { ?>
					<tr>
                        <td>Перегородки</td><td><?php print render($content['field_middlewalls']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_crossings'); 
					if ($field) { ?>
					<tr>
                        <td>Перекрытия</td><td><?php print render($content['field_crossings']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_roof'); 
					if ($field) { ?>
					<tr>
                        <td>Кровля</td><td><?php print render($content['field_roof']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_ground'); 
					if ($field) { ?>
					<tr>
                        <td>Цоколь</td><td><?php print render($content['field_ground']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_facade'); 
					if ($field) { ?>
					<tr>
                        <td>Фасады</td><td><?php print render($content['field_facade']); ?></td>
                    </tr>
					<?php } ?>
                    <?php 
					$field = field_get_items('node', $node, 'field_facade'); 
					if ($field) { ?>
					<tr>
                        <td>Фасады</td><td><?php print render($content['field_facade']); ?></td>
                    </tr>
					<?php } ?>
                </table>
            </div>
        </div>
    </div>