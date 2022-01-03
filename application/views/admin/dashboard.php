<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - KidsCity</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		nav{background: #ff8080;height: 45px;line-height: 45px;}
		nav .brand-logo{font-weight: 500;font-size: 20px;}
		.collapsible-header{padding-left: 30px!important;font-weight: 500;font-size: 14px;}
		.collapsible-header:hover{background: #4CAF50!important;}
		#side_manu li a:hover{background: #4CAF50;}
	</style>
</head>
<body>
	<!-- body section start -->
	<!-- navbar section start -->
	<nav>
	<div class="nav-wrapper">
		<a href="<?= base_url('admin/dashboard'); ?>" class="brand-logo">&nbsp;Admin Panel</a>
		<!-- right section start -->
		<ul class="right">
			<li><a href="#!" class="sidenav-trigger" data-target="side_manu" style="display: block;height: 45px;line-height: 45px;"><span class="fa fa-bars"></span>&nbsp;Menu</a></li>
		</ul>
		<!-- right section end -->
	</div>
    </nav>
	<!-- navbar section end -->

	<!-- side menu section start -->
	<ul class="sidenav collapsible" id="side_manu">
		<li><a href="">Dashboard</a></li>
		<li>
			<div class="collapsible-header">Categories</div>
			<div class="collapsible-body">
				<ul>
					<li><a href="">Add Category</a></li>
					<li><a href="">Manage Categories</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Products</div>
			<div class="collapsible-body">
				<ul>
					<li><a href="">Add Product</a></li>
					<li><a href="">Manage Products</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Orders</div>
			<div class="collapsible-body">
				<ul>
					<li><a href="">Pending Orders</a></li>
					<li><a href="">Delivered Orders</a></li>
					<li><a href="">Manage Orders</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Sales</div>
			<div class="collapsible-body">
				<ul>
					<li><a href="">Today Sales</a></li>
					<li><a href="">All Time Sales</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Customers</div>
			<div class="collapsible-body">
				<ul>
					
					<li><a href="">Manage Customers</a></li>
				</ul>
			</div>
		</li>
		<li><a href="<?= base_url('admin/signout'); ?>">Sign Out</a></li>
	</ul>
	<!-- side menu section end -->
	<!-- body section end -->
	<?php $this->load->view('home/js-file'); ?>
	<?php $this->load->view('admin/custom_js'); ?>

</body>
</html>
