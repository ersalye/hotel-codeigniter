	  <?php  $this->load->view('adminheader');	?>
	  <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                
<!-- File export table -->
<div class="row file">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                            <div class="col-md-12" style="height:50px;color:red;">
                
               </div>
                            <h4 class="card-title">Partners</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block card-dashboard table-responsive">
                    <table class="table table-striped table-bordered file-export">
                        <thead>
                            <tr>
                               <!--  <th>Sl.No</th> -->
                                <th>S. no</th>
                                <th>Name</th>
                                <th>phone</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Num Locations</th>
                                <th>Cuisine Type</th>
                                <th>Weekly Orders</th>
                                <th>Offer Delivery</th>
                            </tr>
                        </thead>
                        <tbo  <tbody>
						<?php 
										$i= 1;
										foreach($Partners as $p){ ?>
                                                            <tr>
                                    <!-- <td>19</td> -->
									<td><?php echo $i; ?></td>
                                    <td><?php echo $p['title']; ?></td>
                                    <td><?php echo $p['phone']; ?></td>
                                    <td><?php echo $p['email']; ?></td>
                                    <td><?php echo $p['first_name']; ?></td>
                                    <td><?php echo $p['num_locations']; ?></td>
                                    <td><?php echo $p['cuisine_type']; ?></td>
                                    <td><?php echo $p['weekly_orders']; ?></td>
                                    <td><?php echo $p['offer_delivery']; ?></td>
                                  
                                </tr><?php $i++; } ?>
                                                            
                                                            
                                                    </tbody>
                    </table>
                </div>
            </div>
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
        
   
     <script src="<?php echo base_url(); ?>admin-assets/js/dashboard-ecommerce.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>admin-assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>