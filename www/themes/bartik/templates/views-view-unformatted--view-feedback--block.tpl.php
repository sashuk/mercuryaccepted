<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<a class="block_feedback_show_all c_hover_green_border" href="#">смотреть все отзывы</a>
<div class="block_feedback_slider">
    <ul>
	<?php foreach ($rows as $id => $row): ?>
		<li>
		<?php print $row; ?>
		</li>
	<?php endforeach; ?>
	</ul>
</div>