<?php $this->view('web/header') ?>

      <div class="page-wrapper">
            
            <div class="inner-page-hero bg-image space-md" data-image-src="<?php echo base_url(); ?>web-assets/images/profile-banner.jpg">
               <div class="container text-xs-center m-b-20">
                  <h1 class="font-white">Order Status</h1>
                  <p class="font-white">Find restaurants, specials, and coupons for free</p>
               </div>
            </div>
            <!-- end:Inner page hero -->
            <div class="pricing-page">
               <div class="container">
                  <div class="row">
                     <div class="col-md-5 offset-md-1 col-sm-6">
					
                        <div class="pricing-box">
						 <h2>Awaiting Confirmation</h2>
                           <div class="container">
			<div id="countdown"></div>
			
		</div>
		<p>Your Order ID is #77</p>
                           
                           
                        </div>
                     </div>
					  <?php if(!empty($checkout)){ foreach ($checkout as $items) { $rids = $this->Restaurant->getproducts( $items['itemid']);  
 $shopdetails = $this->Restaurant->getShopRows( $items['rid']);
$rdiscount = $shopdetails['discount'];
$rmin = $shopdetails['estimated_delivery_time'];
}}else{
	 $rids['restaurant_id']='';
 }
 
 ?><?php  $totalbl = 0; 
					  $gst = $charges['gst']; 
					  
								 
								 $delverc = $charges['delivery_charges']; ?>
                     <div class="col-md-5 col-sm-6">
                        <div class="pricing-box">
                           
                           <h2>Your order details</h2>
                           <ul class="order-d">
						   							   <?php  foreach ($checkout as $items) { ?>
                              <li id="item_adiv_<?php echo $items['itemid'];?>"><?php echo $items['itemid']; ?>
							  <span id="afterprice" class="pull-right"><span id="qntyorder_<?php echo $items['itemid'];?>"><?php echo $items['qty'];?> </span> X  <span>$ <?php 
							  $orderitemprice = $items['item_price']; 
							  echo number_format($orderitemprice,2)?></span></li>
                             
													   <?php
													   $totalbl+= $orderitemprice *  $items['qty'];
													   } ?>
                           </ul>
						   <ul class="tax-sec">
                              <li>Total <span class="pull-right">$ 
							  <span id="atoatalprice" ><?php echo number_format($totalbl,2);?></span></span>
							  </li>
                              <li>Offer Discount <span class="pull-right">- $ <span id="as-dicount" ><?php 
									   if(empty($rdiscount)){
										   
										   $rdis = $totalbl;
										   $valueprice = '';
									   }else{
										  $rdis  = ($rdiscount / 100) * $totalbl;
										  $valueprice = $totalbl - $rdis;
									   }
									  echo number_format($rdis,2);?>
									  </span></span></li>
                              <?php $cdsct = $this->session->userdata('cupon_discount');
									if(!empty($cdsct)){?>
							 <li>Coupon Discount 
							 <?php  $cupontype = $this->session->userdata('cupon_type');
									if($cupontype == 'percent'){
									$dis = ($cdsct / 100) * $valueprice;
									}else{$dis =$cdsct; }
									?>
							 <span class="pull-right">- $ <span id="dis">
									   <?php  echo number_format($dis,2); ?></span></li>
							 <?php }else{
										$dis='';
									} ?>
                              <li>Delivery Charges <span class="pull-right">$ <span id="adeliverc"><?php  echo number_format($delverc,2); ?></span></span></li>
                              <li>GST<span class="pull-right"> <?php 
									$subtotal = $delverc + $valueprice - $dis;
									$gstpersentage = ($gst / 100) * $subtotal; ?>$ <span id="agstprc"><?php  echo number_format($gstpersentage,2); ?></span></span></li>
                              
                              <li class="total-a"><b>To Pay <span class="pull-right"><strong>$ <span id="aordertotal" ><?php $topay = $valueprice+$delverc+$gstpersentage-$dis;
									    echo number_format($topay,2);
									   ?></span></strong></span></b> </li>
                              
                           </ul>
                           
								 
						   
                           
                          
                        </div>
                     </div>
                  </div>
                                   
               </div>
               <!-- end:Container -->
            </div>

            <section class="app-section">
               <div class="app-wrap">
                  <div class="container">
                     <div class="row text-img-block text-xs-left">
                        <div class="container">
                           <div class="col-xs-12 col-sm-6 hidden-xs-down right-image text-center">
                              <figure> <img src="<?php echo base_url(); ?>web-assets/images/app.png" alt="Right Image"> </figure>
                           </div>
                           <div class="col-xs-12 col-sm-6 left-text">
                              <h3>The Best Food Delivery App</h3>
                              <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery &amp; Takeout App.</p>
                              <div class="social-btns">
                                 <a href="#" class="app-btn apple-button clearfix">
                                    <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                    <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                 </a>
                                 <a href="#" class="app-btn android-button clearfix">
                                    <div class="pull-left"><i class="fa fa-android"></i> </div>
                                    <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- start: FOOTER -->
          <?php $this->view('web/footer'); ?>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
      <!-- Modal -->
     
    <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php echo base_url(); ?>web-assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>web-assets/js/jquery.countdown360.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/headroom.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/foodpicky.min.js"></script>
	<script type="text/javascript" charset="utf-8">

		 	var countdown =  $("#countdown").countdown360({
       	 	radius      : 100,
         	seconds     : 160,
         	fontColor   : '#FFFFFF',
         	autostart   : true,
         	onComplete  : function () { console.log('done') }
		   });
			countdown.start();
			console.log('countdown360 ',countdown);
		 	$(document).on("click","button",function(e){
		 		e.preventDefault();
		 		var type = $(this).attr("data-type");
		 		if(type === "time-remaining")
		 		{
		 			var timeRemaining = countdown.getTimeRemaining();
		 			alert(timeRemaining);
		 		}
		 		else
		 		{
		 			var timeElapsed = countdown.getElapsedTime();
		 			alert(timeElapsed);
		 		}
		 	});
		  </script>
</body>
<style>
.order-d li{
     border-bottom: 1px solid #ccc;
      padding: 8px 0;
}
.tax-sec li{
 padding:0px ;
}
.total-a{
     padding-top: 10px !important;
}
</style>
</html>