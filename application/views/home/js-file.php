<script type="text/javascript" src="<?= base_url('assects/jquery/jquery.js'); ?>"></script>
	<!-- materlalize js file include -->
	<script type="text/javascript" src="<?= base_url('assects/materialize/js/materialize.js'); ?>"></script>
	<!-- chart js file include -->
	<script type="text/javascript" src="<?= base_url('assects/chart/chart.js'); ?>"></script>
	<script type="text/javascript">
	$(document).ready(function(){
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