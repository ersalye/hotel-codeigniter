	   <?php  $this->load->view('shop/shop-header');	?>	
	   <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                 

            <form role="form" method="POST" action="" enctype="multipart/form-data">
                

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h4 class="m-t-0 header-title">
                            <b>Change Password</b>
                        </h4>
                        <hr>

                       

                        <div class="form-group">
                            <label for="name">Password</label>
				<input type="hidden" id="shopid" value="<?php echo $this->session->userdata['Shopid']; ?>">		

                            <input id="c-password" type="password" class="form-control" name="password" value="" required autofocus>

                        </div>
                        <div class="form-group">
                            <label for="name">Confirm Password </label>

                            <input id="cnfm-password" type="password" class="form-control" name="cpassword" value="" required autofocus>

                        </div>
						           
				
                        <div class="col-md-4 col-md-offset-4">
                            <button id="changepassword" type="button" class="btn btn-primary ">
                                Change Password
                            </button>
							
                        </div>
                    </div>
					<div class="col-md-4"></div>
                </div>
            </form>
        
            </div>
        </div>
    </div>


    <footer class="footer footer-static footer-light navbar-border">
         <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-xs-block d-md-inline-block">
                © 2018 Storkks 
            </span>
        </p>
            
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/unslider-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/horizontal-timeline.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
   

    <script src="<?php echo base_url(); ?>restaurant-assets/js/scripts.js" type="text/javascript"></script>
<script>
 $('#changepassword').click(function(){
	var shopid = $("#shopid").val();
		 var password = $("#c-password").val();
		 var cpassword = $("#cnfm-password").val();
		 if(password==cpassword){
			$.ajax({
			url : "<?php echo site_url('Shop/ChangePasswordbyid');?>",
			method : "POST",
			dataType: 'json',
			data : {shopid: shopid,password:password},
			success: function(data){
				if(data.msg == 1){
					alert('Password Succefully Updated');
					 location.reload();
				}else{
					alert('Enter Fail');
				}
				console.log(data);
			}
		 });
		 }else{
			 alert('Password Not Matched');
		 }
 });
</script>
</body>
</html>