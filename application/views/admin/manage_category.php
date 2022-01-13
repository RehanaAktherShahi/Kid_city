<!DOCTYPE html>
<html>
<head>
	<title>Manage Categories - KidsCity</title>
	<?php $this->load->view('home/css-file'); ?>
	<style type="text/css">
		body{background: #f2f2f2;}
		#category_image{width: 40px;height: 40px;border-radius: 100%;border: 1px  solid silver;}
		.btn-flat:hover{background: #996633;color: white;}
		.action_dropdown{width: 120px!important}
		.action_dropdown li a{color: grey;font-size: 14px;font-weight: 500;}
	</style>
</head>
<body>
<!-- body section start -->
<?php $this->load->view('admin/topbar'); ?>
<!-- category section start -->
<div class="container">
	<div class="card">
		<div class="card-content" style="border-bottom: 1px solid silver;padding: 10px;">
			<h5>Manage Categories</h5>
		</div>
		<div class="card-content" style="padding: 0px;">
			<table class="table">
				<tr>
					<th style="text-align: center;">IMAGE</th>
					<th>NAME</th>
					<th>PRODUCTS</th>
					<th>STATUS</th>
					<th style="text-align: center;">ACTION</th>
				</tr>
				<?php if(count($categories)):
					foreach($categories as $cate): ?>
				<tr>
					<td>
						<center>
							<img src="<?= base_url().'uploads/category_image/'.$cate->image ?>" class="responsive-img" id="category_image">
						</center>
					</td>
					<td style="font-size: 14px;color: grey;"><?= $cate->category_name; ?><br/>
						<a href="<?= base_url('home/index'); ?>">View On Home</a></td>
					<td style="font-size: 14px;color: grey;"><a href="">Products</a></td>
					<td style="font-size: 14px;color: grey;"><?= ($cate->status == "0") ? 'Active':'Inactive'; ?></td>
					<td>
						<center>
							<a href="#!" class="btn btn-flat btn-floating dropdown-trigger" data-target="action_dropdown_<?= $cate->id; ?>"><span class="fa fa-ellipsis-v"></span></a>
						</center>
						<!-- action dropdown start -->
						<ul class="dropdown-content action_dropdown" id="action_dropdown_<?= $cate->id; ?>">
							<li><a href="<?= base_url('admin/edit_category/'.$cate->id); ?>"><span class="fa fa-edit"></span>&nbsp;Edit</a></li>
							<li><a href="<?= base_url('admin/delete_category/'.$cate->id); ?>"><span class="fa fa-trash"></span>&nbsp;Delete</a></li>
						</ul>
						<!-- action dropdown end -->
					</td>
				</tr>
			<?php endforeach;
			else: ?>
				<tr>
					<td colspan="5" style="text-align: center;">Categories Not Found</td>
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