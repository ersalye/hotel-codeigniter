<?php  $this->load->view('adminheader');	?>
        <div class="app-content content container-fluid">
         <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Social Media</h3>
                  </div>
                  <style>
                     .req{
                     color:red;
                     }
                  </style>
                  <div class="card-body collapse in">
                     <div class="card-block">
                        <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                           <div class="form-group">
                            <label for="name">GST <span class="req">*</span></label>

                            <input type="text" class="form-control" name="gst" value="<?php  echo $charges['gst']; ?>" required="" autofocus="">

                           </div>
                           <div class="form-group">
                            <label for="name">Delivery Charges <span class="req">*</span></label>

                            <input  type="text" class="form-control" name="delivery" value="<?php  echo $charges['delivery_charges']; ?>" required="" autofocus="">

                           </div>
						  
						   
                           
                           <div>
                              
                              <button type="submit" class="btn btn-primary">
                              <i class="fa fa-check-square-o"></i> Update
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
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
    <script src="<?php echo base_url(); ?>admin-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>admin-assets/js/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/unslider-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/horizontal-timeline.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
        <!-- BEGIN STACK JS-->
    <script src="<?php echo base_url(); ?>admin-assets/js/app-menu.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/customizer.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/jszip.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/pdfmake.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/vfs_fonts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/jquery.raty.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/datatable-advanced.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/star.rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/froala_editor.pkgd.min.js" type="text/javascript"></script>
    <!-- END STACK JS-->
        
     <!-- BEGIN PAGE LEVEL JS-->
   
    

    <script src="<?php echo base_url(); ?>admin-assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>