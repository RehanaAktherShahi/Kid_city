<!DOCTYPE html>
<html>
<head>
	<title>View Category - KidsCity</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #ffe6ff;}
		.btn-flat:hover{background: #09aeae;color: white;}
		#category_filter{padding-top: 10px;padding-bottom: 10px;}
		#category_filter li a{color: grey;font-size: 14px;}
	</style>
</head>
<body>
	<!-- body section start-->
	<?php $this->load->view('home/header'); ?>
	<!-- cart section start -->
	<div class="card" style="margin-top: 10px;">
		<div class="card-content" style="padding: 10px;border-bottom: 1px solid silver;">
			<h5 style="margin-top: 5px;">Products Name<span class="right"><button type="button" class="btn btn-flat waves-effect waves-light dropdown-trigger" data-target="category_filter" style="text-transform: capitalize;font-weight: 500;"><span class="fa fa-filter"></span>&nbsp;Product Filter</button></span></h5>
			<!-- category filter dropdown start -->
			<ul class="dropdown-content" id="category_filter">
				<li><a href="" class="waves-effect">Defult Product</a></li>
				<li><a href="" class="waves-effect">Best Match</a></li>
				<li><a href="" class="waves-effect">Lowest Price</a></li>
				<li><a href="" class="waves-effect">Highest Price</a></li>
			</ul>
			<!-- category filter dropdown end -->
			<div class="card-content" style="padding: 0px;margin-top: 10px;">
				<div class="row" style="margin-bottom: 0px;">
	            <?php for($i=0; $i<6; $i++): ?>
	<div class="col l2 m3 s6">
		<!-- card-section start -->
		<div class="card">
			
			<div class="card-image">
				<img src="<?= base_url('assects/image/F1.jpg'); ?>" class="responsive-img" style="width: 100%;height: 190px;">
			</div>
			<div class="card-content" style="padding: 10px;border-bottom: 1px solid silver;">
				<h6 style="font-size: 15px;color: blue;font-weight: 500;margin-top: 5px;">Product Title</h6>
				<h6 style="font-size: 13px;color:grey;box-shadow: none;margin top: 5px;">Category</h6>
				<h5 style="font-size: 20px;color: green;font-weight: 500;margin-top: 5px;margin-bottom: 5px;"><span style="font-weight: 800;font-size: 20px;"> &#2547; </span>&nbsp;500</h5>
			</div>
			<div class="card-content" style="padding: 3px;">
				<center>
				     <a href="#!" class="btn btn-flat btn-floating waves-effect"><span class="fa fa-shopping-cart"></span></a>
				     <a href="#!" class="btn btn-flat btn-floating waves-effect"><span class="fa fa-eye"></span></a>
			    </center>

		    </div>
		</div>
		<!-- card-section end -->
	</div>
	<?php endfor; ?>
   </div>
		</div>
	</div>
</div>

	<!-- cart section end-->
	<?php $this->load->view('home/footer'); ?>
	<!-- body section end-->
	<?php $this->load->view('home/js-file'); ?>

</body>
</html>
