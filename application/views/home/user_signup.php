<!DOCTYPE html>
<html>
<head>
	<title>User sign Up - KidsCity</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		#top_bar{background: #df80ff;}
		#top_bar #logo{font-size: 25px;font-weight: 500;color: white;}
		#my_account_dropdown{width:12%!important;padding-top: 10px;padding-bottom: 10px;}
		#my_account_dropdown li a{color: grey;font-size: 14px;}
		#input_box{border: 1px solid silver;box-shadow: none;box-sizing: border-box;padding-left: 10px;padding-right: 10px;height: 40px;border-radius: 3px;}
		textarea{border: 1px solid silver;padding: 10px;outline: none;height: 90px;resize: none;}
	</style>
</head>
<body style="background: #ffe6ff;">
	<!-- body section start -->
	<!-- tobbar section start-->
	<div id="top_bar" style="padding: 0px;">
	<div class ="row">
		<div class="col l3 m3 s10">
			<h6 style="margin-top: 15px;"><a href="<?= base_url('home'); ?>" id="logo">Kids City</a></h6>
		</div>
		<div class="col l6 m6 s12"></div>
		<div class="col l3 m3 s10">
    	<span class="right" style="padding-right: 30px;padding-top: 10px;"><a href="#!" class="dropdown-trigger" data-target="my_account_dropdown" style="color: white;"><span class="fa fa-user"></span>&nbsp;My Account</a></span>
    </div>
    <!-- my account dropdown -->
	<ul class="dropdown-content" id="my_account_dropdown">
		<li><a href="<?= base_url('home/user_signup'); ?>" class="waves-effect"><span class="fa fa-user-plus"></span>&nbsp;Register</a></li>
		<li><a href="<?= base_url('home/user_signin'); ?>" class="waves-effect"><span class="fa fa-sign-in-alt"></span>&nbsp;Login</a></li>
	</ul>
	<!-- my account dropdown -->
	</div> 
	</div>
	<!-- tobbar section end -->
	<!-- user sign_up form start -->
	<div class="row" style="margin-top: 10px;margin-bottom: 0px;">
		<div class="col l4 m4 s12"></div>
		<div class="col l4 m4 s12">
			<!-- card section start -->
			<div class="card" style="background: #ffffff;">
				<div class="card-content">
					<center>
						<h5><span class="fa fa-users"></span></h5>
						<h6>Create Account</h6>
				    </center>
				
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Full Name</h6>
				<input type="text" name="full_name" id="input_box" placeholder="Full Name">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Email</h6>
				<input type="text" name="email" id="input_box" placeholder="Email Address">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Mobile No</h6>
				<input type="text" name="mobile" id="input_box" placeholder="Mobile No">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Password</h6>
				<input type="password" name="password" id="input_box" onkeyup="check_password()" placeholder="XXXXXXXX">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Confirm Password</h6>
				<input type="password" name="confirm_password" onkeyup="check_password()" id="input_box" placeholder="XXXXXXXX">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Address</h6>
				<textarea name="address" placeholder="Enter Your Address"></textarea>
				<button type="submit" class="btn waves-effect" id="btn_register_now" style="background: blue;width: 100%;margin-top: 10px;box-shadow: none;text-transform: capitalize;">Register Now</button>
				<h6 style="font-size: 14px;color: red;font-weight: 500;text-align: center;">I have already Account</h6>
				<a href="" class="btn waves-effect" style="background: black;width: 100%;margin-top: 10px;box-shadow: none;text-transform: capitalize;">Sign In</a>
			</div>
			</div>
            <!-- card section end -->
        </div>
		<div class="col l4 m4 s12"></div>
	</div>
	<!-- user sign_up form end -->
	<!-- footer section start -->
	<footer>
		<div class="footer-copyright" style="padding-left: 10px;padding-right: 10px;background: #df80ff;">
    	© 2021 Copyright Message
    	<a class="grey-text text-lighten-4 right" href="#!">Develop By : Rehana Akther Shahi</a>
  		</div>
	</footer>
	<!-- footer section end-->
	<!-- body section end-->
	<?php $this->load->view('home/js-file'); ?>
</body>
</html>
