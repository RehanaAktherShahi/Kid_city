<!DOCTYPE html>
<html>
<head>
	<title>Order Details - KidsCity</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
	</style>
</head>
<body>
<!-- body section start -->
<?php $this->load->view('admin/topbar'); ?>
<!-- category section start -->
<div class="container">
	<div class="card">
		<div class="card-content" style="border-bottom: 1px solid silver;padding: 10px;">
			<h5 style="margin-top: 5px;font-size: 20px;">Shipping Address</h5>
			<h6>User Details / Address</h6>
			<h6><?= $order_details[0]->user_name; ?><br/><?= $order_details[0]->shipping_address; ?></h6>
		</div>
	</div>
	<div class="card">
		<div class="card-content" style="border-bottom: 1px solid silver;padding: 10px;">
			<h5 style="margin-top: 5px;font-size: 20px;">Product List</h5>
		</div>
		<div class="card-content" style="padding: 0px;">
			<table class="table">
				<tr>
					<th style="text-align: center;">ORDER ID</th>
					<th>PRODUCT NAME</th>
					<th style="text-align: right;">QUANTITY</th>
					<th style="text-align: right;">RATE</th>
					<th style="text-align: right;padding-right: 30px;">TOTAL AMOUNT</th>
				</tr>
				<?php if(count($product_list)):
				 foreach($product_list as $pro_list):?>
				<tr>
					<td style="text-align: center;"><?= $pro_list->order_id; ?></td>
					<td><?= $pro_list->product_name; ?></td>
					<td style="text-align: right;"><?= $pro_list->quantity; ?></td>
					<td style="text-align: right;"><?= number_format($pro_list->rate); ?></td>
					<td style="text-align: center;padding-left: 100px;"><?php $total_amount = $pro_list->quantity * $pro_list->rate; 
					echo number_format($total_amount); ?></td>
				</tr>
			<?php endforeach; 
			else: ?>
				<tr>
					<td colspan="5" style="text-align: center;">Products Not Found.</td>
				</tr>
			<?php endif; ?>
			</table>
		</div>
	</div>
</div>
<!-- category section end -->
<!-- body section end -->
<?php $this->load->view('home/js-file'); ?>
	<?php $this->load->view('admin/custom_js'); ?>
</body>
</html>