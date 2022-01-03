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
		#order_dropdown,#product_dropdown{width: 200px!important;padding-top: 8px;padding-bottom: 8x;}
		#category_dropdown,#customer_dropdown{width: 230px!important;padding-top: 8px;padding-bottom: 8x;}
		#order_dropdown a,#category_dropdown a,#product_dropdown a,#customer_dropdown a{color: grey;font-size: 14x;font-weight: 500;}
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

	<!-- 4 card section start -->
	<div class="row" style="margin-top: 10px;margin-bottom: 0px;">
		<div class="col l3 m4 s12">
			<div class="card" style="background: #884dff;">
				<div class="card-content">
					<h6 style="font-weight: 500;font-size: 15px;color: white;">Order's<span class="right"><span class="fa fa-ellipsis-v dropdown-trigger" data-target="order_dropdown" style="cursor: pointer;color: white;"></span></span></h6>
					<h5 style="margin-top: 25px;color: white;"><b><span id="show_orders">0</span></b><span class="right"><span class="fa fa-shopping-cart white-text"></span></span></h5>
					<h6 style="font-size: 14px;color: white;"><span id="show_orders_heading">Last 30 Days</span></h6>
					<!-- order dropdown start -->
					<ul class="dropdown-content" id="order_dropdown">
						<li><a href="#!">Today Order</a></li>
						<li><a href="#!">Privious Day Order</a></li>
						<li><a href="#!">Last 30 Days Orders</a></li>
						<div class="divider"></div>
						<li><a href="#!">All Orders</a></li>
					</ul>
					<!-- order dropdown end -->
				</div>
			</div>
		</div>
		<div class="col l3 m4 s12">
			<div class="card" style="background: #ffaa00;">
				<div class="card-content">
					<h6 style="font-weight: 500;font-size: 15px;color: white;">Categories<span class="right"><span class="fa fa-ellipsis-v dropdown-trigger" data-target="category_dropdown" style="cursor: pointer;color: white;"></span></span></h6>
					<h5 style="margin-top: 25px;color: white;"><b><span id="show_categories">0</span></b><span class="right"><span class="fa fa-list-alt white-text"></span></span></h5>
					<h6 style="font-size: 14px;color: white;"><span id="show_categories_heading">Last 30 Days</span></h6>
					<!-- category dropdown start -->
					<ul class="dropdown-content" id="category_dropdown">
						<li><a href="#!">Today Category</a></li>
						<li><a href="#!">Privious Day Category</a></li>
						<li><a href="#!">Last 30 Days Categories</a></li>
						<div class="divider"></div>
						<li><a href="#!">All Categories</a></li>
					</ul>
					<!-- category dropdown end -->
				</div>
			</div>
		</div>
		<div class="col l3 m4 s12">
			<div class="card" style="background: #99e600;">
				<div class="card-content">
					
					<h6 style="font-weight: 500;font-size: 15px;color: white;">Products<span class="right"><span class="fa fa-ellipsis-v dropdown-trigger" data-target="product_dropdown" style="cursor: pointer;color: white;"></span></span></h6>
					<h5 style="margin-top: 25px;color: white;"><b><span id="show_products">0</span></b><span class="right"><span class="fa fa-cubes white-text"></span></span></h5>
					<h6 style="font-size: 14px;color: white;"><span id="show_products_heading">Last 30 Days</span></h6>
					<!-- product dropdown start -->
					<ul class="dropdown-content" id="product_dropdown">
						<li><a href="#!">Today Product</a></li>
						<li><a href="#!">Privious Day Product</a></li>
						<li><a href="#!">Last 30 Days Products</a></li>
						<div class="divider"></div>
						<li><a href="#!">All Products</a></li>
					</ul>
					<!-- product dropdown end -->
					
				</div>
			</div>
		</div>
		<div class="col l3 m4 s12">
			<div class="card" style="background: #4d4dff;">
				<div class="card-content">
					<h6 style="font-weight: 500;font-size: 15px;color: white;">Customers<span class="right"><span class="fa fa-ellipsis-v dropdown-trigger" data-target="customer_dropdown" style="cursor: pointer;color: white;"></span></span></h6>
					<h5 style="margin-top: 25px;color: white;"><b><span id="show_users">0</span></b><span class="right"><span class="fa fa-users white-text"></span></span></h5>
					<h6 style="font-size: 14px;color: white;"><span id="show_users_heading">Last 30 Days</span></h6>
					<!-- customer dropdown start -->
	               <ul class="dropdown-content" id="customer_dropdown">
						<li><a href="#!">Today Customers</a></li>
						<li><a href="#!">Privious Day Customers</a></li>
						<li><a href="#!">Last 30 Days Customers</a></li>
						<div class="divider"></div>
						<li><a href="#!">All Customers</a></li>
				   </ul>
				<!-- customer dropdown end -->
				</div>
			</div>
		</div>
	</div>
	
	<!-- 4 card section end -->
	<!-- body section end -->
	<?php $this->load->view('home/js-file'); ?>
	<?php $this->load->view('admin/custom_js'); ?>

</body>
</html>
