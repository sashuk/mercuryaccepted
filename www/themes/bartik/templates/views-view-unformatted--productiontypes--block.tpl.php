<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $id => $row): ?>
	<div class="block_productions_item">
		<?php print $row; ?>
	</div>
<?php endforeach; ?>
