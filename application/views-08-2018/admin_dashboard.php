 <?php  $this->load->view('adminheader');	?>
	<div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
			<style>
			.card .media-body h5{
			font-size:14px;
			}
			.my-c .card-body .p-1{
			    padding:13px 5px 13px 10px !important;
			}
			</style>
            <div class="content-body">
                                 <!-- Stats -->
                <div class="row">
				<div class="col-xl-1"></div>
                    <div class="col-xl-2 col-lg-6 col-xs-12">
                        <div class="card my-c">
                            <div class="card-body">
                              <a href="<?php echo site_url('Admin/Users');?>" >  <div class="media">
                                    <div class="p-1 text-xs-center box-primary bg-primary bg-darken-2 media-left media-middle" style="background-color: #ff6d00 !important;">
                                        <i class="fa fa-users font-large-1 white"></i>
                                    </div>
                                    <div class="p-1 text-xs-center bg-gradient-x-primary white media-body">
                                        <h5> Users </h5>
                                        <h5 class="text-bold-400"><i class="ft-plus"></i> <?php echo count($users); ?></h5>
                                    </div>
									
                                </div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-xs-12">
                        <div class="card my-c">
                           <a href="<?php echo site_url('Admin/shops');?>" >  <div class="card-body">
                                <div class="media">
                                    <div class="p-1 text-xs-center bg-danger bg-darken-2 media-left media-middle">
                                        <i class="fa fa-cutlery font-large-1 white"></i>
                                    </div>
                                    <div class="p-1 text-xs-center bg-gradient-x-danger white media-body">
                                        <h5>Restaurants</h5>
                                        <h5 class="text-bold-400"><i class="ft-plus"></i>
										<?php echo count($shops); ?></h5>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-xs-12">
                        <div class="card my-c">
						<a href="<?php echo site_url('Admin/DeliveryPeople');?>" > 
						
                            <div class="card-body">
                                <div class="media">
                                    <div class="p-1 text-xs-center bg-warning bg-darken-2 media-left media-middle">
                                        <i class="fa fa-car font-large-1 white"></i>
                                    </div>
                                    <div class="p-1 text-xs-center bg-gradient-x-warning white media-body">
                                        <h5>Drivers</h5>
                                        <h5 class="text-bold-400"><i class="ft-plus"></i> <?php echo count($deliverie_people); ?></h5>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-xs-12">
                        <div class="card my-c">
                            <div class="card-body">
                                <div class="media">
                                    <div class="p-1 text-xs-center bg-success bg-darken-2 media-left media-middle">
                                        <i class="fa fa-list-alt font-large-1 white"></i>
                                    </div>
                                    <div class="p-1 text-xs-center bg-gradient-x-success white media-body">
                                        <h5>Orders</h5>
                                        <h5 class="text-bold-400"><i class="ft-plus"></i> <?php echo count($orders); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-6 col-xs-12">
                        <div class="card my-c">
                            <div class="card-body">
                                <div class="media">
                                    <div class="p-1 text-xs-center bg-success bg-darken-2 media-left media-middle">
                                        <i class="icon-wallet font-large-1 white"></i>
                                    </div>
                                    <div class="p-1 text-xs-center bg-gradient-x-success white media-body">
                                        <h5>Payments</h5>
                                        <h5 class="text-bold-400"><i class="ft-plus"></i> 20000</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-1"></div>
                </div>
                <!--/ Stats -->
				 <!--Recent Orders & Monthly Salse -->
                <div class="row match-height">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Orders</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <!--<div class="card-block ">
                                    <p>Total paid invoices <span>$240</span>, unpaid <span>$150</span>. <span class="float-xs-right"><a href="#" >Invoice Summary <i class="ft-arrow-right"></i></a></span></p>
                                </div>-->
                                 
                <div class="card-block card-dashboard table-responsive">
                    <table class="table table-striped table-bordered file-export">
                                        <thead>
                                            <tr>
                                                <th>S. No</th>
                                                <th>Order number</th>
                                                <th>Customer Name</th>
                                                <th>Restaurant/ phone number</th>
                                                <th>Delivery person</th>
                                                <th>Delivery adress</th>
                                                <th>Order Status </th>
                                                <th>Amount </th>
                                                <th>Payment Status </th>
                                                <th>User Note </th>
                                            </tr>
                                        </thead>
                                        <tbody>
										
										 <?php $i= 1; foreach($orders as $o){ ?>
								<tr>
									<td><?php echo $i; ?></td>
								<td class="text-truncate"><?php echo $o['o_id']; ?></td>
								<td class="text-truncate"><?php
								$rid = $o['u_id']; 
								$CI =& get_instance();
								$fid = $CI->getcustomer($rid);	
								echo $fid['first_name']; ?></td>
								<td class="text-truncate"><?php 
								$rid = $o['rid']; 
								$CI =& get_instance();
								$sid = $CI->getShops($rid);	
								echo $sid['name']." - ".$sid['phone'];


								?></td>
								<td class="text-truncate"><?php echo $o['delivery_person']; 
								if(empty($o['delivery_person'])){
									echo "<div class='danger'>Not Alloted</div>";
								}?></td>
                               <td class="text-truncate"><?php echo $o['oredr_address_id'];
							   $rid = $o['oredr_address_id']; 
												$CI =& get_instance();
												$fidd = $CI->getAddress_byid($rid);
												//print_r($fidd);
												echo $fidd['address'];

												?></td>
                                                <td class="text-truncate"><span class="tag tag-default tag-success">Order accepted</span></td>
												<td class="text-truncate">$ <?php echo $o['total']; ?></td>
                                                <td class="text-truncate">COD</td>
                                                <td class="text-truncate"><?php echo $o['notetext']; ?></td>
                                                
                                           <?php $i++; } ?>
                                                                                        
                                                                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Recent Orders & Monthly Salse -->
                <!--Product sale & buyers -->
                <div class="row match-height">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Products Sales</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <div id="products-sales" class="height-300"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!--/ Product sale & buyers -->
               
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
   
    <!-- END STACK JS-->
    <!-- END STACK JS-->
        
     <!-- BEGIN PAGE LEVEL JS-->
   
   
     <script src="<?php echo base_url(); ?>admin-assets/js/dashboard-ecommerce.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>admin-assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>