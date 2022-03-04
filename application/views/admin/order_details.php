<!DOCTYPE html>
<html>
<head>
	<title>Order Details - KidsCity</title>
	<link rel="shortcut icon" href="<?= base_url('assects/image/Logo.jpeg'); ?>">
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		select{display: block;border: 1px solid silver;height: 40px;margin-bottom: 10px;width: 40%;}
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
					<td><a href="<?= base_url('home/Product_detail/'.$pro_list->product_id); ?>" target="_blank"><?= $pro_list->product_name; ?></a></td>
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
	<div class="card">
		<div class="card-content" style="border-bottom: 1px solid silver;padding: 10px;">
			<h5 style="margin-top: 5px;font-size: 20px;">Order Status</h5>
		</div>
		<div class="card-content" style="padding: 10px;">
			<?= form_open('admin/change_order_status/'.$order_details[0]->id); ?>
			<h6 style="font-size: 14px;font-weight: 500;color: grey;">Order Status</h6>
			<select name="status">
				<?php if($order_details[0]->order_status == 'Pending'): ?>
					<option selected>Pending</option>
					<option>Packed</option>
					<option>Dispatch</option>
					<option>Delivered</option>
					<?php elseif($order_details[0]->order_status == 'Packed'): ?>
						<option selected>Pending</option>
						<option selected>Packed</option>
						<option>Dispatch</option>
						<option>Delivered</option>
						<?php elseif($order_details[0]->order_status == 'Dispatch'): ?>
							<option selected>Pending</option>
							<option>Packed</option>
							<option selected>Dispatch</option>
							<option>Delivered</option>
							<?php elseif($order_details[0]->order_status == 'Delivered'): ?>
								<option selected>Pending</option>
								<option>Packed</option>
								<option>Dispatch</option>
								<option selected>Delivered</option>
								<?php else: ?>
									<option selected="">Select Status</option>
									<option selected>Pending</option>
									<option>Packed</option>
									<option>Dispatch</option>
									<option>Delivered</option>
								<?php endif; ?>
				
			</select>
			<button type="submit" class="btn waves-effect waves-light" style="background: #ac00e6;text-transform: capitalize;">Update Status</button>
			<a href="<?= base_url('admin/print_label/'.$order_details[0]->id); ?>" target="_blank" class="btn waves-effect waves-light" style="background: black;text-transform: capitalize;">Print Lable</a>
			<?= form_close(); ?>
		</div>
	</div>
</div>
<!-- category section end -->
<!-- body section end -->
<?php $this->load->view('home/js-file'); ?>
	<?php $this->load->view('admin/custom_js'); ?>
</body>
</html>