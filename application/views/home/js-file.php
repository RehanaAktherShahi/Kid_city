<script type="text/javascript" src="<?= base_url('assects/jquery/jquery.js'); ?>"></script>
	<!-- materlalize js file include -->
	<script type="text/javascript" src="<?= base_url('assects/materialize/js/materialize.js'); ?>"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.carousel.carousel-slider').carousel({
   			fullWidth: true,
    		indicators: true
  		 });
		// dropdown script
		$('.dropdown-trigger').dropdown({
			coverTrigger:false
		});
	});
</script>