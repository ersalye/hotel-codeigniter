<?php $this->view('web/header');
$cid = $this->session->userdata('customer_id');
if(empty($cid)){
	redirect();
}
$c_name =$this->session->userdata('customer_name');
		 $c_email =$this->session->userdata('customer_email');
		 $c_phone =$this->session->userdata('customer_phone');
		
		 ?>
	 
         <div class="page-wrapper">
		 <div class="inner-page-hero bg-image" data-image-src="<?php echo base_url(); ?>web-assets/images/profile-banner.jpg" style="background: url(images/profile-banner.jpg) center center / cover no-repeat;">
                <div class="container m-b-10">
				<div class="row">
				<div class="col-md-8">
				<h1 class="font-white" style="text-transform: capitalize;"><?php echo $user['first_name']; ?></h1>
                  <p class="font-white"><span class="c"><i class="fa fa-mobile" aria-hidden="true"></i> <?php  echo  $user['phone']; ?></span> , <span><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $c_email; ?></span></p>
              
				</div>
				<div class="col-md-4">
				<a class="btn theme-btn btn-sm pull-right" data-toggle="modal" data-target="#myModal">Edit Profile</a>
				</div>
				</div>
				<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Edit Profile</h4>
        </div>
        <div class="modal-body">
          <div class="limiter loginf">
                                 
                                      <form id="profile-save"> 
									   <div class="">
                                    <div class="wrap-login100">
                                       <div class="login100-form validate-form bg-white">
                                          
                                          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
										  <input type="hidden" id="edit-id" value="<?php echo $user['id'];  ?>">
                                             <input id="email-profile" class="input100" type="text" name="address" value="<?php echo $c_email; ?>" readonly>
                                             <span class="focus-input100"></span>
                                             <span class="label-input100"></span>
                                          </div>
                                          <div id="edit-name" class="wrap-input100 validate-input" data-validate="Password is required">
                                             <input id="name-profile" class="input100" type="text" name="name-profile" value="<?php echo $user['first_name'];  ?>">
                                             <span class="focus-input100"></span>
                                             <span class="label-input100">Name</span>
											 <span id="valid-name" class="err-valid">Enter minimum 4 char</span>
                                          </div>
					  <div id="edit-phone" class="wrap-input100 validate-input" data-validate="Password is required">
						 <input id="phone-profile" class="input100" type="tel" name="phone-profile" maxlength="10" value="<?php echo $user['phone'];  ?>">
						 <input id="mobile-hd" type="hidden" value="<?php echo $user['phone'];  ?>">
						 
						 <span class="focus-input100"></span>
						 <span class="label-input100">Phone</span>
						   <span id="valid-lphone" class="err-valid">Enter valid phone</span>
						   <span id="exist-lphone" class="err-valid">Phone number already registered</span>
                                          </div>
						<div id="edit-otp" class="wrap-input100 validate-input" data-validate="Password is required">
						 <input id="otp-profile" class="input100" type="text" name="phone-profile" maxlength="10" value="">
						
						 
						 <span class="focus-input100"></span>
						 <span class="label-input100">Enter OTP</span>
						  <!-- <span id="valid-lphone" class="err-valid">Enter valid phone</span>
						   <span id="exist-lphone" class="err-valid">Phone number already registered</span>-->
                                          </div>
                                          
                                          <div class="container-login100-form-btn">
				 <button id="form-profile" type="button" class="login100-form-btn">SAVE & PROCEED
				 </button>
				 <!--<button id="Otp-profile" type="button" class="login100-form-btn">SUBMIT OTP
				 </button>-->
											 <span id="succ-msg"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div></form>
                                    
                              </div>
        </div>
        
      </div>
      
    </div>
  </div>
                  <?php //print_r($address); ?>
			   </div>
                <!-- end:Container -->
            </div	>
            <section class="user-sec">
               <div class="container m-t-30">
                  <div class="row">
                     <div class="col-xs-12 bhoechie-tab-container">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                           <div class="list-group">
                              <a href="#" class="list-group-item active text-center">
                              <i class="fa fa-shopping-bag" aria-hidden="true"></i><br/>Orders
                              </a>
                              <a href="#" class="list-group-item text-center">
                              <i class="fa fa-percent" aria-hidden="true"></i><br/>Offers
                              </a>
                              <a href="#" class="list-group-item text-center">
                              <i class="fa fa-heart" aria-hidden="true"></i><br/>Favourites
                              </a>
                              <a href="#" class="list-group-item text-center">
                              <i class="fa fa-credit-card-alt" aria-hidden="true"></i><br/>Payments
                              </a>
                              <a id="address-tab" href="#" class="list-group-item text-center">
                              <i class="fa fa-map-marker" aria-hidden="true"></i><br/>Address
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                           <!-- flight section -->
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
								
								$timings = $this->Restaurant->getShopRowsweb($rid);
								$shops = $this->Restaurant->getShopRows($rid);
								 $t_date = Date("G:i");
							 
								 $tday = date('l');
							    //print_r($timings);
							   if($tday == "Monday"){
							   $tone = $timings[0]['m_morning_open'];
							   $ttwo = $timings[0]['m_morning_close'];
							   $tth = $timings[0]['m_evening_open'];
							   $tf = $timings[0]['m_evening_close'];
							   }
							   if($tday == "Tuesday"){
							   $tone = $timings[0]['t_morning_open'];
							   $ttwo = $timings[0]['t_morning_close'];
							   $tth = $timings[0]['t_evening_open'];
							   $tf = $timings[0]['t_evening_close'];
							   }
							   if($tday == "Wednesday"){
								$tone = $timings[0]['w_morning_open'];
							    $ttwo = $timings[0]['w_morning_close'];
							    $tth = $timings[0]['w_evening_open'];
							    $tf = $timings[0]['w_eveningclose'];
							   }
							   if($tday == "Thursday"){
								$tone = $timings[0]['th_morning_open'];
							    $ttwo = $timings[0]['th_morning_close'];
							    $tth = $timings[0]['th_evening_open'];
							    $tf = $timings[0]['th_evening_close'];
							   }
							   if($tday == "Friday"){
								   $tone = $timings[0]['f_morning_open'];
							   $ttwo = $timings[0]['f_morning_close'];
							   $tth = $timings[0]['f_evening_open'];
							   $tf = $timings[0]['f_evening_close'];
							   }
							   if($tday == "Saturday"){
								   $tone = $timings[0]['s_morning_open'];
							   $ttwo = $timings[0]['s_morning_close'];
							   $tth = $timings[0]['s_evening_open'];
							   $tf = $timings[0]['s_evening_close'];
							   }
							   if($tday == "Sunday"){
							   $tone = $timings[0]['sun_morning_open'];
							   $ttwo = $timings[0]['sun_morning_close'];
							   $tth = $timings[0]['sun_evening_open'];
							   $tf = $timings[0]['sun_evening_close'];
							   }
							   if($shops['everyday'] == "ALL"){
							    $tone = $shops['m_resturant_opens'];
							    $ttwo = $shops['m_resturant_close'];
							    $tth = $shops['e_resturant_opens'];
							    $tf = $shops['e_resturant_close'];
							   }
							 
								?>
                                    <div class="col-sm-12 col-md-12 col-lg-7 text-xs-center text-sm-left">
                                       <div class="entry-logo">
                                          <a class="img-fluid" href="#"><img src="<?php echo base_url(); ?>uploads/images/<?php echo $sid['shop_logo'] ?>" alt="Food logo"></a>
                                       </div>
                                       <!-- end:Logo -->
                                       <div class="entry-dscr">
                                          <h5><a  style="color:red !important;" href="<?php echo base_url('Profile/').$rid; ?>">Restaurant Name:
										  <?php 
								
								echo $sid['name']; ?>
										  </a></h5>
                                          <span><?php echo $adid['address']; ?></span>
                                          <div>
                                             <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-check"></i> ORDER #<?php echo $order['o_id']; ?></li>
                                                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i>
												<?php  $datee = $order['date_of_order']; 
												
												$date = new DateTime($datee);
											echo $date->format('l, jS, F y, g:i A');	?></li>
                                             </ul>
                                          </div>

                                          <!--<a href="#" class="view-btn">VIEW DETAILS</a>-->
										     
                                          </div>

									   
                                       <!-- end:Entry description -->
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                       <div class="right-content bg-white">
                                          <h5><a >Delivered on <?php echo $date->format('l, jS, F y, g:i A');	?> <i class="fa fa-check-circle" style="color:#60b246" aria-hidden="true"></i></a></h5>
										  
                                       </div>
                                       <!-- end:right info -->
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="row new-sec">
                                          <div class="col-sm-12 col-md-12 col-lg-8">
                                            
                                             <div class="m-t-10">
											 <?php    if($shops['status']== "active"){
									
							  if( ($t_date >= $tone && $t_date <= $ttwo) || ($t_date >= $tth && $t_date <= $tf) ){
								 ?>
								 <a href="<?php echo base_url('Products/Reorder_add_to_cart/').$order['o_id']; ?>"  class="btn theme-btn m-b-5 btn-sm">Reorder</a>
								 <?php 
							  
							  }else{ ?>
								  <a style="color:#fff" class="btn theme-btn m-b-5 btn-sm">Closed Restaurant</a>
								<?php }}?>
                                                
                                        <a href="<?php echo base_url('Products/Order/').$order['o_id']; ?>"  class="btn theme-btn m-b-5 btn-sm">Track Order</a> 
	<a orderid="<?php echo $order['o_id'];?>" orderaddresid="<?php echo $order['oredr_address_id'];?>" ordershopid="<?php echo $order['rid'];?>" id="order_<?php echo $order['o_id'];?>" onclick="$('.aside').asidebar('open')" href="#"  class="getinvoice btn theme-btn m-b-5 btn-sm">Order Details</a>        
                                             </div>
                                          </div>
                                          <div class="col-sm-12 col-md-12 col-lg-4 text-right">
                                             <span>Total Paid: $<?php echo $order['total']; ?></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end:row -->
                              </div>
							   <?php } ?>
                              
                           </div>
                           <!-- train section -->
                           <div class="bhoechie-tab-content">
                             
                              <div  class="row m-t-15">
							  <?php foreach($promocodes as $promo){ ?>
                                 <div class="col-sm-6">
                                    <div class="offers">
                                       <div class="coupon text-center">
									   
                                         <span  onClick='copyText(this)'><?php echo $promo['promo_code']; ?> </span>
										 
                                       </div>
                                       <div>
                                         
                                          <div class="add-sec m-t-10"><?php echo $promo['description']; ?> </div>
                                          <!--<button onClick="copyText(<?php echo $promo['description']; ?>)" type="button" class="btn theme-btn btn-sm m-t-10 btncopy">Copy Code</button>-->
										  <?php  
										  if($promo['promocode_type']=='percent'){ 
										 echo $promo['discount']."%"; }else{ echo "$".$promo['discount'];}?> Discount<br>
										 Expired on: <?php echo $promo['expiration']; ?>
                                       </div>
                                    </div>
                                 </div>
							
							  <?php } ?>
                                 
                                 
                              </div>
                           </div>
                           <!-- hotel search -->
                           <div class="bhoechie-tab-content">
                              <h5>Favourites</h5>
                              <div class="row m-t-15">
							  
							   <?php foreach($favourites as $fav){ ?>
							   <?php $rid = $fav['rid']; 
										  $CI =& get_instance();
										$fid = $CI->get_shopbyfav($rid);
										//print_r($fid );?>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 food-item">
                                    <div class="food-item-wrap">
                                       <div class="figure-wrap bg-image" data-image-src="<?php echo base_url(); ?>uploads/images/<?php echo $fid['shop_logo'] ?>" style="background: url(<?php echo base_url(); ?>uploads/images/<?php echo $fid['shop_logo'] ?>) center center / cover no-repeat;">
                                          <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                       </div>
                                       <div class="content">
                                          <h5><a href="#"><?php echo $fid['name']; ?></a></h5>
                                          <div class="product-name"><?php 
												$idd = $fid['Cuisine']; 
													$CI =& get_instance();
													$CI->Cuisine_nameby($idd) ;
													
													?></div>
                                          <ul class="list-inline">
                                             <li class="list-inline-item"><i class="fa fa-check"></i> Min $ <?php echo $fid['min_amount']; ?></li>
                                             <li class="list-inline-item"><i class="fa fa-motorcycle"></i> <?php echo $fid['estimated_delivery_time']; ?> min</li>
                                          </ul>
                                          <a href="<?php echo base_url('Profile/').$fid['id']; ?>" class="btn theme-btn-dash pull-right">Order Now</a>
                                       </div>
                                    </div>
                                 </div>
							   <?php }?>
                                 
                              </div>
                           </div>
                           <div class="bhoechie-tab-content">
                              <center>
                                 <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#55518a"></h1>
                                 <h2 style="margin-top: 0;color:#55518a">Coming Soon</h2>
                              </center>
                           </div>
                           <div class="bhoechie-tab-content">
                              <h5>Manage Addresses</h5>
							   
                              <div id="adressids"  class="row m-t-15">
							  <?php foreach($address as $ad){ ?>
                                 <div class="col-sm-6">
                                    <div class="deliver">
                                       <div class="home-icon">
                                          <i class="fa fa-home" aria-hidden="true"></i>
                                       </div>
					   <div>
						  <div class="add-title"><?php echo $ad['title']; ?></div>
						  <div class="add-sec"><?php echo $ad['address']; ?></div>
						  <button type="button" data-pid="<?php echo $ad['id'];?>" id="edit_<?php echo $ad['id'];?>"  class="btn edit-address theme-btn btn-sm" onclick="$('.aside').asidebar('open')">Edit</button>
						  <button type="button" data-pid="<?php echo $ad['id'];?>" id="edits_<?php echo $ad['id'];?>" class="delete-address btn theme-btn btn-sm">Delete</button>
					   </div>
                                    </div>
							  </div> <?php } ?>
                                 
                                
                              </div>
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
            <?php $this->view('web/footer'); ?>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
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
<script>
$(document).ready(function(){
	
	 $('#edit-otp').hide();
	 $('#exist-lphone').hide();
	 $('#valid-lphone').hide();
	$('#phone-profile').keypress(function(event) {
    if (((event.which != 46 || (event.which == 46 && $(this).val() == '')) ||
            $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
}).on('paste', function(event) {
    event.preventDefault();
});
	// Phone minlength 10
	$("#phone-profile").keyup(function (e) {
	var numcphone = $("#phone-profile").val();
	var editid = $("#edit-id").val();
	var num = $.isNumeric($("#phone-profile").val());

var filter = /^[0-9-+]+$/;
if (filter.test(numcphone)) {
    if($('#phone-profile').val().length < 9) {
       $("#edit-phone").css("border","1px red solid");
	   $('#exist-lphone').hide();
	   $('#valid-lphone').show();
      }else{
		$('#valid-lphone').hide();
		var url = "<?php echo site_url('Products/phone_checkedit/');?>"+editid;
		$.ajax({
                url : url,
                method : "POST",
				//dataType:"json",   
				data : {phone: numcphone},
				success: function(data){
		if(data.length==0){
			
		$("#edit-phone").css("border","1px #e6e6e6 solid");
		$("#form-profile").removeAttr("disabled");
		 $('#exist-lphone').hide();
					}else{
		$("#edit-phone").css("border","1px red solid");	
		$("#form-profile").attr("disabled", true);		
		$('#exist-lphone').show();
					}
				
			console.log(data);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
        //alert("fail ajax load");
    }
            });
		$("#edit-phone").css("border","1px #e6e6e6 solid");
		$('#valid-lphone').hide();
		
}}
else {
     $("#edit-phone").css("border","1px red solid");
	 $('#exist-phone').hide();
	   $('#valid-lphone').show();
}
	

	});
		// Name minlength 4
		$('#valid-name').hide();
	$("#name-profile").keyup(function (e) {		
	if($('#name-profile').val().length < 4) {
       $("#edit-name").css("border","1px red solid");
	   $('#valid-name').show();
      return false;
    }else{
		//alert('sdf');
		$("#edit-name").css("border","1px #e6e6e6 solid");
		$('#valid-name').hide();
	}
	});
    $("#form-profile").click(function(){

		var name    = $('#name-profile').val();
		if($('#name-profile').val().length < 4) {
			return false;
		}
		
		var phone  = $('#phone-profile').val();
		var mobile  = $('#mobile-hd').val();
		var otpid  = $('#otp-profile').val();
		if(otpid.length == 0){
		if(mobile != phone){
			
			var url = "<?php echo site_url('Products/SendOTP');?>";
				$.ajax({
                url : url,
                method : "POST",
			//	dataType:"json",   
				data : {mobile: mobile},
				success: function(data){
				console.log(data);		},
            });
			$('#edit-otp').show();
			return false;
		}}
		
		var ses_id = "<?php echo $this->session->userdata('customer_id'); ?>";
        var url = "<?php echo site_url('Products/cprofile_update');?>";
		
    	$.ajax({
                url : url,
                method : "POST",
			//	dataType:"json",   
				data : {name: name,phone:phone,ses_id:ses_id,otp:otpid,mobile:mobile},
				success: function(data){
					if(data=='F1'){
							notif({
				type: "error",
				msg: '<span style="color:#fff">Enter valid OTP</span>',
				position: "right",
				width: 500,
				height: 60,
				autohide: true
			});
					}else{
					 location.reload();
					}
				console.log(data);
                },
    error: function(){
      console.log("fail Update resopnse");
    }
            });
    });
});
</script>
<script>
 $("#address-tab").click(function(){
	var userid = "<?php echo $this->session->userdata('customer_id'); ?>";
	//alert(userid);
 });
</script>
  <?php $this->view('web/edit-address-web.php') ?>
   </body>
</html>