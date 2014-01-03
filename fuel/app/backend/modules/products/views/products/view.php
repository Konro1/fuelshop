<h2>Viewing <span class='muted'>#<?php echo $product->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $product->title; ?></p>
<p>
	<strong>Alias:</strong>
	<?php echo $product->alias; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $product->description; ?></p>
<p>
	<strong>Img:</strong>
	<?php echo $product->img; ?></p>
<p>
	<strong>Price:</strong>
	<?php echo $product->price; ?></p>
<p>
	<strong>Manufacturer id:</strong>
	<?php echo $product->manufacturer_id; ?></p>

<?php echo Html::anchor('products/edit/'.$product->id, 'Edit'); ?> |
<?php echo Html::anchor('products', 'Back'); ?>