 <?php  $this->load->view('shop/shop-header');	?>	
 <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
			<?php
	if(empty($_GET['start'])){
							$begin = new DateTime('2018-07-01');
							}else{
								$begin = new DateTime($_GET['start']);
							}
							
							if(empty($_GET['end'])){
							$end = new DateTime(date('Y-m-d h:i:sa'));
							}else{
								$end = new DateTime($_GET['end']);
							}			
							?>
            <div class="content-body">
                                 <!-- File export table -->
                <div class="row file">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                                            <h4 class="card-title">Payments information </h4>
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
                                                <th>S.No</th>
                                                <th >Restaurant</th>
                                                <th>Order no</th>
                                                <th>Sale</th>
                                                <th>Tax</th>
                                                <th>Total</th>
                                                <th>Storkks Fee</th>
                                                <th>Net Payout</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                       <?php  
						
							

							$interval = DateInterval::createFromDateString('1 day');
							$period = new DatePeriod($begin, $interval, $end);
							$period= array_reverse(iterator_to_array($period));

							$i=1; 
							$ttax='';
							$tsale='';
							$ttotalpy='';
							$tstorkksfee='';
							$tnetpay='';
							foreach($orders_details as $dt) {
								
							?>
								<tr>
										<td><?php  echo $i; ?></td>
										<td><?php 
										$rid = $dt['rid']; 
								$CI =& get_instance();
								$sid = $CI->getShops($rid);	
								echo $sid['name'];?></td>
										<td><a href="<?php echo base_url('Shop/Order_detail/').$dt['o_id']; ?>"><?php  echo $dt['o_id']; ?></a></td>
										<td><?php  $tax =(20/100)*$dt['total'];
										echo $sale=$dt['total']-$tax; ?></td>
										<td><?php  echo $tax; ?></td>
										<td><?php  echo $totalpy = $dt['total']; ?></td>
										<td><?php  echo $storkksfee = $dt['storkksfee']; ?></td>
										
										<td><?php echo $netpay = number_format($dt['total']-($dt['storkksfee']+$tax+$dt['cupon_discount']),2); ?></td>
										
                                                    
                                </tr>
												  <?php 
												 $i++; 
											$tsale +=$sale;
											$ttax +=$tax;
											$ttotalpy +=$totalpy;
											$tstorkksfee +=$storkksfee;
											$tnetpay +=$netpay;

												 } ?>
									<tr>
                                                <th>Total</th>
                                                <th ><?php if (!empty($_GET)){ 
										$rid = $_GET['rid']; 
								$CI =& get_instance();
								$sid = $CI->getShops($rid);	
								echo $sid['name'];
												}?></th>
                                                <th><?php echo $i-1; ?></th>
                                                <th><?php echo $tsale; ?></th>
                                                <th><?php echo $ttax; ?></th>
                                                <th><?php echo $ttotalpy; ?></th>
                                                <th><?php echo $tstorkksfee; ?></th>
                                                <th><?php echo $tnetpay; ?></th>
                                                
                                               
                                                
                                            </tr>			
                                                                                            
                                                                                            
                                                                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- File export table -->


                 <!-- Menu List Modal Starts -->
   
    <!-- Menu List Modal Ends -->
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
    <script src="<?php echo base_url(); ?>admin-assets/js/froala_editor.pkgd.min.js" type="text/javascript"></script>
    <!-- END STACK JS-->
    <script src="<?php echo base_url(); ?>admin-assets/js/scripts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

</body>
</html>