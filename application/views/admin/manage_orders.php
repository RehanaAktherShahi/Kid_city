<!DOCTYPE html>
<html>
<head>
	<title>Manage Orders - KidsCity</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		
		.btn-flat:hover{background: #996633;color: white;}
		.action_dropdown{width: 120px!important}
		.action_dropdown li a{color: grey;font-size: 14px;font-weight: 500;}
		#pagination a{color: black;font-weight: 500;border: 1px solid black;padding: 5px 10px;margin-left: 5px;}
		#pagination strong{font-weight: 500;border: 1px solid black;padding: 5px 10px;margin-left: 5px;background: black;color: white;}
		table tr td{font-size: 14px;padding: 5px;}

	</style>
</head>
<body>
<!-- body section -->
<?php $this->load->view('admin/topbar'); ?>
<!-- category section -->
<div class="container">
	<div class="card">
		<div class="card-content" style="border-bottom: 1px solid silver;padding: 10px;">
			<h5>Manage Order's</h5>
		</div>
		<div class="card-content" style="padding: 0px;">
			<table class="table">
				<tr>
					<th style="text-align: center;">ORDER ID</th>
					<th>CUSTOMER NAME</th>
					<th>QUANTITY</th>
					<th>AMOUNT</th>
					<th>ORDER DATE</th>
					<th>STATUS</th>
					<th style="text-align: center;">ACTION</th>
				</tr>
				<?php if(count($orders)): 
					foreach($orders as $order): ?>
				<tr>
					<td style="text-align: center;"><a href="">#<?= $order->id; ?></a></td>
					<td><?= $order->user_name; ?></td>
					<td><?= $order->total_quantity; ?></td>
					<td><span style="font-weight: 800;font-size: 14px;"> &#2547; </span>&nbsp;<?= number_format($order->total_amount); ?></td>
					<td><?= date('d M Y',strtotime($order->order_date)); ?></td>
					<td><?= $order->order_status; ?></td>
					<td>
						<center>
							<button type="button" class="btn btn-flat btn-floating dropdown-trigger" data-target = "order_action_<?= $order->id; ?>"><span class="fa fa-ellipsis-v"></span></button>
						</center>
						<ul class="dropdown-content action_dropdown" id="order_action_<?= $order->id; ?>">
						<li><a href="" class="waves-effect">Delete Order</a></li>
						<li><a href="" class="waves-effect">View Order</a></li>
						
					</ul>
					</td>
				</tr>
				<?php endforeach; 
				else: ?>
					<tr>
						<td colspan="7" style="text-align: center;">Order's Not Found.</td>
					</tr>
				<?php endif; ?>
			<tr>
				<td colspan="7" style="padding: 15px;">
					<div id="pagination">
						<?= $this->pagination->create_links(); ?>
				 	</div>
				</td>
			</tr>
			</table>
		</div>
	</div>
</div>
<!-- category section -->
<!-- body section -->
<?php $this->load->view('home/js-file'); ?>
	<?php $this->load->view('admin/custom_js'); ?>
</body>
</html>