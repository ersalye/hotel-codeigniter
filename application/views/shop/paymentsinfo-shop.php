 <?php  $this->load->view('Shop/shop-header');	?>	
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
                                                            <h4 class="card-title">Payments information</h4>
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
							<div class="row">
							<form>
        <div class='col-sm-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='date' data-date-format="YYYY-MM-DD" value="<?php if (!empty($_GET)){ echo $_GET['start']; }?>" name="start" class="datepicker form-control" />
                   
                    
                </div>
            </div>
        </div> 
		<div class='col-sm-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                  <input type='date'  name="end" class="form-control" value="<?php if (!empty($_GET)){ echo $_GET['end']; }?>" placeholder="By Restaurant"/>
			
                </div>
            </div>
        </div>
		
		<div class='col-sm-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                  <input type='submit' name="search" class="btn btn-primary" />
                  	
				  <a href="<?php echo base_url('Shop/Paymentinfo/'); ?>" class="btn btn-danger">Reset</a>
                </div>
            </div>
        </div>
		</form>
    </div>
                                <div class="card-block card-dashboard table-responsive">
								
                                    <table class="table table-striped table-bordered file-export">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th >Day</th>
                                                <th>Orders</th>
                                               <!-- <th>Sale</th>-->
											   <th>Total Sale</th>
											   <th>Storkks Fee</th>
                                                <th>Tax</th>
                                                <th>Net Payout</th>
                                                <th>Status</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                       <?php  
						
							

							$interval = DateInterval::createFromDateString('1 day');
							$period = new DatePeriod($begin, $interval, $end);
							$period= array_reverse(iterator_to_array($period));

							$i=1; 
							foreach($period as $dt) {
								$orders_de = $this->Restaurant->getOrdersbiday($dt->format("Y-m-d"));
							  //print_r($orders_de);
							  $itemstotal ='';
							  $totalsale ='';
							  $gst ='';
							  $storkksfee ='';
							  $storkksoffer ='';
							foreach($orders_de as $dft) {
								$itemstotal += $dft['items_total'];
								$totalsale += $dft['total'];
								$gst += $dft['gst'];
								$storkksfee += $dft['storkksfee'];
								$storkksoffer += $dft['cupon_discount'];
							}
							$tax = (20/100)*$totalsale;
							?>
								<tr>
										<td><?php  echo $i; ?></td>
										<td><a href="<?php echo base_url('Shop/Paymentsinfoday/').$dt->format("Y-m-d"); ?>"><?php  echo $dt->format("Y-m-d"); ?></a></td>
										<td><?php echo count($orders_de); ?></td>
										<td><?php echo $totalsale; ?></td>
										<td><?php echo $storkksfee; ?></td>
										<!--<td><?php echo number_format($totalsale-$storkksfee,2); ?></td>-->
										<td><?php echo number_format($tax,2); ?></td>
										
										
						<!--<td><?php echo number_format($totalsale-$storkksfee-$tax+$storkksoffer,2); ?></td>-->
						<td><?php echo number_format($totalsale-$storkksfee,2); ?></td>
						<td><?php if(count($orders_de)!=0){echo "Pending";} ?></td>
										
                                                    
                                </tr>
												  <?php 
												 $i++;  } ?>
												
                                                                                            
                                                                                            
                                                                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- File export table -->


                 <!-- Menu List Modal Starts -->
    <div class="modal fade text-xs-left" id="menu-list">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h2 class="modal-title" id="myModalLabel1">Menu List</h2>
                </div>
                <div class="modal-body">
                    <div class="row m-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="bg-img order-img" style="background-image: url(../assets/img/product-1.jpg);"></div>
                                        </th>
                                        <td>Burger Bistro</td>
                                        <td>$100</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
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
	<script>
(function ($) {
    $.extend({
        playSound: function () {
            return $(
                   '<audio class="sound-player" autoplay="autoplay" style="display:none;">'
                     + '<source src="' + arguments[0] + '" />'
                     + '<embed src="' + arguments[0] + '" hidden="true" autostart="true" loop="false"/>'
                   + '</audio>'
                 ).appendTo('body');
        },
        stopSound: function () {
            $(".sound-player").remove();
        }
    });
})(jQuery);
 window.setTimeout(update, 1000);
function update(){

  var Url = '<?php echo site_url('Shop/Orderscount/');?>';
  var Urlsegment = '<?php echo $this->uri->segment(2);?>';
  var count = $("#tot_incom_order").text();
 
$.ajax({
                url : Url,
                method : "POST",
				dataType:"json",   
				success: function(data){
			
				 window.setTimeout(update, 1000);
				 
				 if(count>0 && Urlsegment!='dashboard'){ 
				 window.location.replace("<?php echo base_url('Shop/dashboard'); ?>");
				 }
				 if(count>0){
					  $.playSound('<?php echo base_url('Yamaha.wav'); ?>');
				 }
				 if(count != data.shoporders){
					 
				location.reload();
				 }
				console.log(data.shoporders);
				console.log(data.orders);
				 $("#tot_incom_order").html(data.shoporders);
   
                },
    error: function(){
      		console.log("loading data failed");
    }
            });
}
$(document).ready(function(){
    var Url = '<?php echo site_url('Shop/Orderscountnew/');?>';
  
$.ajax({
                url : Url,
                method : "POST",
				dataType:"json",   
				success: function(data){
			
				 window.setTimeout(update, 1000);
				 
				console.log(data.shoporders);
				console.log(data.orders);
				 $("#tot_incom_order").html(data.shoporders);
   
                },
    error: function(){
      		console.log("loading data failed");
    }
            });
});
</script>  

</body>
</html>