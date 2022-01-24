<style type="text/css">
	#product_detail_modal{width: 80%;}
</style>
<!-- view product details model start -->
<div class="modal" id="product_detail_modal">
	
</div>
<!-- view product details model end -->

<script type="text/javascript" src="<?= base_url('assects/jquery/jquery.js'); ?>"></script>
	<!-- materlalize js file include -->
	<script type="text/javascript" src="<?= base_url('assects/materialize/js/materialize.js'); ?>"></script>
	<!-- chart js file include -->
	<script type="text/javascript" src="<?= base_url('assects/chart/chart.js'); ?>"></script>
	<script type="text/javascript">
	$(document).ready(function(){

		//model script
		$('.modal').modal();
		//$('#product_detail_modal').modal('open');
		$('.carousel.carousel-slider').carousel({
   			fullWidth: true,
    		indicators: true
  		 });
		//collapsible script
		$('.collapsible').collapsible();
		//sidenav script
		$('.sidenav').sidenav();
		// dropdown script
		$('.dropdown-trigger').dropdown({
			coverTrigger:false
		});
	});
</script>
<!-- custom ajax script -->
<script type="text/javascript">
	function view_product_details(product_id)
	{
		//alert(product_id);
		$.ajax({
			type:'ajax',
			method:'GET',
			url:'<?= base_url('home/get_product_details/'); ?>'+product_id,
			beforeSend:function(data){
				$('#preloader').modal('open');
				$('#preloader_heading').text('Fetch Product Details');
			},
			success:function(data){
				$('#product_detail_modal').modal('open');
				$('#product_detail_modal').html(data);
				$('#preloader').modal('close');
			},
			error:function(){
				alert('Error ! Fetch product Details.');
			}
		});
	}
	// add to cart script start
	function add_to_cart(product_id)
	{
		$.ajax({
			type:'ajax',
		
			method:'GET',
			url:'<?= base_url('home/add_to_cart/'); ?>'+product_id,
			beforeSend:function(data){
				$('#preloader').modal('open');
				$('#preloader_heading').text('Product Add In Your Cart.');
			},
			success:function(data){
				$('#preloader').modal('close');
				if(data == "1"){
					M.toast({html:'Product Successfully Add  In Cart.'});
					calculate_carts_products();
				}
				else{
					M.toast({html:'Product Not Add  In Cart.'});
				}
				
			},
			error:function(){
				alert('Error ! Add  To Cart.');
			}
		});
	}
	// add to cart script end

	//update quantity script start
	function update_quantity(type,product_id,id)
	{
		var qname = "quantity_"+id;
		 var quantity = $('input[name="'+qname+'"]').val();
		
		$.ajax({
			type:'ajax',
			method:'GET',
			url:'<?= base_url('home/update_quantity/'); ?>'+quantity+'/'+type+'/'+product_id,
			beforeSend:function(data){
				$('#preloader').modal('open');
				$('#preloader_heading').text('Update Product Quantity.');
			},
			success:function(data){
				$('#preloader').modal('close');
				if(data == "1"){
					M.toast({html:'Product Quantity Update Successfully.'});
					location.reload();
				}
				else{
					M.toast({html:'Product Quantity Update Fail.'});
				}
				
			},
			error:function(){
				alert('Error ! Update Quantity.');
			}
		});
	}
	//update quantity script end

	// calculate carts products script start
	calculate_carts_products();
	function calculate_carts_products()
	{
		$.ajax({
			type:'ajax',
			method:'GET',
			url:'<?= base_url('home/calculate_cart_products'); ?>',
			beforeSend:function(data){
				//$('#preloader').modal('open');
				//$('#preloader_heading').text('Update Product Quantity.');
			},
			success:function(data){
				//$('#preloader').modal('close');
				var json_data = JSON.parse(data);
				$('#total_products').html(json_data.total_products);
				$('#total_amount').html(json_data.total_amount);
				
			},
			error:function(){
				alert('Error ! Update Quantity.');
			}
		});
	}
	// calculate carts products script end

	</script>