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
	#top_bar{background: #ffb3b3;padding: 2px;}
	#search_bar{background: #ff8080;}
	#search_bar #logo{font-size: 30px;font-weight: 700;color: white;}
	#search_form{display: flex;}
	#search_form li:first-child{width: 500px;padding-top: 25px;}	
	#search{background: white;padding-left: 10px;padding-right: 10px;box-shadow: none;box-sizing: border-box;border: 2px solid black;border-right: none;height: 37px;margin-bottom: 2px;font-size: 14px;}
	nav{background: #ff8080;height: 40px;line-height: 40px;border-top: 1px solid white;box-shadow: none;}
	</style>
</head>
<body>
	<!-- topbar section start-->
	<div id="top_bar">
	&nbsp;&nbsp;&nbsp;<span class="white-text"><span class="fa fa-phone"></span>&nbsp;&nbsp;+8801757557041&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-envelope"></span>&nbsp;&nbsp;rehenaakther260@gmail.com</span>
	</div>
	<!-- topbar section end-->
	<!-- searchbar section start-->
	<div id="search_bar" style="padding: 1px;">
	<div class ="row">
		<div class="col l3 m3 s10">
			<h6 style="margin-top: 40px;"><a href="<?= base_url('home'); ?>" id="logo">Kids City</a></h6>
		</div>
	<div class="col l6 m6 s10">
		<!-- search products form -->
		<ul id="search_form">
			<li>
				<input type="text" name="search" id="search"  placeholder="Search Your Products">
			</li>
			<li style="padding-top: 25px;">
				<button type="submit" class="btn waves-effects waves-lights" style="background: black;"><span class="fa fa-search"></button>
			</li>
		</ul>
		<!-- search products form -->
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
      <div class="col l4 s12">
        <h5 class="white-text">Contact Information</h5>
        <p class="grey-text text-lighten-4">Daily Bazar<br/>
        Shajalal Uposohor<br/>
        Sylhet-3100</p>
    	<p>rehenaakther260@gmail.com</p>
      </div>
      <div class="col l4  s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="">Company Profile</a></li>
          <li><a class="grey-text text-lighten-3" href="">Policies</a></li>
          <li><a class="grey-text text-lighten-3" href="">User Login</a></li>
          <li><a class="grey-text text-lighten-3" href="">User Registration</a></li>
        </ul>
      </div>
      <div class="col l4  s12">
        <h5 class="white-text">Help</h5>
        
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
	});
</script>
</body>
</html>