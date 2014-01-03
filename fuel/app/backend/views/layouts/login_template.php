<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Authorization</title>
	<?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
	<div class="vertical-center">
		<?php echo Form::open(array('class' => 'form-horizontal form-login', 'role' => 'form', 'action' => 'authorization/login')); ?>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="text" name="login" class="form-control" id="login" placeholder="Login">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember"> Remember me
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Sign in</button>
			</div>
		</div>
		<?php echo Form::close(); ?>
	</div>
</body>
</html>