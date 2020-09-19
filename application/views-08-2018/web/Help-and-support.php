<?php $this->view('web/header');
 $cid = $this->session->userdata('customer_id');

$c_name =$this->session->userdata('customer_name');
		 $c_email =$this->session->userdata('customer_email');
		 $c_phone =$this->session->userdata('customer_phone');
		
		 ?>
	 
        
       <div class="page-wrapper">
            <div class="inner-page-hero bg-image" data-image-src="<?php echo base_url(); ?>web-assets/images/profile-banner.jpg" style="background: url(images/profile-banner.jpg) center center / cover no-repeat;">
               <div class="container m-b-10">
                  <div class="row">
                     <div class="col-md-8">
                        <h1 class="font-white">Help & Support</h1>
                        <p class="font-white"><span>Let's take a step ahead and help you better.</span> </p>
                     </div>
                     
                  </div>
               </div>
               <!-- end:Container -->
            </div	>
            <section class="support-sec">
               <div class="container m-t-30">
                  <div class="row">
                     <div class="col-xs-12 bhoechie-tab-container">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                           <div class="list-group">
                            <!-- <?php if(!empty($cid)){
								 $active='';?>
									 <a href="#" class="list-group-item active text-center">
                              Help with orders
                              </a>
								<?php }else{
									 $active='active';
								}
								?>-->
							
                              <a href="#" class="list-group-item text-center active">
                              General Queries
                              </a>
                             
                              <a href="#" class="list-group-item text-center">
                              FAQs
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                           <!-- flight section 
						   <?php if(!empty($cid)){?>
                            <div class="bhoechie-tab-content active">
                              <h5>PAST ORDERS</h5>
							   <?php foreach($orders as $order){ ?>
                              <div class="bg-gray restaurant-entry user-orders m-t-15">
                                 <div class="row">
								 <?php $rid = $order['rid']; 
								  $arid = $order['oredr_address_id']; 
								$CI =& get_instance();
								$sid = $CI->getShops($rid);	
								$adid = $CI->getAddressbyorder($arid);	
								
								
								?>
                                    <div class="col-sm-12 col-md-12 col-lg-7 text-xs-center text-sm-left">
                                       <div class="entry-logo">
                                          <a class="img-fluid" href="#"><img src="<?php echo base_url(); ?>uploads/images/<?php echo $sid['shop_logo'] ?>" alt="Food logo"></a>
                                       </div>
                                     
                                       <div class="entry-dscr">
                                          <h5><a  style="color:red !important;" href="<?php echo base_url('Profile/').$rid; ?>">Restaurant Name:
										  <?php 
								
								echo $sid['name']." - ".$sid['phone']; ?>
										  </a></h5>
                                          <span><?php echo $adid['address']; ?>...</span>
                                          <div>
                                             <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-check"></i> ORDER #<?php echo $order['o_id']; ?></li>
                                                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i>
												<?php  $datee = $order['date_of_order']; 
												
												$date = new DateTime($datee);
											echo $date->format('l, jS, F y, g:i A');	?></li>
                                             </ul>
                                          </div>

                                         
										     
                                          </div>

									   
                                       
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                       <div class="right-content bg-white">
                                          <h5><a >Delivered on <?php echo $date->format('l, jS, F y, g:i A');	?> <i class="fa fa-check-circle" style="color:#60b246" aria-hidden="true"></i></a></h5>
										  
                                       </div>
                                      
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="row new-sec">
                                          <div class="col-sm-12 col-md-12 col-lg-8">
                                            
                                             <div class="m-t-10">
                                                <a href="<?php echo base_url('Products/Reorder_add_to_cart/').$order['o_id']; ?>" type="button" class="btn theme-btn btn-sm">REORDER</a>
                                                
                                             </div>
                                          </div>
                                          <div class="col-sm-12 col-md-12 col-lg-4 text-right">
                                             <span>Total Paid: $<?php echo $order['total']; ?></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                              </div>
							   <?php } ?>
                              
                           </div>
						   <?php }
								?>-->
                           <!-- train section -->
                           <div class="bhoechie-tab-content active">
                              <h5>General Queries</h5>
                              <div class="row m-t-15">
							  <?php  echo $general['content']; ?>
                              </div>
                           </div>
                           <!-- hotel search -->
                           
                           <div class="bhoechie-tab-content">
                              <h5>FAQs</h5>
                             <?php  echo $faq['content']; ?>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="app-section">
               <div class="app-wrap">
                  <div class="container">
                     <div class="row text-img-block text-xs-left">
                        <div class="container">
                           <div class="col-xs-12 col-sm-6  right-image text-center">
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
               <?php $this->view('web/footer');?>
            <!-- end:Footer -->
         </div>
  
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/tether.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/animsition.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/bootstrap-slider.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/jquery.isotope.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/headroom.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/foodpicky.min.js"></script>
     
     	<script type="text/javascript" src="<?php echo base_url(); ?>web-assets/js/notifIt.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>web-assets/js/asidebar.jquery.js"></script>
	

	  <script>
$(document).ready(function(){
$(".forgot").hide();
$(".lfadeout").click(function(){
   $(".loginr").show();
    $(".loginf").hide();
	
    });
$(".lcreate").click(function(){
   
    $(".loginf").show();
	$(".loginr").hide();
	
    });
$(".txt1").click(function(){
   
    $(".forgot").show();
	$(".loginf").hide();
    });

});
</script>	
	  <?php $this->view('web/loginjs-web.php') ?>
	  
      <script>
         $(document).ready(function() {
          $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
              e.preventDefault();
              $(this).siblings('a.active').removeClass("active");
              $(this).addClass("active");
              var index = $(this).index();
              $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
              $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
          });
         });
      </script>
     
   
   
     <?php $this->view('web/location-web-js') ?>


  <?php //$this->view('web/edit-address-web.php') ?>
   </body>
</html>