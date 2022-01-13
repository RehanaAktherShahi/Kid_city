<!DOCTYPE html>
<html>
<head>
	<title>Products Details - KidsCity</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #ffe6ff;}
		.btn-flat:hover{background: #ac00e6;color: white;}
		
	</style>
</head>
<body>
	<!-- body section start -->
	<?php $this->load->view('home/header'); ?>
	<!-- cart section start -->
	<div class="card" style="margin-top: 10px;">
		<div class="card-content" style="padding: 10px;">
			<!-- product details section start -->
			<div class="row">
				<div class="col l4 m4 s12">
					<img src="<?= base_url('assects/image/F1.jpg'); ?>" class="responsive-img" style="border: 1px solid rgba(0,0,0,0.1);">
				</div>
				<div class="col l5 m5 s12">
					<h5 style="margin-top: 0px;font-weight: 500;">Product title</h5>
					<h6 style="font-size: 13px;color:grey;box-shadow: none;margin top: 5px;">Home / Category / Product Name</h6>
					<div class="divider" style="margin-top: 15px;margin-bottom: 15px;"></div>
					<p style="font-size: 14px;color: grey;line-height: 20px;">hgde hghdvghg hghdghddtyvgdhdhs</p>
					<h6 style="font-size: 15px;font-weight: 500;color: grey;">Color: Blue</h6>
					<h6 style="font-size: 15px;font-weight: 500;color: grey;">Size : 5</h6>
					<div class="divider" style="margin-top: 15px;margin-bottom: 15px;"></div>
					<h5><b><span class="left" style="font-weight: 800;font-size: 25px;"> &#2547;</span>&nbsp;500</b></h5>
					<div class="row">
						<div class="col l6 m6 s12">
							<button type="button" class="btn waves-effect" style="background: #ac00e6;width: 100%;height: 40px;box-shadow: none;"><span class="fa fa-shopping-cart"></span>&nbsp;Add to Cart</button>
						</div>
						<div class="col l6 m6 s12">
							<button type="button" class="btn waves-effect waves-light" style="background: black;width: 100%;height: 40px;box-shadow: none;"><span class="fa fa-cube"></span>&nbsp;Buy Now</button>
						</div>

					</div>
				</div>
				

			</div>
			<!-- product details section end -->
			<!-- related product start -->
			<h5 style="padding-left: 15px;font-size: 22px;font-weight: 500;">Related Products</h5>
			<div class="row" style="margin-bottom: 0px;">
			<?php for($i=0; $i<5; $i++): ?>	
	<div class="col l2 m3 s6">
		<!-- card-section start -->
		<div class="card">
			<div class="card-image">
				<img src="<?= base_url('assects/image/F1.jpg'); ?>" class="responsive-img" style="width: 100%;height: 190px;">
			</div>
			<div class="card-content" style="padding: 10px;border-bottom: 1px solid silver;">
				<h6 style="font-size: 15px;color: blue;font-weight: 500;margin-top: 5px;">product title</h6>
				<h6 style="font-size: 13px;color:grey;box-shadow: none;margin top: 5px;">Category</h6>
				<h5 style="font-size: 20px;color: green;font-weight: 500;margin-top: 5px;margin-bottom: 5px;"><span class="left" style="font-weight: 800;font-size: 20px;"> &#2547; </span>&nbsp;500</h5>
			</div>
			<div class="card-content" style="padding: 3px;">
				<center>
				     <a href="" class="btn btn-flat btn-floating waves-effect"><span class="fa fa-shopping-cart"></span></a>
				     <a href="" class="btn btn-flat btn-floating waves-effect"><span class="fa fa-eye"></span></a>
			    </center>

		    </div>
		</div>
		<!-- card-section end -->
	</div>
	<?php endfor; ?>
			</div>
			<!-- related product end -->	
		</div>
	</div>
	<!-- cart section end-->

	<?php $this->load->view('home/footer'); ?>
	<!-- body section end -->
	<?php $this->load->view('home/js-file'); ?>

</body>
</html>
