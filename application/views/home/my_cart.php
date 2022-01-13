<!DOCTYPE html>
<html>
<head>
	<title>Cart - KidsCity</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #ffe6ff;}
		.btn-flat:hover{background: #ac00e6;color: white;}
		#input-box{border: 1px solid silver;box-shadow: none;box-sizing: border-box;padding-left: 10px;padding-right: 10px;height: 40px;border-radius: 3px;}
		#quantity_form{display: flex;}
		#quantity_form li{margin: 3px;}
	</style>
</head>
<body>
<!-- body section start -->
<?php $this->load->view('home/header'); ?>

<!-- cart section start -->
<div class="row" style="margin-bottom: 0px;margin-top: 10px;">
	<div class="col l8 m7 s12">
		<!-- card section start -->
		<div class="card">
		<div class="card-content" style="padding: 10px; border-bottom: 1px solid rgba(0,0,0,0.1);">
			<h5 style="font-size: 20px;margin-top: 5px;">My Cart</h5>
		</div>
		<div class="card-content">
		<?php for($i=0; $i<5; $i++): ?>
		<div class="row">
			<div class="col 13 m3 s12">
				<img src="<?= base_url('assects/image/F1.jpg'); ?>" class="responsive-img">
				<!-- quantity form start -->
				<ul id="quantity_form">
					<li>
						<button type="button" class="btn btn-floating"  style="background: #ac00e6;box-shadow: none;">-
						</button>
					</li>
					<input type="text" name="" id="input-box" value="5" readonly>
					<li>
						<button type="button" class="btn btn-floating"  style="background: #ac00e6;box-shadow: none;">+	
						</button>
					</li>
				</ul>
				<!-- quantity form end -->
			</div>
			<div class="col 19 m9 s12">
				<h6 style="font-size: 15px;font-weight: 500;">Product Name</h6>
				<h5 style="font-size: 20px;"><b><span style="font-weight: 800;font-size: 20px;"> &#2547; </span>&nbsp;500</b></h5>
				<h6 style="font-size: 14px;color: silver;">1 item X 1</h6>
				<a href="" class="btn btn-flat">View Item</a>
				<a href="" class="btn btn-flat">Remove Item</a>
			</div>
		</div>
		<?php endfor; ?>
		</div>
		</div>
<!-- card section end -->
	</div>

	<div class="col l4 m5 s12">
		<!-- card section start-->
	<div class="card">
		<div class="card-content" style="padding: 10px; border-bottom: 1px solid rgba(0,0,0,0.1);">
		<h5 style="font-size: 20px;margin-top: 5px;">Price Details</h5>
		</div>
		<div class="card-content">
			<h6 style="font-size: 15px;font-weight: 500;margin-top: 0px;border-bottom: 1px dashed silver;padding-bottom: 15px;">Price (5 Items)<span class="right"><span style="font-size: 15px;font-weight: 800;"> &#2547; </span>&nbsp;500 </span>
			</h6>
			<h5 style="font-size: 20px;font-weight: 500;margin-top: 0px;border-bottom: 1px dashed silver;padding-bottom: 15px;">Total Amount<span class="right" style="font-weight: 800;font-size: 20px;"><span> &#2547; </span>&nbsp;500</span></h5>
			<!-- button section start -->
			<div class="row" style="margin-top: 18px;margin-bottom: 0px;">

				<div class="col 16 m6 s6">
					<a href="" class="btn waves-effect waves-light" style="font-size: 12px;text-transform: capitalize;font-weight: 500;width: 100%;background:  #ac00e6;box-shadow: none;height: 40px;">Continue Shopping</a>
				</div>
				<div class="col 16 m6 s6">
					<a href="" class="btn waves-effect waves-light" style="font-size: 12px;text-transform: capitalize;font-weight: 500;width: 100%;background: black;box-shadow: none;height: 40px;">Place Order</a>
				</div>
				
			</div>



			<!-- button section end -->

		</div>
	</div>
	<!-- card section end-->
	</div>
</div>
<!-- cart section end -->

<?php $this->load->view('home/footer'); ?>
<!-- body section -->	
<?php $this->load->view('home/js-file'); ?>

</body>
</html>
