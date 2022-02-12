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
		#search_category{display: flex;}
		#search_category li:first-child{width: 250px;}
		#input_box{border: 1px solid silver;box-shadow: none;box-sizing: border-box;padding-left: 10px;padding-right: 10px;height: 40px;border-radius: 0px;}
		#category_filter{width: 180px!important;padding-top: 8px;padding-bottom: 8px;}
		#category_filter li a{color: grey;font-size: 14px;font-weight: 500;}
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
			<!-- category search form start -->
			<div class="row">
				<div class="col l6 m6 s12">
					<?= form_open('admin/search_category'); ?>
					<ul id="search_category">
						<li>
							<input type="text" name="category_name" id ="input_box" placeholder="Enter Category Name" value="<?= set_value('category_name'); ?>" required> 
						</li>
						<li>
							<button type="submit" class="btn waves-effect waves-light" style="background: black;box-shadow: none;text-transform: capitalize;font-weight: 500;height: 40px;">Search Now</button>
						</li>
					</ul>
					<?= form_close(); ?>
				</div>
				<!-- category filter start -->
				<div class="col l6 m6 s12">
					<span class="right">
						<button type="button" class="btn waves-effect waves-light dropdown-trigger" data-target="category_filter" style="background: black;box-shadow: none;text-transform: capitalize;font-weight: 500;height: 40px;margin-top: 15px;"><span class="fa fa-filter"></span>&nbsp;Filter</button>
					</span>
					
					<ul class="dropdown-content" id="category_filter">
						<li><a href="<?= base_url('admin/filter_category/new_category'); ?>" class="waves-effect">New Category First</a></li>
						<li><a href="<?= base_url('admin/filter_category/old_category'); ?>" class="waves-effect">Old Category First</a></li>
						<li><a href="<?= base_url('admin/filter_category/highest_products'); ?>" class="waves-effec<??>t">Highest Product</a></li>
						<li><a href="<?= base_url('admin/filter_category/lowest_products'); ?>" class="waves-effect">Lowest Product</a></li>
					</ul>
					<!-- category filter end -->
				</div>
			</div>
			<!-- category search form end -->
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
							<li><a href="<?= base_url('admin/delete_category/'.$cate->id); ?>" onclick="return confirm('Are you sure delete this category.')"><span class="fa fa-trash"></span>&nbsp;Delete</a></li>
							<?php if($cate->status == "0"): ?>
							<li><a href="<?= base_url('admin/change_category_status/'.$cate->id.'/1'); ?>"><span class="fa fa-eye-slash"></span>&nbsp;Inactive</a></li>
							<?php else: ?>
								<li><a href="<?= base_url('admin/change_category_status/'.$cate->id.'/0'); ?>"><span class="fa fa-eye"></span>&nbsp;Active</a></li>
							<?php endif; ?>
						</ul>
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