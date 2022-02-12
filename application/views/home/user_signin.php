<!DOCTYPE html>
<html>
<head>
	<title>User sign in - KidsCity</title>
	<link rel="shortcut icon" href="<?= base_url('assects/image/Logo.jpeg'); ?>">
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
    <!-- my account dropdown start -->
	<ul class="dropdown-content" id="my_account_dropdown">
		<li><a href="<?= base_url('home/user_signup'); ?>" class="waves-effect"><span class="fa fa-user-plus"></span>&nbsp;Register</a></li>
		<li><a href="<?= base_url('home/user_signin'); ?>" class="waves-effect"><span class="fa fa-sign-in-alt"></span>&nbsp;Login</a></li>
	</ul>
	<!-- my account dropdown end -->
	</div> 
	</div>
	<!-- tobbar section end -->

	<!-- user sign_in form start -->
	<div class="row" style="margin-top: 10px;margin-bottom: 0px;">
		<div class="col l4 m4 s12"></div>
		<div class="col l4 m4 s12">
			<!-- card section start -->
			<div class="card">
				<div class="card-content">
					<?= form_open('home/user_logged_in/'.$page); ?>
					<center>
						<h5><span class="fa fa-users"></span></h5>
						<h6>SignIn Account</h6>
				    </center>
				
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Username / Email</h6>
				<input type="text" name="email" id="input_box" placeholder="Email">
				<h6 style="font-size: 14px;color: grey;font-weight: 500;">Password</h6>
				<input type="password" name="password" id="input_box" placeholder="XXXXXXXX">
				<button type="submit" class="btn waves-effect" style="background: blue;width: 100%;margin-top: 10px;box-shadow: none;text-transform: capitalize;">Sign In</button>
				<h6 style="font-size: 14px;color: red;font-weight: 500;text-align: center;">I don't have an Account</h6>
				<a href="<?= base_url('home/user_signup'); ?>" class="btn waves-effect" style="background: black;width: 100%;margin-top: 10px;box-shadow: none;text-transform: capitalize;">Create an Account</a>
				<?= form_close(); ?>
			</div>
			</div>
            <!-- card section end -->
        </div>
		<div class="col l4 m4 s12"></div>
	</div>
	
	<!-- user sign_in form end -->
	<!-- body section end-->
	<?php $this->load->view('home/js-file'); ?>
</body>
</html>
