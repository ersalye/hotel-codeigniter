	   <?php  $this->load->view('shop/shop-header');	?>	
	   <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                 <div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">

            <form role="form" method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="sp3cFNsmDM2QZx9dssMS79Iv2O04uVUu5drQZB9s">

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="m-t-0 header-title">
                            <b>Create Addon</b>
                        </h4>
                        <hr>

                        <div class="form-group">
                            <label for="category">Shop Name</label>

                            
                                
                    <p><?php echo $this->session->userdata['Shopname']; ?></p>
                   <input type="hidden" value="<?php echo $this->session->userdata['Shopid']; ?>" name="shop_id" />
                   <input type="hidden" value="<?php echo $this->session->userdata['Shopname']; ?>" name="shop_name" />
                                    
                                
                            
                                                    </div>

                        <div class="form-group">
                            <label for="name">Name</label>

                            <input id="name" type="text" class="form-control" name="name" value="<?php if (!empty($addons)){echo $addons['addon_name']; }?>" required autofocus>

                        </div>
						                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        
					<?php if (!empty($addons)){ ?>
                    <option value="Active" <?=$addons['status'] == 'Active' ? ' selected="selected"' : '';?>>Active</option>
                    <option value="Inactive" <?=$addons['status'] == 'Inactive' ? ' selected="selected"' : '';?>>Inactive</option>
					<?php  } else{ ?>
                   <option value="Active">Active</option>
                   <option value="Inactive">Inactive</option>
					 <?php } ?>		
                    </select>
				</div>
				
                        <div class="col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                Save
                            </button>
                        </div>
                    </div>
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
    <script src="<?php echo base_url(); ?>restaurant-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/unslider-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/horizontal-timeline.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
        <!-- BEGIN STACK JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/app-menu.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/customizer.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jszip.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/pdfmake.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/vfs_fonts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jquery.raty.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/datatable-advanced.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/star.rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/froala_editor.pkgd.min.js" type="text/javascript"></script>
    <!-- END STACK JS-->

        
     <!-- BEGIN PAGE LEVEL JS-->
   
    <script type="text/javascript">
        //var data = "[{&quot;month&quot;:&quot;2018-01&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-02&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-03&quot;,&quot;delivered&quot;:&quot;21&quot;,&quot;cancelled&quot;:&quot;11&quot;},{&quot;month&quot;:&quot;2018-04&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-05&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-06&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-07&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-08&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-09&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-10&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-11&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-12&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;}]";
        var data = [ 
                        {
                month: "2018-01",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-02",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-03",  delivered: 21, cancelled: 11
            },
                        {
                month: "2018-04",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-05",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-06",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-07",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-08",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-09",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-10",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-11",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-12",  delivered: 0, cancelled: 0
            },
                    ];
    </script>
     <script src="<?php echo base_url(); ?>restaurant-assets/js/dashboard-ecommerce.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>restaurant-assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>