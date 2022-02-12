<style type="text/css">
	#top_bar{background: #ac00e6;padding: 2px;}
	#my_account_dropdown{width:12%!important;padding-top: 10px;padding-bottom: 10px;}
	#my_account_dropdown li a{color: grey;font-size: 14px;}
	#search_bar{background: #df80ff;}
	#search_bar #logo{font-size: 30px;font-weight: 700;color: white;}
	#search_form{display: flex;padding-left: 20px; margin-top: 30px;}
	#search_form li:first-child{width: 500px;padding-top: 25px;}	
	#search{background: white;padding-left: 10px;padding-right: 10px;box-shadow: none;box-sizing: border-box;border: 2px solid black;border-right: none;height: 37px;margin-bottom: 2px;font-size: 14px;}
	nav{background: #df80ff;height: 40px;line-height: 40px;border-top: 1px solid white;box-shadow: none;}
	nav li a:hover{color: black;}
</style>

<!-- topbar section start-->
	<div id="top_bar">
	&nbsp;&nbsp;&nbsp;<span class="white-text"><span class="fa fa-phone"></span>&nbsp;&nbsp;+8801757557041&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-envelope"></span>&nbsp;&nbsp;rehenaakther260@gmail.com</span><span class="right" style="padding-right: 15px;"><a href="#!" class="dropdown-trigger" data-target="my_account_dropdown" style="color: white;"><span class="fa fa-user"></span>&nbsp;My Account</a></span>
	</div>
	<!-- my account dropdown -->
	<ul class="dropdown-content" id="my_account_dropdown">
		<?php if($this->session->userdata('email') == "" && $this->session->userdata('password') == ""): ?>
		<li><a href="<?= base_url('home/user_signup'); ?>" class="waves-effect"><span class="fa fa-user-plus"></span>&nbsp;Register</a></li>
		<li><a href="<?= base_url('home/user_signin'); ?>" class="waves-effect"><span class="fa fa-sign-in-alt"></span>&nbsp;Login</a></li>
		<?php else: ?>
			<li><a href="<?= base_url('home/dashboard'); ?>" class="waves-effect"><span class="fa fa-home"></span>&nbsp;Dashboard</a></li>
			<li><a href="<?= base_url('home/carts'); ?>" class="waves-effect"><span class="fa fa-shopping-cart"></span>&nbsp;Carts</a></li>
			<li><a href="<?= base_url('home/my_orders'); ?>" class="waves-effect"><span class="fa fa-truck"></span>&nbsp;My Order's</a></li>
			<li><a href="<?= base_url('home/logout'); ?>" class="waves-effect"><span class="fa fa-sign-out-alt"></span>&nbsp;Logout</a></li>
		<?php endif; ?>
	</ul>
	<!-- my account dropdown -->
	<!-- topbar section end-->
	<!-- searchbar section start-->
	<div id="search_bar" style="padding: 1px;">
	<div class ="row">
		<div class="col l3 m3 s10">
			<h6 style="margin-top: 25px;"><a href="<?= base_url('index'); ?>" id="logo"><img src="<?= base_url('assects/image/Logo.jpeg'); ?>" class="responsive-img" style="width: 150px;height: 90px;border: 0px  solid silver;"></a></h6>
		</div>
	<div class="col l6 m6 s10">
		<!-- search products form start -->
		<ul id="search_form">
			<li>
				<input type="text" name="search" id="search"  placeholder="Search Your Products">
			</li>
			<li style="padding-top: 25px;">
				<button type="submit" class="btn waves-effects waves-lights" style="background: black;"><span class="fa fa-search"></button>
			</li>
		</ul>
		<!-- search products form end -->
	</div>
    <div class="col l3 m3 s10">
    	<h6 style="font-size: 14px;color: white;text-align: center;line-height: 18px;font-weight: 500;margin-top: 25px;padding-top: 25px;"><a href="<?= base_url('home/carts'); ?>" style="color: white;font-size: 14px;color: white;"><span class="fa fa-shopping-cart" style="font-size: 30px;"></span>&nbsp;<br/><span id="total_products">0</span> Items - <span style="font-size: 14px;font-weight: 800"> &#2547; </span><span id="total_amount">0</span></a></h6>
    </div>
	</div> 
	</div>
<!-- searchbar section end -->
<!-- menu bar section start-->
<nav style="padding-left: 300px;">
	<div class="nav-wrapper">
		<!-- left menu -->
		<ul class="left">
			<li><a href="<?= base_url('home/index'); ?>">Home</a></li>
			<li><a href="<?= base_url('home/company_profile'); ?>">Company Profile</a></li>
			<li><a href="">Our Policies</a></li>
			<li><a href="">Terms & Conditions</a></li>
			<li><a href="">Our Outlets</a></li>
			<li><a href="">Contact Us</a></li>
		</ul>
		
		<!-- left menu -->
	</div>
</nav>

<!-- menu bar section end-->