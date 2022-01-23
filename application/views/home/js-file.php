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
	</script>