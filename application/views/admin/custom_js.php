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


