<?php  $this->load->view('adminheader');	?>
       <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                <div class="card">
    <div class="card-header">
        <h3 class="card-title">Add Notice</h3>
    </div>
	<style>
                     .req{
                     color:red;
                     }
                  </style>
    <div class="card-body collapse in">
        <div class="card-block">
            <form class="form-horizontal" role="form" method="POST" action="https://foodie.deliveryventure.com/admin/notice" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="buTLZNJzsr6HBfZ1HgjODgsA76oFNhoK9aCinzri">
                
                <div class="form-group col-xs-12 mb-2">
                    <label for="name">Title <span class="req">*</span></label>
                    <input type="text" id="title"  class="form-control "  name="title"/>
                                        </div>
										<div class="form-group col-xs-12 mb-2">
                    <label>Categories</label>
                    <select class="form-control">
                        <option>Choose Category</option>
                                                    <option value="2">Noah Demo</option>
                                                    <option value="3">Raj</option>
                                                    
                                                   
                                            </select>
                </div>
                <div class="form-group col-xs-12 mb-2">
                    <label for="name">Short Notes <span class="req">*</span></label>
                    <input type="text" class="form-control "  name="note" value="" />

                </div>
                <div class="form-group col-xs-12 mb-2">
                    <label for="name">Content <span class="req">*</span></label>
                    <input type="text"  class="form-control "  name="note" value="" />
                </div>
				<div class="form-group col-xs-12">
                                    <label for="avatar">Image <span class="req">*</span></label>
                                    <input type="file" accept="image/*" name="avatar" class="dropify" id="avatar" aria-describedby="fileHelp">
                                 </div>
								 <div class="form-group col-xs-12 mb-2">
                    <label>Categories</label>
								  <select class="form-control">
                        <option>Yes</option>
                                                    <option value="2">No</option>
                                                   
                                            </select>
											</div>
                <div class="col-xs-12 mb-2">
                    <a href="#" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check-square-o"></i> Save
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
      <script src="<?php echo base_url(); ?>admin-assets/js/dashboard-ecommerce.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>admin-assets/js/scripts.js" type="text/javascript"></script>
   </body>
</html>