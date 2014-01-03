<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::input('title', Input::post('title', isset($product) ? $product->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Alias', 'alias', array('class'=>'control-label')); ?>

				<?php echo Form::input('alias', Input::post('alias', isset($product) ? $product->alias : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Alias')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Description', 'description', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('description', Input::post('description', isset($product) ? $product->description : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Description')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Img', 'img', array('class'=>'control-label')); ?>

				<?php echo Form::input('img', Input::post('img', isset($product) ? $product->img : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Img')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Price', 'price', array('class'=>'control-label')); ?>

				<?php echo Form::input('price', Input::post('price', isset($product) ? $product->price : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Price')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Manufacturer id', 'manufacturer_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('manufacturer_id', Input::post('manufacturer_id', isset($product) ? $product->manufacturer_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Manufacturer id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>