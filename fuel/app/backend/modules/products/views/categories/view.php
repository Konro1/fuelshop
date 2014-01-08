<h2>Viewing <span class='muted'>#<?php echo $category->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $category->title; ?></p>
<p>
	<strong>Parent id:</strong>
	<?php echo $category->parent_id; ?></p>

<?php echo Html::anchor('categories/edit/'.$category->id, 'Edit'); ?> |
<?php echo Html::anchor('categories', 'Back'); ?>