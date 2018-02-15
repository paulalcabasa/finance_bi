<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>FSD Systems</title>
		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url('resources/bootstrap-3.3.7-dist/css/bootstrap.min.css');?>" rel="stylesheet" >
		<!-- Admin LTE core CSS -->
		<link href="<?php echo base_url('resources/adminlte-2.3.11/dist/css/AdminLTE.min.css');?>" rel="stylesheet" >
		<link href="<?php echo base_url('resources/adminlte-2.3.11/dist/css/skins/_all-skins.min.css');?>" rel="stylesheet" >
		<!-- Data Tables -->
		<link href="<?php echo base_url('resources/datatables/datatables.min.css') ?>" rel="stylesheet" >
		<!-- Font Awesome -->
		<link href="<?php echo base_url('resources/font-awesome-4.6.3/css/font-awesome.min.css');?>" rel="stylesheet" >
		<!-- Custom CSS -->
		<link href="<?php echo base_url('resources/css/custom.css');?>" rel="stylesheet" >
		<!-- Date range picker -->
		<link href="<?php echo base_url('resources/daterangepicker/daterangepicker.css');?>" rel="stylesheet" >
		

		<script src="<?php echo base_url('resources/jquery/jquery-3.2.1.min.js');?>"></script>
		<script src="<?php echo base_url('resources/bootstrap-3.3.7-dist/js/bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('resources/adminlte-2.3.11/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
		<script src="<?php echo base_url('resources/adminlte-2.3.11/dist/js/app.min.js');?>"></script>
		<script src="<?php echo base_url('resources/daterangepicker/moment.min.js');?>"></script>
		<script src="<?php echo base_url('resources/daterangepicker/daterangepicker.js');?>"></script>
		
	</head>
	<body class="hold-transition skin-red sidebar-mini">
		<div class="wrapper">
			<?php $this->load->view('include/header.php'); ?>
			<?php $this->load->view('include/sidebar-menu.php'); ?>
			<div class="content-wrapper">
				<section class="content-header">
					<h1><?php echo $title; ?></h1>
				</section>
				<?php $this->load->view($content); ?>
			</div>
			<?php $this->load->view('include/footer.php'); ?>
			<?php $this->load->view('include/control-sidebar.php'); ?>
		</div>
	
		

	</body>
</html>
