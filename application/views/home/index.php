<!DOCTYPE html>
<html>
<head>
	<title>KidsCity.com</title>
	<link rel="shortcut icon" href="<?= base_url('assects/image/logo.png'); ?>">
	<!-- materialize css file include -->
	<?= link_tag('assects/materialize/css/materialize.css'); ?>
	<!-- fontawesome css file include -->
	<?= link_tag('assects/fontawesome/css/all.css'); ?>
	<style type="text/css">
	body{background: #ffe6ff;}
	#top_bar{background: #ffb3b3;padding: 2px;}
	#my_account_dropdown{width:12%!important;padding-top: 10px;padding-bottom: 10px;}
	#my_account_dropdown li a{color: grey;font-size: 14px;}
	#search_bar{background: #ff8080;}
	#search_bar #logo{font-size: 30px;font-weight: 700;color: white;}
	#search_form{display: flex;}
	#search_form li:first-child{width: 500px;padding-top: 25px;}	
	#search{background: white;padding-left: 10px;padding-right: 10px;box-shadow: none;box-sizing: border-box;border: 2px solid black;border-right: none;height: 37px;margin-bottom: 2px;font-size: 14px;}
	nav{background: #ff8080;height: 40px;line-height: 40px;border-top: 1px solid white;box-shadow: none;}
	nav li a:hover{color: black;}
	#set_footer_link li a{color: white;line-height: 35px;}
	#set_footer_link li a:hover{color: black;text-decoration: underline;}
	#set_social_icon li{display: inline;}
    #set_social_icon li a{color: white;padding: 10px 15px;border:1px solid white;}

	</style>
</head>
<body>
	<!-- topbar section start-->
	<div id="top_bar">
	&nbsp;&nbsp;&nbsp;<span class="white-text"><span class="fa fa-phone"></span>&nbsp;&nbsp;+8801757557041&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-envelope"></span>&nbsp;&nbsp;rehenaakther260@gmail.com</span><span class="right" style="padding-right: 15px;"><a href="#!" class="dropdown-trigger" data-target="my_account_dropdown" style="color: white;"><span class="fa fa-user"></span>&nbsp;My Account</a></span>
	</div>
	<!-- my account dropdown -->
	<ul class="dropdown-content" id="my_account_dropdown">
		<li><a href="" class="waves-effect"><span class="fa fa-user-plus"></span>&nbsp;Register</a></li>
		<li><a href="" class="waves-effect"><span class="fa fa-sign-in-alt"></span>&nbsp;Login</a></li>
	</ul>
	<!-- my account dropdown -->
	<!-- topbar section end-->
	<!-- searchbar section start-->
	<div id="search_bar" style="padding: 1px;">
	<div class ="row">
		<div class="col l3 m3 s10">
			<h6 style="margin-top: 40px;"><a href="<?= base_url('home'); ?>" id="logo">Kids City</a></h6>
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
    	<h6 style="font-size: 14px;color: white;text-align: center;line-height: 18px;font-weight: 500;margin-top: 15px;padding-top: 25px;"><a href="<?= base_url('home'); ?>" style="color: white;font-size: 14px;color: white;"><span class="fa fa-shopping-cart" style="font-size: 30px;"></span>&nbsp;<br/>0 Items - <span style="font-size: 14px;font-weight: 800"> &#2547; </span>0</a></h6>
    </div>
	</div> 
	</div>
<!-- searchbar section end -->
<!-- menu bar section start-->
<nav>
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
<!-- image slider section start -->
<div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="<?= base_url('assects/image/Slide1.png'); ?>" class="responsive-img"></a>
    <a class="carousel-item" href="#two!"><img src="<?= base_url('assects/image/Slide2.jpg'); ?>" class="responsive-img"></a>
 </div>
<!-- image slider section end -->
<!-- category section start -->
<div class="row" style="margin-top: 15px;">
	<?php for($i=0; $i<8; $i++): ?>
    <div class="col l3 m6 s12">
	<!-- card section start-->
	<div class="card waves-effect" style="box-shadow: none;">
		<div class="card-content"  style="padding: 5px;padding-left: 10px;">
			<div class="row" style="margin-bottom: 0px;">
				<div class="col l7 m7 s7">
					<h6 style="font-size: 15px;color: blue;font-weight: 500;margin-top: 5px;">Category Name</h6>
					<h6 style="font-size: 13px;color:grey;box-shadow: none;margin top: 5px;">100 Products</h6>
					<a href="#!" class="btn waves-effect waves-light" style="background: #09aeae;">View More</a>
				</div>
				<div class="col l5 m5 s5">
					<img src="<?= base_url('assects/image/F1.jpg'); ?>" class="responsive-img" style="border:none solid rgba(0,0,0,0.1);width: 100%;height: 80px; margin-top: 10px;">
				</div>
		    </div>
	    </div>
    </div>
	<!-- card section end-->
	</div>
<?php endfor; ?>
</div>
<!-- category section end -->
<!-- footer section start -->
<footer class="page-footer" style="background: #ff8080;">
    <div class="row">
    	<div class="col l6 m6 s12" style="border-right: 1px solid white;">
    		<h6 class="right-align"><span class="fa fa-headset"></span>&nbsp;Contact Us</h6>
    		<h5 class="right-align" style="font-size: 20px;margin-top: 0px;">+8801757557041</h5>
    	</div>
    	<div class="col l6 m6 s12">
    		<h6><span class="fa fa-envelope"></span>&nbsp;Email Us</h6>
    		<h5 style="font-size: 20px;margin-top: 0px;">rehenaakther260@gmail.com</h5>
    	</div>
       <div class="col l4  s12">
        	<h5 class="white-text">Help</h5>
        	<ul>
          		<p style="font-size: 15px; text-align: justify;">Daily Bazar is dedicated to ensuring your<br> complete satisfaction, and we are always<br> happy to hear from you.
				If you have any<br> questions / comments / just want share<br> your thoughts,</p>
          		<li><a class="grey-text text-lighten-3" href="">Read More</a></li>
        	</ul>
      </div>
      <div class="col l4  s12">
        <h5 class="white-text">Links</h5>
        <ul id="set_footer_link">
          <li><a href="">Home</a></li>
          <li><a href="">Company Profile</a></li>
          <li><a href="">Policies</a></li>
          <li><a href="">Terms & Conditions</a></li>
          <li><a href="">Our Outlets</a></li>
          <li><a href="">User Login</a></li>
          <li><a href="">User Registration</a></li>
          <li><a href="">Admin Login</a></li>
        </ul>
      </div>
      <div class="col l4 s12">
        <h5>Address</h5>
          		<p><span class="fa fa-map-marker"></span>&nbsp;&nbsp;Road No: 29/1, House No: 03, Block: D,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shajalal Uposhohor, Sylhet-3100</p>
          		<p><span class="fa fa-phone"></span>&nbsp;&nbsp;+8801757557041, +8801893355529</p>
          		<p><span class="fa fa-envelope"></span>&nbsp;&nbsp;rehenaakther260@gmail.com</p>
          		<p><span class="fa fa-globe"></span>&nbsp;&nbsp;www.kidscity.com</p>
          		<br>
          		<!-- social media icon section start -->
				<ul id="set_social_icon">
					<li><a href="https://www.facebook.com/KidsCity"><span class="fab fa-facebook"></span></a></li>
					<li><a href="https://www.instagram.com/KidsCity"><span class="fab fa-instagram"></span></a></li>
					<li><a href="https://www.twitter.com/KidsCity"><span class="fab fa-twitter"></span></a></li>
					<li><a href="https://www.youtube.com/channel/KidsCity"><span class="fab fa-youtube"></span></a></li>
					<li><a href="https://www.google.com/KidsCity"><span class="fab fa-google"></span></a></li>
				</ul>
				<!-- social media icon section end -->
    	
      </div>
     
    </div>
  <div class="footer-copyright" style="padding-left: 10px;padding-right: 10px;background: #ffb3b3;">
    © 2021 Copyright Message
    <a class="grey-text text-lighten-4 right" href="#!">Develop By : Rehana Akther Shahi</a>
  </div>
</footer>
<!-- footer section end-->
	<!-- jquery js file include -->
	<script type="text/javascript" src="<?= base_url('assects/jquery/jquery.js'); ?>"></script>
	<!-- materlalize js file include -->
	<script type="text/javascript" src="<?= base_url('assects/materialize/js/materialize.js'); ?>"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.carousel.carousel-slider').carousel({
   			fullWidth: true,
    		indicators: true
  		 });
		// dropdown script
		$('.dropdown-trigger').dropdown({
			coverTrigger:false
		});
	});
</script>
</body>
</html>