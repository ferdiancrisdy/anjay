<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href="<?php echo base_url('style/assets/css/bootstrap.css');?>" rel="stylesheet">	
    <link href="<?php echo base_url('style/login.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('style/assets/js/bootstrap.min.js');?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('style/assets/font/css/all.css');?>">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
			</div>
			<div class="card-body">
				<form action="<?= site_url('login/process');?>" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Username" name="username" require_once>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="Password" require_once>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
						
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-secondary" style="float:right;" name="login">Submit</button>
					</div>
				</form>
				</form>
			
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>	