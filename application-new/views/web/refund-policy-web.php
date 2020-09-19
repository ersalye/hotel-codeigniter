<?php $this->view('web/header'); ?>
      <div class="page-wrapper">
            
            <!-- start: Inner page hero -->
            <section class="bg-image space-md" data-image-src="<?php echo base_url(); ?>web-assets/images/profile-banner.jpg">
               <div class="profile">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12  col-lg-12 text-center">
                                <h1 class="font-white text-center">Cancellations and Refunds</h1> 
								</div>
                        
                     </div>
                  </div>
               </div>
            </section>
            <!-- end:Inner page hero -->
            
           <section class="food__about__us__area section-padding--lg bg--white  static">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content">
            
                        <ol type="1">
                            <li><p><u>Cancellation</u></p>
                            <ol type="i">
                                <li><p>As a general rule you shall not be entitled to cancel your order once you have received confirmation of the same. If you cancel your order after it has been confirmed, storkks shall have a right to charge you cancellation fee of a minimum INR 75 upto the order value, with a right to either not to refund the order value or recover from your subsequent order, the complete/ deficit cancellation fee, as applicable, to compensate our restaurant and delivery partners. storkks shall also have right to charge you cancellation fee for the orders cancelled by storkks for the reasons specified under clause 1(iii) of this cancellation and refunds policy. In case of cancellations for the reasons attributable to storkks or its restaurant and delivery partners, storkks shall not charge you any cancellation fee.</p></li>
                                <li><p>However, in the unlikely event of an item on your order being unavailable, we will contact you on the phone number provided to us at the time of placing the order and inform you of such unavailability. In such an event you will be entitled to cancel the entire order and shall be entitled to a refund in accordance with our refund policy.</p></li>
                                <li><p>We reserve the sole right to cancel your order in the following circumstance:</p>
                                <ol type="a">
                                    <li><p>in the event of the designated address falls outside the delivery zone offered by us;</p></li>
                                    <li><p>failure to contact you by phone or email at the time of confirming the order booking;</p></li>
                                    <li><p>failure to deliver your order due to lack of information, direction or authorization from you at the time of delivery; or</p></li>
                                    <li><p>unavailability of all the items ordered by you at the time of booking the order; or</p></li>
                                    <li><p>unavailability of all the items ordered by you at the time of booking the order; or</p></li>
                                </ol>
                                </li>
                            </ol>
                            </li>
                            <li><p><u>Refunds</u></p>
                            <ol type="i">
                            <li><p>You shall be entitled to a refund only if you pre-pay for your order at the time of placing your order on the Platform and only in the event of any of the following circumstances:</p>
                                <ol type="a">
                                    <li><p>your order packaging has been tampered or damaged at the time of delivery;</p></li>
                                    <li><p>us cancelling your order due to (A) your delivery location following outside our designated delivery zones; (B) failure to contact you by phone or email at the time of confirming the order booking; or (C) failure to contact you by phone or email at the time of confirming the order booking; or</p></li>
                                    <li><p>you cancelling the order at the time of confirmation due to unavailability of the items you ordered for at the time of booking.</p></li>
                                </ol>
                            </li>
                            <li><p>Our decision on refunds shall be at our sole discretion and shall be final and binding.</p></li>
                            <li><p>All refund amounts shall be credited to your account within 3-4 business days in accordance with the terms that may be stipulated by the bank which has issued the credit / debit card.</p></li>
                            </ol>
                            </li>
                            <li><p>In case of payment at the time of delivery, you will not be required to pay for:</p>
                                <ol type="i">
                                    <li><p>orders where the packaging has been tampered or damaged by us;</p></li>
                                    <li><p>wrong order being delivered; or</p></li>
                                    <li><p>items missing from your order at the time of delivery.</p></li>
                                </ol>
                            </li>
                        </ol>
                    
                
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
           <?php $this->view('web/footer')?>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
      <!-- Modal -->
      <div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
               <div class="modal-body cart-addon">
                  <div class="food-item white">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="<?php echo base_url(); ?>web-assets/images/pepsi.png" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 2.99</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect2">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-2"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="<?php echo base_url(); ?>web-assets/images/cola.jpg" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 2.49</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect3">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-3"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="<?php echo base_url(); ?>web-assets/images/pepsi.png" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 1.99</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect5">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-4"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="<?php echo base_url(); ?>web-assets/images/cola.jpg" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 3.15</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect6">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-5"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn theme-btn">Add to cart</button>
               </div>
            </div>
         </div>
      
       
        
       
        
       
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
</script></body>

</html>