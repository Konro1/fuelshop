<h2>Listing <span class='muted'>Products</span></h2>
<br>
<?php if ($products): ?>
	<table class="table table-striped" width="100%">
		<thead>
			<tr>
				<th>Title</th>
				<th>Alias</th>
				<th>Description</th>
				<th>Img</th>
				<th>Price</th>
				<th>Manufacturer id</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $item): ?>		
				<tr>
					<td><?php echo $item->title; ?></td>
					<td><?php echo $item->alias; ?></td>
					<td><?php echo $item->description; ?></td>
					<td><?php echo $item->img; ?></td>
					<td><?php echo $item->price; ?></td>
					<td><?php echo $item->manufacturer_id; ?></td>
					<td>
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php echo Html::anchor('products/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('products/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('products/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php else: ?>
	<p>No Products.</p>

<?php endif; ?>
<p>
	<?php echo Html::anchor('products/create', 'Add new Product', array('class' => 'btn btn-success')); ?>
</p>
