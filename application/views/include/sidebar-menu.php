<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url('resources/images/default.png');?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
					<p><?php echo ucwords(strtolower($this->session->userdata('fnbi_first_name'))) . ' ' . ucwords(strtolower($this->session->userdata('fnbi_last_name')));?></p>
			</div>
		</div>
		
		
		<!-- 
			<ul class="sidebar-menu">
				<li class="header">RECEIVABLES</li>
				<li class="<?php echo ($this->uri->uri_string() == 'receipts') ? 'active' : ''; ?>"><a href="<?php echo base_url();?>receipts"><i class="fa fa-edit"></i> <span>Receipts</span></a></li>
			</ul>-->
	</section>
<!-- /.sidebar -->
</aside>

