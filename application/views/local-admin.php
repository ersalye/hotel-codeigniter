<?php  $this->load->view('adminheader');	?>
     <div class="app-content content container-fluid">
         <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Local Settings</h3>
                  </div>
                  <style>
                     .req{
                     color:red;
                     }
                  </style>
                  <div class="card-body collapse in">
                     <div class="card-block">
                        <form class="form-horizontal" role="form" method="POST" action="https://foodie.deliveryventure.com/admin/banner" enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="buTLZNJzsr6HBfZ1HgjODgsA76oFNhoK9aCinzri">
                           <div class="form-group col-xs-12 mb-2">
                              <label for="name">Country <span class="req">*</span></label>
                              <select id="shop_id" name="shop_id" class="form-control" required>
                                 <option value="">Choose Country</option>
                                 <option value="2">India</option>
                                 <option value="3">USA</option>
                                 <option value="15">Australia</option>
                                 <option value="20">Malaysia</option>
                              </select>
                           </div>
                           <div class="form-group col-xs-12 mb-2">
                              <label for="name">City <span class="req">*</span></label>
                              <select id="product_id" name="product_id" class="form-control" required>
                                 <option value="">Choose City</option>
                              </select>
                           </div>
                           <div class="form-group col-xs-12 mb-2">
                              <label for="name">Language <span class="req">*</span></label>
                              <select id="status" name="status" class="form-control">
                                 <option>Choose Language</option>
                                 <option>English</option>
                                 <option>Hindi</option>
                              </select>
                           </div>
                           <div class="form-group col-xs-12  mb-2">
                              <label for="name">Currency <span class="req">*</span></label>
                              <select id="position" name="position" class="form-control">
                                 <option value="0">Choose Currency</option>
                                 <option>Rupee</option>
                                 <option>Dollar</option>
                              </select>
                           </div>
                           <div class="form-group col-xs-12 row">
                              <label for="parent_id" class="col-md-4">Currency side at <span class="req">*</span></label>
                              <label class="radio-inline col-md-4">
                              <input type="radio" value="0" checked="" name="pure_veg"> Left
                              </label>
                              <label class="radio-inline col-md-4">
                              <input type="radio" value="1" name="pure_veg"> Right
                              </label>
                           </div>
                           <div class="form-group col-xs-12 mb-2">
                              <label for="name">Weight Class <span class="req">*</span></label>
                              <select id="position" name="position" class="form-control">
                                 <option value="0">Choose Weight Class</option>
                                 <option>Kilogram</option>
                                 <option></option>
                              </select>
                           </div>
                           <div class="col-xs-12 mb-2">
                              <a href="#" class="btn btn-warning mr-1">
                              <i class="ft-x"></i> Cancel
                              </a>
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
    <script>
    var resizefunc = [];
    </script>

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