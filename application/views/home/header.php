<style type="text/css">
	#top_bar{background: #ffb3b3;padding: 2px;}
	#my_account_dropdown{width:12%!important;padding-top: 10px;padding-bottom: 10px;}
	#my_account_dropdown li a{color: grey;font-size: 14px;}
	#search_bar{background: #ff8080;}
	#search_bar #logo{font-size: 30px;font-weight: 700;color: white;}
	#search_form{display: flex;padding-left: 20px;}
	#search_form li:first-child{width: 500px;padding-top: 25px;}	
	#search{background: white;padding-left: 10px;padding-right: 10px;box-shadow: none;box-sizing: border-box;border: 2px solid black;border-right: none;height: 37px;margin-bottom: 2px;font-size: 14px;}
	nav{background: #ff8080;height: 40px;line-height: 40px;border-top: 1px solid white;box-shadow: none;}
	nav li a:hover{color: black;}
</style>

<!-- topbar section start-->
	<div id="top_bar">
	&nbsp;&nbsp;&nbsp;<span class="white-text"><span class="fa fa-phone"></span>&nbsp;&nbsp;+8801757557041&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-envelope"></span>&nbsp;&nbsp;rehenaakther260@gmail.com</span><span class="right" style="padding-right: 15px;"><a href="#!" class="dropdown-trigger" data-target="my_account_dropdown" style="color: white;"><span class="fa fa-user"></span>&nbsp;My Account</a></span>
	</div>
	<!-- my account dropdown -->
	<ul class="dropdown-content" id="my_account_dropdown">
		<li><a href="<?= base_url('home/user_signup'); ?>" class="waves-effect"><span class="fa fa-user-plus"></span>&nbsp;Register</a></li>
		<li><a href="<?= base_url('home/user_signin'); ?>" class="waves-effect"><span class="fa fa-sign-in-alt"></span>&nbsp;Login</a></li>
	</ul>
	<!-- my account dropdown -->
	<!-- topbar section end-->
	<!-- searchbar section start-->
	<div id="search_bar" style="padding: 1px;">
	<div class ="row">
		<div class="col l3 m3 s10">
			<h6 style="margin-top: 40px;"><a href="<?= base_url('index'); ?>" id="logo">Kids City</a></h6>
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
    	<h6 style="font-size: 14px;color: white;text-align: center;line-height: 18px;font-weight: 500;margin-top: 15px;padding-top: 25px;"><a href="<?= base_url('home/carts'); ?>" style="color: white;font-size: 14px;color: white;"><span class="fa fa-shopping-cart" style="font-size: 30px;"></span>&nbsp;<br/>0 Items - <span style="font-size: 14px;font-weight: 800"> &#2547; </span>0</a></h6>
    </div>
	</div> 
	</div>
<!-- searchbar section end -->
<!-- menu bar section start-->
<nav style="padding-left: 300px;">
	<div class="nav-wrapper">
		<!-- left menu -->
		<ul class="left">
			<li><a href="">Home</a></li>
			<li><a href="">Company Profile</a></li>
			<li><a href="">Our Policies</a></li>
			<li><a href="">Terms & Conditions</a></li>
			<li><a href="">Our Outlets</a></li>
			<li><a href="">Contact Us</a></li>
		</ul>
		
		<!-- left menu -->
	</div>
</nav>

<!-- menu bar section end-->