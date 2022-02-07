<style type="text/css">
	#preloader{width: 25%;margin-top: 10%;}
</style>

<!-- preloader section -->
<div class="modal" id="preloader">
	<div class="modal-content" style="padding: 0px;">
		<h5 style="padding-left: 15px;font-size: 22px;font-weight: 500;">Please Wait...</h5>
		<!-- perloader -->
		<div class="progress" style="background: #FFB6C1;">
			<div class="indeterminate" style="background: blue;"></div>
		</div>
		<!-- perloader --> 
	</div>
	<div class="modal-content" style="padding: 10px;">
		<h6 id="preloader_heading" style="margin-top: 0px;">Login Your Account</h6>
		
	</div>
	
</div>


<!-- preloader section -->

<script type="text/javascript">
	$(function() {
		$('.modal').modal({
			dismissible:false
		});
		//$('#preloader').modal('open');
		// admin login script
		$('#btn_sign_in').click(function(){
			var username = $('input[name="username"]').val();
			var password = $('input[name="password"]').val();
			if (username =="") {
				M.toast({html:'Please Enter Username'});
			}
			else if(password ==""){
				M.toast({html:'Please Enter Password'});
			}
			else{
				$.ajax({
					type:'ajax',
					method:'POST',
					url:'<?= base_url('admin/loggedin'); ?>',
					data:{username:username,password:password},
					breforeSend:function(data){
						$('#preloader').modal('open');
					},
					success:function(data){
						$('#preloader').modal('close');
						if(data == '1'){
							window.location.href = '<?= base_url('admin/dashboard'); ?>';

						}
						else{
							M.toast({html:'Your Username & Password Do Not Metch'});

						}
						
					},
					error:function(){
						$('#preloader').modal('close');
						alert('Error ! Admin Login Account');
					}
				});

			}
		});
		// admin login script
	});
		
</script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Simple Column Chart with Index Labels"
	},
  	axisY: {
      includeZero: true
    },
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
      	indexLabelFontSize: 16,
		indexLabelPlacement: "outside",
		dataPoints: [
			{ x: 10, y: 71 },
			{ x: 20, y: 55 },
			{ x: 30, y: 50 },
			{ x: 40, y: 65 },
			{ x: 50, y: 92, indexLabel: "\u2605 Highest" },
			{ x: 60, y: 68 },
			{ x: 70, y: 38 },
			{ x: 80, y: 71 },
			{ x: 90, y: 54 },
			{ x: 100, y: 60 },
			{ x: 110, y: 36 },
			{ x: 120, y: 49 },
			{ x: 130, y: 21, indexLabel: "\u2691 Lowest" }
		]
	}]
});
chart.render();

}
</script>

<script type="text/javascript">
	//count orders script start
		count_orders();
		function count_orders(type = "all"){
			if(type == 'all'){
				$('#show_orders_heading').text('All');
			}
			else if(type == 'today'){
				$('#show_orders_heading').text('Today');
			}
			else if(type == 'yesterday'){
				$('#show_orders_heading').text('Yesterday');
			}
			else if(type == 'last_30_days'){
				$('#show_orders_heading').text('Last 30 Days');
			}
			else{
				$('#show_orders_heading').text('All');
			}
			$.ajax({
					type:'ajax',
					method:'GET',
					url:'<?= base_url('admin/count_orders/'); ?>'+type,
					beforeSend:function(data){
						$('#show_orders').text('Loading...');
					},
					
					success:function(data){
						$('#show_orders').html(data);
					},
					error:function(){
						$('#show_orders').text('0');
					}
				});
		}
		//count orders script end

		// count categories script start
		
		count_categories();
		function count_categories(type = "all"){
			if(type == 'all'){
				$('#show_categories_heading').text('All');
			}
			else if(type == 'today'){
				$('#show_categories_heading').text('Today');
			}
			else if(type == 'yesterday'){
				$('#show_categories_heading').text('Yesterday');
			}
			else if(type == 'last_30_days'){
				$('#show_categories_heading').text('Last 30 Days');
			}
			else{
				$('#show_categories_heading').text('All');
			}
			$.ajax({
					type:'ajax',
					method:'GET',
					url:'<?= base_url('admin/count_categories/'); ?>'+type,
					beforeSend:function(data){
						$('#show_categories').text('Loading...');
					},
					
					success:function(data){
						$('#show_categories').html(data);
					},
					error:function(){
						$('#show_categories').text('0');
					}
				});
		}
		// count categories script end

		// count products script start
		count_products();
		function count_products(type = "all"){
			if(type == 'all'){
				$('#show_products_heading').text('All');
			}
			else if(type == 'today'){
				$('#show_products_heading').text('Today');
			}
			else if(type == 'yesterday'){
				$('#show_products_heading').text('Yesterday');
			}
			else if(type == 'last_30_days'){
				$('#show_products_heading').text('Last 30 Days');
			}
			else{
				$('#show_products_heading').text('All');
			}
			$.ajax({
					type:'ajax',
					method:'GET',
					url:'<?= base_url('admin/count_products/'); ?>'+type,
					beforeSend:function(data){
						$('#show_products').text('Loading...');
					},
					
					success:function(data){
						$('#show_products').html(data);
					},
					error:function(){
						$('#show_products').text('0');
					}
				});
		}
		// count products script end

		// count users script start
		count_users();
		function count_users(type = "all"){
			if(type == 'all'){
				$('#show_users_heading').text('All');
			}
			else if(type == 'today'){
				$('#show_users_heading').text('Today');
			}
			else if(type == 'yesterday'){
				$('#show_users_heading').text('Yesterday');
			}
			else if(type == 'last_30_days'){
				$('#show_users_heading').text('Last 30 Days');
			}
			else{
				$('#show_users_heading').text('All');
			}
			$.ajax({
					type:'ajax',
					method:'GET',
					url:'<?= base_url('admin/count_users/'); ?>'+type,
					beforeSend:function(data){
						$('#show_users').text('Loading...');
					},
					
					success:function(data){
						$('#show_users').html(data);
					},
					error:function(){
						$('#show_users').text('0');
					}
				});
		}
		// count users script end
	</script>



