<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>IPC Portal</title>
		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url('resources/bootstrap-3.3.7-dist/css/bootstrap.min.css');?>" rel="stylesheet" >
		<!-- Admin LTE core CSS -->
		<link href="<?php echo base_url('resources/adminlte-2.3.11/dist/css/AdminLTE.min.css');?>" rel="stylesheet" >
		<link href="<?php echo base_url('resources/adminlte-2.3.11/dist/css/skins/_all-skins.min.css');?>" rel="stylesheet" >
	
		<!-- Font Awesome -->
		<link href="<?php echo base_url('resources/font-awesome-4.6.3/css/font-awesome.min.css');?>" rel="stylesheet" >
		<!-- Custom CSS -->
		<link href="<?php echo base_url('resources/css/custom.css');?>" rel="stylesheet" >
		
		<script src="<?php echo base_url('resources/jquery/jquery-3.2.1.min.js');?>"></script>
		<script src="<?php echo base_url('resources/bootstrap-3.3.7-dist/js/bootstrap.min.js');?>"></script>
		
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<strong style="color:#6E6565;">FSD</strong><strong style="color:#E14444;"> SYSTEMS</strong>
			</div>
			<div class="login-box-body">

				<p class="login-box-msg">Sign in to start your session</p>
				<?php echo form_open('login/check_login');?>
					<?php echo $this->session->flashdata('login_err_message');?>
					<div class="form-group has-feedback">
						<input type="text" class="form-control" placeholder="Username" name="username" id="username" value="<?php echo set_value('username');?>"/>
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
						<span class="help-block login-error-msg text-red"><?php echo form_error('username');?></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" placeholder="Password" name="password" id="password" value="<?php echo set_value('password');?>"/>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						<span class="help-block login-error-msg text-red"><?php echo form_error('password');?></span>
					</div>
					<div class="row">
						<div class="col-xs-8"></div>
						<div class="col-xs-4">
							<button type="submit" class="btn btn-danger btn-block btn-flat">Sign In</button>
						</div>
					</div>
				<?php echo form_close();?>
			</div>
		</div>

		<!-- jQuery 2.2.3 -->
		<script src="<?php echo base_url('resources/js/jquery-3.0.0/jquery.min.js');?>"></script>

		<!-- Bootstrap 3.3.6 -->
		<script src="<?php echo base_url('resources/bootstrap-3.3.7/js/bootstrap.min.js');?>"></script>
	</body>
</html>
