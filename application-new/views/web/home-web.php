<?php $this->view('web/header'); ?>
         <!-- banner part starts -->
         <section class="hero bg-image" data-image-src="<?php echo base_url(); ?>web-assets/images/image01.jpg" style="background: url(<?php echo base_url(); ?>web-assets/images/image01.jpg) center center / cover no-repeat;">
            <div class="hero-inner">
               <div class="container text-center hero-text font-white">
                  <h1>Get your favourite food delivered by storkks</h1>
                  <h5 class="font-white space-xs">Find restaurants near you</h5>
                  <div class="banner-form">
                      <form class="form-inline" action="<?php echo base_url('Restaurants'); ?>">
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputAmount">Enter your delivery location</label>
                           <div class="locate-sec">
                              <a href="#" id="locatme" class="locate"><i class="fa fa-compass" aria-hidden="true"></i> Locate Me </a>
                              <input type="text" name="city" class="form-control form-control-lg" id="city" placeholder="Enter your delivery location">
                           </div>
                        </div>
                        <div class="form-group">
                           <button class="btn theme-btn btn-lg">Search food</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!--end:Hero inner -->
         </section>
         <!-- banner part ends -->
         <!-- How it works block starts -->
         <section class="how-it-works">
            <div class="container">
               <div class="text-xs-center">
                  <h2>Easy 3 Step Order</h2>
				  <?php // phpinfo(); ?>
                  <!-- 3 block sections starts -->
                  <div class="row how-it-works-solution">
                     <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col1">
                        <div class="how-it-works-wrap">
                           <div class="step step-1">
                              <div class="icon" data-step="1">
                                 <img src="<?php echo base_url(); ?>web-assets/images/place-order.png">
                              </div>
                              <h3>Place your order</h3>
                              <p>Order from various restaurants and choose your favourite food for delivery</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col2">
                        <div class="step step-2">
                           <div class="icon" data-step="2">
                              <img src="<?php echo base_url(); ?>web-assets/images/order-track.png">
                           </div>
                           <h3>Live order Tracking</h3>
                           <p>Live track your order from restaurant until it reaches to your door step</p>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col3">
                        <div class="step step-3">
                           <div class="icon" data-step="3">
                              <img src="<?php echo base_url(); ?>web-assets/images/delivery.png">
                           </div>
                           <h3>Fast & Prompt Delivery</h3>
                           <p>Food you love will be delivered fresh and on time</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- 3 block sections ends -->
            </div>
         </section>
         <!-- How it works block ends -->
         <section class="app-section">
            <div class="app-wrap">
               <div class="container">
                  <div class="row text-img-block text-xs-left">
                     <div class="container">
                        <div class="col-xs-12 col-sm-5 right-image text-center">
                           <figure> <img src="<?php echo base_url(); ?>web-assets/images/app.png" alt="Right Image" class="img-fluid"> </figure>
                        </div>
                        <div class="col-xs-12 col-sm-7 left-text">
                           <h3>Storkks Now in your hand</h3>
                           <p>Download! To get this app for fast and easy way to deliver</p>
                           <div class="social-btns">
                              <a href="#" class="app-btn apple-button clearfix">
                                 <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                 <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                              </a>
                              <a href="#" class="app-btn android-button clearfix">
                                 <div class="pull-left"><i class="fa fa-play" aria-hidden="true"></i> </div>
                                 <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Google Play</span> </div>
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
      <!--/end:Site wrapper -->
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <script src="<?php echo base_url(); ?>web-assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/tether.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/animsition.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/bootstrap-slider.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/jquery.isotope.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/headroom.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/foodpicky.min.js"></script>

      <script type="text/javascript" src="<?php echo base_url(); ?>web-assets/js/asidebar.jquery.js"></script>
	  	 
	  <script>
$(document).ready(function(){

$(".lfadeout").click(function(){
   $(".loginr").show();
    $(".loginf").hide();
    });
$(".lcreate").click(function(){
   
    $(".loginf").show();
	$(".loginr").hide();
    });
});
</script>
	  <?php $this->view('web/loginjs-web.php') ?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<script>
$(document).ready(function(){
    $("#locatme").click(function(){
       $.get("https://ipinfo.io/json", function (response) {
    $("#ip").val(response.ip);
    $("#city").val(response.city);

}, "jsonp");
    });
});


</script>
	  
   </body>
</html>