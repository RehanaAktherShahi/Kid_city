<!DOCTYPE html>
<html>
<head>
	<title>Place Order - KidsCity</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		
	</style>
</head>
<body>
	<!-- body section start -->
	<?php $this->load->view('home/header'); ?>
	<!-- user sign_up form start -->
	<div class="container">
			<!-- card section start -->
		<div class="card">
			<div class="card-content" style="padding: 10px;border-bottom: 1px solid silver;">
					<h6 style="font-size: 15px;color: grey;font-weight: 500;margin-top: 5px;">User Login & Register</h6>
			</div>
			<div class="card-content">
			<!-- button section start -->
				<div class="row" style="margin-top: 18px;margin-bottom: 0px;">
					<div class="col 16 m6 s6">
						<a href="<?= base_url('home/user_signup/cart'); ?>" class="btn waves-effect waves-light" style="font-size: 12px;text-transform: capitalize;font-weight: 500;width: 100%;background: #663300;box-shadow: none;height: 40px;">Register Account</a>
					</div>
					<div class="col 16 m6 s6">
						<a href="<?= base_url('home/user_signin/cart'); ?>" class="btn waves-effect waves-light" style="font-size: 12px;text-transform: capitalize;font-weight: 500;width: 100%;background: black;box-shadow: none;height: 40px;">Login Account</a>
					</div>
				
				</div>
			<!-- button section end -->
			</div>
		</div>
            <!-- card section end -->
    </div>
	<!-- user sign_up form end -->
	<?php $this->load->view('home/footer'); ?>
	<!-- body section end -->
	<?php $this->load->view('home/js-file'); ?>

</body>
</html>
