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
                            <h4 class="card-title">Customer</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <!-- <li><a href="https://foodie.deliveryventure.com/admin/transporters/create" class="btn btn-primary add-btn btn-darken-3">Add Delivery People</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block card-dashboard table-responsive">
                    <table class="table table-striped table-bordered file-export">
                        <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Contact Details</th>
                               <!-- <th>Rating</th>-->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                                            <?php $i= 1;
										foreach($pages as $p){ ?>
										<tr>
                                                     <td><?php echo $i; ?></td>
                                                    <td><?php echo $p['first_name']; ?></td>
                                                    <td><?php echo $p['email']; ?></td>
                                    <td>
                                         
                 <img src="<?php echo base_url(); ?>uploads/images/<?php echo $p['profile_image']; ?>" width="50px" height="50">
                                                                            </td>
                                    <td><?php echo $p['phone']; ?></td>
                                    <!--<td class="star">
                                        <input type="hidden" class="rating" readonly value="3"/>
                                    </td>-->
                                    <td>
                                     <a href="EditUser/<?php echo $p['id']; ?>" class="table-btn btn btn-icon btn-success"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="UserDelete/<?php echo $p['id']; ?>" class="table-btn btn btn-icon btn-danger"><i class="fa fa-trash-o"></i></a>
                                                                           
                                                                                
                                    </td>
                                </tr>
                                                            
                                                           
                                                         <?php $i++; } ?></tbody>
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