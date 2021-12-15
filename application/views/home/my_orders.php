<!DOCTYPE html>
<html>
<head>
	<title>My Orders - KidsCity</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		
	</style>
</head>
<body>
	<!-- body section -->
	<?php $this->load->view('home/header'); ?>
	<!-- cart section -->
	<h4 style="padding-left: 10px;font-size: 25px;">My Orders(5)</h4>
	<div class="container">
		<!-- card section -->
		<div class="card">
			<div class="card-content" style="border-bottom: 1px solid silver;">
				<a href="" class="btn waves-effect waves-light" style="background: blue;box-shadow: none;">Order Id - 2</a>
				<a href="" class="btn waves-effect waves-dark right" style="background: none;color: grey;box-shadow: none;border: 1px solid silver;">Track Order</a>
			</div>
			<div class="card-content" style="border-bottom: 1px solid silver;">
				<div class="row" style="margin-bottom: 0px;">
					<div class="col l2 m3 s12">
						<img src="<?= base_url('assects/image/F1.jpg'); ?>" class="responsive-img" style="width: 100px;height: 100px;">
					</div>
					<div class="col l5 m5 s12">
						<h5 style="font-size: 20px;font-weight: 500;">product name</h5>
						<h6 style="font-size: 14px;color: grey;margin-top: 0px;">Quantity: 5</h6>
					</div>
					<div class="col l5 m4 s12">
						<h5 style="font-size: 20px;font-weight: 500;"><span style="font-weight: 800;font-size: 20px;"> &#2547; </span>&nbsp;500</h5>

						<h6> Your product is not delivered</h6>
					</div>
				</div>
			</div>
			<div class="card-content" style="padding: 10px;">
				<h6 style="margin-top: 5px;">Ordered On : <b>5-12-2021</b><span class="right">Order Total : <b><span style="font-weight: 800;font-size: 15px;"> &#2547; </span>500</b></span></h6>
			</div>
		</div>
		<!-- card section -->
	</div>
<div class="container">
	<p style="text-align: center;font-size: 14px;font-weight: 500;color: grey;">KidsCity have the super reliable shopping cart for faster order with standard security considerations.</p>
</div>
	<!-- cart section -->

	<?php $this->load->view('home/footer'); ?>
	<!-- body section -->
	<?php $this->load->view('home/js-file'); ?>

</body>
</html>
