<!DOCTYPE html>
<html>
<head>
	<title>Company Profile - KidsCity</title>
	<link rel="shortcut icon" href="<?= base_url('assects/image/Logo.jpeg'); ?>">
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		
	</style>
</head>
<body>
	<?php $this->load->view('home/header'); ?>
	<div class="container">
	 	<div class="card">
	 		<div class="row">
	 			<div class="card-content">
	 				<h6 style="text-align: center;font-weight: 500;font-size: 25px;padding-left: 30px;padding-bottom: 10px;">KidsCity Family</h6>
	 				<img src="<?= base_url('assects/image/Family1.jpeg');?>"  class="responsive-img">
	 				<h6 style="padding-bottom: 10px;">Since 2008, KidsCity has been providing our customers with the very best fresh produce, local and imported kids daily needs, as well as an exquisite range of fashions, appliances, and more. In 2016, KidsCity was recognized as the Best Retail Brand in the country, as awarded jointly by Kantar Millward Brown and Bangladesh Brand Forum.</h6>
	 				<img src="<?= base_url('assects/image/shop.jpg');?>" class="responsive-img">
	 				<h6 style="text-align: center;font-weight: 500;font-size: 25px;padding-left: 50px;padding-bottom: 10px;">Everyday A Better Life</h6>
	 				<h6 style="padding-bottom: 10px;text-align: center;padding-left: 20px;">Discover a world of freshness, warm service and value.</h6>
	 				<h6>With over 60 outlets, KidsCity is the largest grocery chain in Bangladesh and Best Retail Brand in the country. As part of the KidsCity family, your satisfaction and wellbeing are what we work diligently to ensure. Most of all, we want to always leave you with a smile, whether you visit our stores or order online, and we are happy to serve you in whatever way we can.</h6>
	 				<h6 style="padding-bottom: 10px;text-align: center;padding-left: 20px;">So expect more. Come and discover a different shopping experience.</h6>
	 			</div>
	 		</div>
	 	</div>
	</div>

	<?php $this->load->view('home/footer'); ?>
	<!-- body section -->
	<?php $this->load->view('home/js-file'); ?>

</body>
</html>
