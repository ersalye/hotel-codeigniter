<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="#">
      <title>Storkks</title>
      <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url(); ?>web-assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>web-assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
      <link href="<?php echo base_url(); ?>web-assets/css/animate.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url(); ?>web-assets/css/style.css" rel="stylesheet">
     
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/dist.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/util.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/main.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/notifIt.css">

   </head>
   <body class="home">
      <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark nav-bg">
               <div class="container">
                  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>"> <img class="img-rounded" src="<?php echo base_url(); ?>web-assets/images/storkks_logo.png" alt=""> </a>
                  <?php $cururl = current_url();
				$baser = base_url('Restaurants');
				if($cururl == $baser){
				?>
				  <a class="categories" href="#"><i class="fa fa-th" aria-hidden="true"></i>
				<?php  current_url(); ?>Categories</a> <?php }?>
                  <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
                        
						 <li class="nav-item"> <a class="nav-link active"> <span id="ipp"></span> <span class="sr-only">(current)</span></a> </li>
						 <!--<li class="nav-item"> <a class="nav-link active" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a> </li>-->
						
                        <?php $c_id =$this->session->userdata('customer_id');
						if(empty($c_id)) {?>
					   <!--<li class="nav-item"> <a href="#" class="nav-link" href="<?php echo base_url(); ?>" onclick="$('.aside').asidebar('open')">Login / Sign up</a> </li>-->
						<?php }else{ ?>
							<li class="nav-item dropdown"> <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $c_name =$this->session->userdata('customer_name'); ?></a>
                                <div class="dropdown-menu"> 
								<a class="dropdown-item" href="<?php echo base_url('My-account'); ?>">Profile</a>
								<!--<a class="dropdown-item" href="contact.html">Contact</a> 
								<a class="dropdown-item" href="submition.html">Submit restaurant</a>
								<a class="dropdown-item" href="registration.html">Registration</a>-->
                                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="<?php echo base_url('Products/logout'); ?>">Logout</a> </div>
                            </li>
						<?php 
						} ?>
                        <!-- <li class="nav-item"> <a class="nav-link" href="index.html"><i class="fa fa-search" aria-hidden="true"></i></a> </li> -->
                     </ul>
                  </div>
               </div>
            </nav>
            <!-- /.navbar -->
         </header>
 <?php if(!empty($checkout)){ foreach ($checkout as $items) { $rids = $this->Restaurant->getproducts( $items['id']);  
 $shopdetails = $this->Restaurant->getShopRows( $rids['restaurant_id']);
$rdiscount = $shopdetails['discount'];
$rmin = $shopdetails['estimated_delivery_time'];
}}else{
	 $rids['restaurant_id']='';
 }
 
 ?>
		
         <div class="page-wrapper">
		 <div class="after-confirm">
            <div class="top-links">
               <div class="container">
                  <ul class="row links">
                     <li class="col-xs-12 col-sm-3 link-item active"><span>1</span><a href="<?php echo base_url(); ?>">Choose Your Location</a></li>
                     <li class="col-xs-12 col-sm-3 link-item active"><span>2</span><a >Choose Restaurant</a></li>
                     <li class="col-xs-12 col-sm-3 link-item active"><span>3</span><a href="<?php echo base_url('Profile/').$rids['restaurant_id']; ?>">Pick Your favorite food</a></li>
                     <li class="col-xs-12 col-sm-3 link-item active"><span>4</span><a  >Order and Pay online</a></li>
                  </ul>
               </div>
            </div>
            <section class="cart-sec">
               <div class="container m-t-30">
                  <div class="row">
				 
                     <div class="col-sm-8 margin-b-30">
					 
                        <div id="msform">
                           <!-- progressbar -->
                           <ul id="progressbar" style="display:none;">
						   <?php $c_id =$this->session->userdata('customer_id');
								if(empty($c_id)){?>
								<li class="active">Account</li><?php }?>
                              <li >Delivery address</li>
                              <li>Payment</li>
                           </ul>
                           <!-- fieldsets -->
						   <?php 	if(empty($c_id)){?>
                           <fieldset>
                              <h2 class="fs-title text-center">Account</h2>
                              <h3 class="fs-subtitle text-center">To place your order now, log in to your existing account or sign up.</h3>
                              <div class="limiter loginf">
               <div class="container-login100">
                  <div class="wrap-login100">
                     <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-30">
                        Login
                        <div class="txt2">(or)</div>
                        <a href="#">
                        <div class="create lfadeout">
                        create an account
                        </div>
                        </a>
                        </span>
                        <div id="lemail" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                           <input id="login-uname" class="input100" type="text" name="email">
                           <span class="focus-input100"></span>
                           <span class="label-input100">Email</span>
						   <span id="valid-lmail" class="err-valid">Enter valid mail id</span>
						   <span id="exist-lmail" class="err-valid">Mail id not registered</span>
                        </div>
                        <div id="lpassword" class="wrap-input100 validate-input" data-validate="Password is required">
                           <input id="login-password" class="input100" type="password" maxlength="20" name="pass">
                           <span class="focus-input100"></span>
                           <span class="label-input100">Password</span>
                        </div>
                        <div class="flex-sb-m w-full p-t-3 p-b-32">
                           <div class="contact100-form-checkbox">
                              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                              <label class="label-checkbox100" for="ckb1">
                              Remember me
                              </label>
                           </div>
                           <div>
                              <a href="#" class="txt1">
                              Forgot Password?
                              </a>
                           </div>
                        </div>
                        <div class="container-login100-form-btn">
                           <button type="button" id="login-button" class="login100-form-btn">
                           Login
                           </button>
                        </div>
                     </form>
                     <div class="login100-more" style="background-image: url('<?php echo base_url(); ?>web-assets/images/bg-01.jpg');">
                     </div>
                  </div>
               </div>
            </div>
			<div class="limiter forgot">
               <div class="container-login100">
                  <div class="wrap-login100">
                     <form id="fotp" class="login100-form validate-form">
                        <span class="login100-form-title p-b-30">
                       Forgot Password
                        </span>
                        <div id="lemail" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                           <input id="forgot-email" class="input100" type="text" name="email">
                           <span class="focus-input100"></span>
                           <span class="label-input100">Email</span>
						   <span id="valid-fmail" class="err-valid">Enter valid OTP</span>
						   <span id="exist-fmail" class="err-valid">Mail id not registered</span>
                        </div>
                        
                        
                        <div class="container-login100-form-btn">
                           <button type="button" id="send-otp" class="login100-form-btn">
                           Send OTP
                           </button>
                        </div>
                     </form>
                     <form id="sendotp-email" class="login100-form validate-form">
                        <span class="login100-form-title p-b-30">
                       Forgot Password
                        </span>
                        <div id="lemail" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                           <input id="OTP" class="input100" type="text" name="OTP">
                           <input id="otp-email" class="input100" type="hidden" name="email">
                           <span class="focus-input100"></span>
                           <span class="label-input100">OTP</span>
						   <span id="valid-otp" class="err-valid">Enter valid OTP</span>
						  <!-- <span id="exist-chmail" class="err-valid">Mail id not registered</span>-->
                        </div>
                        
                        
                        <div class="container-login100-form-btn">
                           <button type="button" id="OTP-send" class="login100-form-btn">
                           Submit
                           </button>
                        </div>
                     </form>
					 <form id="changepassword" class="login100-form validate-form">
                        <span class="login100-form-title p-b-30">
                       Forgot Password
                        </span>
                        <div id="ch-password" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                          <input id="chng-password" class="input100" type="text" name="chng-password">
                          <input id="pass-email" class="input100" type="hidden" name="email">
                           <span class="focus-input100"></span>
                           <span class="label-input100">Password</span>
						   <!--  <span id="valid-otp" class="err-valid">Enter valid OTP</span>
						 <span id="exist-chmail" class="err-valid">Mail id not registered</span>-->
                        </div>
						<div id="conform-password" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                          <input id="cnfm-password" class="input100" type="text" name="cnfm-password">
                           <span class="focus-input100"></span>
                           <span class="label-input100">Confirm Password</span>
						 <!--  <span id="valid-otp" class="err-valid">Enter valid OTP</span>
						 <span id="exist-chmail" class="err-valid">Mail id not registered</span>-->
                        </div>
                        
                        
                        <div class="container-login100-form-btn">
                           <button type="button" id="ch-Password" class="login100-form-btn">
                           Change Password
                           </button>
                        </div>
						
                     </form>
					 
                     <div class="login100-more" style="background-image: url('<?php echo base_url(); ?>web-assets/images/bg-01.jpg');">
                     </div>
					 <div id="not-match"></div>
                  </div>
               </div>
            </div>
                              <div class="limiter sign-up loginr">
               <div class="container-login100">
                  <div class="wrap-login100">
                     <form id="configform" class="login100-form validate-form">
                        <span class="login100-form-title p-b-30">
                        Sign up<br>
                        <div class="txt2">(or)</div>
                        <a href="#">
                        <div class="create lcreate">
                        login to your account
                        </div>
                        </a>
                        </span>
						<div id="ephone" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                           <input id="cphone" class="input100" type="text" maxlength="10"  name="phone">
                           <span class="focus-input100"></span>
                           <span id="erphone" class="label-input100">Phone number <span class="create">*</span></span>
						   <span id="valid-phone" class="err-valid">Enter valid phone</span>
						   <span id="exist-phone" class="err-valid">Phone number already registered</span>
                        </div>
                        <div id="ename" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                           <input id="cname" class="input100" type="text" name="name" maxlength="20">
                           <span class="focus-input100"></span>
                           <span class="label-input100">Name <span class="create">*</span></span>
						   <span id="valid-name" class="err-valid">Enter minimum 4 char</span>
                        </div>
						<div id="eemail" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                           <input id="cemail" class="input100" type="email" name="email">
                           <span class="focus-input100"></span>
                           <span class="label-input100">Email <span class="create">*</span></span>
						   <span id="valid-mail" class="err-valid">Enter valid mail id</span>
						   <span id="exist-mail" class="err-valid">Mail id already exist</span>
                        </div>
                        <div id="epassword" class="wrap-input100 validate-input" data-validate="Password is required">
                           <input id="cpassword" class="input100" type="password" maxlength="20" name="password" required>
                           <span class="focus-input100"></span>
                           <span class="label-input100">Password <span class="create">*</span></span>
						   <span id="valid-pass" class="err-valid">Enter minimum 6 char</span>
                        </div>
						<div id="eotp" class="wrap-input100 validate-input" data-validate="Password is required">
                           <input id="cotp" class="input100" type="text" maxlength="20" name="cotp" required>
                           <span class="focus-input100"></span>
                           <span class="label-input100">OTP <span class="create">*</span></span>
						   <span id="valid-otp" class="err-valid">Enter Valid OTP</span>
                        </div>
                        <div class="container-login100-form-btn m-t-30">
                           <button type="button" id="rg-button" class="login100-form-btn">
                           Submit
                           </button>
						   <button type="button" id="rg-save" class="login100-form-btn">
                           Submit
                           </button>
						   <span class="txt2 m-t-5">By creating an account, I accept the <a href="<?php echo base_url(); ?>terms-and-conditions" target="_blank">
                        <span class="create">
                         Terms & Conditions
                        </span>
                        </a></span>
						   
						    
                        </div>
                     </form>
                     <div class="login100-more" style="background-image: url('<?php echo base_url(); ?>web-assets/images/bg-01.jpg');">
                     </div>
                  </div>
               </div>
            </div>
                               <?php if(!empty($c_id)){?> <input type="button" name="next" class="next action-button" value="Next" /><?php }?>
                           </fieldset><?php }?>
                           <fieldset>
                              <h2 class="fs-title text-center">Select delivery address</h2>
                              <h3 class="fs-subtitle savadr text-center">You have a saved address in this location</h3>
                              <div id="deliver-address" class="row">
							  <span id="c_address" ></span>
                                
                                 
                                 <div class="col-sm-6">
                                    <div class="deliver">
                                       <div class="home-icon">
                                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                                       </div>
                                       <div>
                                          <div class="add-title">Add New Address</div>
                                          
                                          <div class="deliver-btn" data-toggle="modal" data-target="#myModal">ADD NEW</div>
                                       </div>
                                    </div>
									<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Save delivery address</h4>
        </div>
        <div class="modal-body">
          <div class="limiter loginf">
                                 
                                      <form method="post" id="address-form"> 
									   <div class="container-login100">
                                    <div class="wrap-login100">
                                       <div class="login100-form validate-form bg-white">
                                          <div id="a-title" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                             <input id="title" class="input100" type="text" name="title">
                                             <span class="focus-input100"></span>
                                             <span class="label-input100">Address line 1</span>
                                          </div>
                                          <div id="a-address" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                             <input id="address" class="input100" type="text" name="address">
                                             <span class="focus-input100"></span>
                                             <span class="label-input100">Address</span>
                                          </div>
                                          <div id="a-landmark" class="wrap-input100 validate-input" data-validate="Password is required">
                                             <input id="landmark" class="input100" type="text" name="landmark">
                                             <span class="focus-input100"></span>
                                             <span class="label-input100">Landmark</span>
                                          </div>
										  <div id="a-pincode" class="wrap-input100 validate-input" data-validate="Password is required">
                                             <input id="pincode" class="input100" type="number" name="pincode">
                                             <span class="focus-input100"></span>
                                             <span class="label-input100">Pincode</span>
                                          </div>
                                          
                                          <div class="container-login100-form-btn">
                                             <button type="button" id="form-address" class="login100-form-btn">
                                             SAVE ADDRESS & PROCEED
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div></form>
                                    
                              </div>
        </div>
        
      </div>
      
    </div>
  </div>
									
                                 </div>
                              </div>
                             
                            <input type="button" id="next-bt" name="next" class="next next-bt action-button" value="Next" /> 
                           </fieldset>
                           <fieldset>
                              <h2 class="fs-title text-center">Choose payment method</h2>
                              <!-- <h3 class="fs-subtitle">We will never sell it</h3> -->
                              <input type="button" name="previous" class="previous action-button" value="Previous" />
                              <input type="submit" name="submit" class="submit action-button" value="Submit" />
                           </fieldset>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="cart-totals margin-b-20">
                           <div class="widget widget-cart">
                              <div class="widget-heading">
                                 <h3 class="widget-title text-dark text-center">
                                    Your Shopping Cart
                                 </h3>
                                 <div class="clearfix"></div>
                              </div>
                              <div class="cart-item catrshow" id="style-7">
							  <form id="check_cart">
							   <?php  foreach ($checkout as $items) { ?>
                                 <div class="order-row bg-white" id="item_div_<?php echo $items['id'];?>">
                                    <div class="widget-body">
                                       <!-- <div class="title-row">Pizza Quatro Stagione <a href="#"><i class="fa fa-trash pull-right"></i></a></div> -->
                                     
									  <div class="row no-gutter" id="item_<?php echo $items['id'];?>">
                                          <div class="col-xs-6">
                                            <span><?php echo $items['name']; ?></span>
				<input type="hidden" name="id[]" id="id_<?php echo $items['id'];?>" value="<?php echo $items['id']; ?>">
				<input type="hidden" name="title[]" id="title_<?php echo $items['id'];?>" value="<?php echo $items['name']; ?>">	
				<input type="hidden" name="subtotal[]" id="subtotal_<?php echo $items['id'];?>" value="<?php echo $items['subtotal']; ?>">	
                                          </div>
                                          <div class="col-xs-4">
            <div class="stepper-widget">
			  <button type="button" data-pidi="D" data-pid="<?php echo $items['id'];?>" data-p_name="<?php echo $items['name'];?>" data-rowid="<?php echo $items['rowid'];?>" data-p_price="<?php echo $items['price'];?>" class="js-qty-down btn btnupd dec_<?php echo $items['id']; ?>"><i class="fa fa-minus" aria-hidden="true"></i></button>
			  <input name="qty[]" min="1" max="99" id="qnty_<?php echo $items['id']; ?>" type="text" class="js-qty-input form-control" value="<?php echo $items['qty']; ?>" readonly />
			  <button type="button" data-pidi="I" data-pid="<?php echo $items['id'];?>" data-p_name="<?php echo $items['name'];?>" data-rowid="<?php echo $items['rowid'];?>" data-p_price="<?php echo $items['price'];?>" class="js-qty-up btn btnupd"><i class="fa fa-plus" aria-hidden="true"></i></button>
			</div> 
                                          </div>
                                          <div class="col-xs-2 text-right">
                                             <span>$<?php echo $items['price']; ?></span>
                                          </div>
									  </div>
                                    </div>
                                 </div>
                            <?php } 	?>
								<input type='hidden' id="adress_id" name='adress_id' >
								<input type='hidden' id="offer_code_id" value="<?php echo $this->session->userdata('cupon_id'); ?>" name='offer_code_id' >
								<input type='hidden' id="offer_code" value="<?php echo $this->session->userdata('cupon_code'); ?>" name='offer_code' >
								
                                 </form>
                              </div>
                              <!-- end:Order row -->
							  <?php
								 $gst = $charges['gst']; 
								 
								 $delverc = $charges['delivery_charges']; 
								 ?>
                              <div class="widget-body b-t">
							  <?php $totalbl = $this->cart->total() ?>
                                
								 <div class="price-wrap row">
                                    <div class="col-xs-8">
                                       <p><strong>Total
									   </strong></p>
                                    </div>
                                    <div class="col-xs-4">
                                       <h3 class="value text-right"><strong>$ <span id="toatalprice" >
									   <?php echo number_format($totalbl,2);?>
									   </span></strong></h3>
									   
                                    </div>
                                 </div>
								 <div class="price-wrap row">
                                    <div class="col-xs-8">
                                       <p>Offer Discount
									   </p>
                                    </div>
                                    <div class="col-xs-4">
                                       <h3 class="value text-right">- $ <span id="s-dicount" ><?php 
									   if(empty($rdiscount)){
										   
										   $rdis = $totalbl;
										   $valueprice = '';
									   }else{
										  $rdis  = ($rdiscount / 100) * $totalbl;
										  $valueprice = $totalbl - $rdis;
									   }


									    
									  echo number_format($rdis,2);									?></span></h3>
									   
                                    </div>
                                 </div>
								 <div class="price-wrap row">
								 <?php $cdsct = $this->session->userdata('cupon_discount');
									if(!empty($cdsct)){?>
									<div id="discount-price">
									<div class="col-xs-8">
                                       <p>Coupon Discount</p>
                                    </div>
									<?php  $cupontype = $this->session->userdata('cupon_type');
									if($cupontype == 'percent'){
									$dis = ($cdsct / 100) * $valueprice;
									}else{$dis =$cdsct; }
									?>
									  
									<div class="col-xs-4">
                                       <h3 class="value text-right"> - $ <span id="dis">
									   <?php  echo number_format($dis,2); ?> </span></h3>
                                    </div>
                                    </div>
									<?php }else{
										$dis='';
									} ?>
                                    <div class="col-xs-8">
                                       <p>Delivery Charges</p>
                                    </div>
                                    <div class="col-xs-4">
                                       <h3 class="value text-right">$ <span id="deliverc"><?php  echo number_format($delverc,2); ?></span></h3>
                                    </div>
                                    <div class="col-xs-8">
                                       <p>GST</p>
                                    </div>
                                    <div class="col-xs-4">
									<?php 
									$subtotal = $delverc + $valueprice - $dis;
									$gstpersentage = ($gst / 100) * $subtotal; ?>
                                       <h3 class="value text-right">$ <span id="gstprc"><?php  echo number_format($gstpersentage,2); ?></span></h3>
                                    </div>
									
                                 </div>
								 <?php if($this->session->userdata('customer_id')){ ?>
								  <?php if(empty($cdsct)){?>
								 <div class="price-wrap row">
                                    <div class="col-xs-12">
                             <a class="apply-btn" style="color: green !important;border: 1px dashed green !important;" onclick="$('.aside').asidebar('open')" href="#">Apply Coupon</a>
                                    </div>
                                    
                                 </div>
								  <?php }else{ ?>
								 <div class="price-wrap row">
                                    <div class="col-xs-12">
                                       <a class="apply-btn" style="color: red !important;border: 1px dashed red !important;" href="<?php echo site_url('Products/Offer_Remove/');?>">Remove Coupon</a>
                                    </div>
                                    
                                 </div>
								 <?php } }?>
								 
								 <div class="price-wrap row">
                                    <div class="col-xs-8">
                                       <p><strong>To Pay
									   </strong></p>
                                    </div>
                                    <div class="col-xs-4">
                                       <h3 class="value text-right"><strong>$ <span id="ordertotal" ><?php $topay = $valueprice+$delverc+$gstpersentage-$dis;
									    echo number_format($topay,2);
									   ?></span></strong></h3>
									   
                                    </div>
                                 </div>
								 
                                 <br>
                                 <div class="row">
                                    <div class="col-xs-12">
                                       <button type="button" id="ck_cart" class="btn btn-block theme-btn">CHECKOUT</button>
                                    </div>
									
                                 </div>
								 <!--<?php  foreach ($this->cart->contents() as $items) {
									// print_r($items);
									 ?>
									 <input type="text" name="name" value="<?php echo $items['name']; ?>">
									 <input type="text" name="qty" value="<?php echo $items['qty']; ?>">
						<input type="text" name="subtotal" value="<?php echo $items['subtotal']; ?>">
						
								 <?php } ?>
								 <input type="text" name="total" value="<?php echo $this->cart->total(); ?>">-->
                              </div>
							  <span id="booking_id"></span>
							   
                           </div>
                        </div><div id="success_message" ></div>
                     </div>
                  </div>
               </div>
            </section>
			</div>
			<div class="orderconformedstatus">
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
						 <h2 id="statusordera">Awaiting Confirmation</h2>
						 <h2 id="statusorderc">Order confirmed</h2>
						 <h2 id="statusorderf">Order booking fail</h2>
                           <div class="container">
			<div id="countdown"></div>
			<span id="ccountdown" style="font-size: 100px;color: #8ac575;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
		</div>
		<div>Your Order ID is #<span id="orderid">77</span></div>
                           
                           
                        </div>
                     </div>
                     <div class="col-md-5 col-sm-6">
                        <div class="pricing-box">
                           
                           <h2>Your order details</h2>
                           <ul class="order-d">
						   							   <?php  foreach ($checkout as $items) { ?>
                              <li id="item_adiv_<?php echo $items['id'];?>"><?php echo $items['name']; ?>
							  <span id="afterprice" class="pull-right"><span id="qntyorder_<?php echo $items['id'];?>"><?php echo $items['qty'];?> </span> X  <span>$ <?php 
							  $orderitemprice = $items['price']; 
							  echo number_format($orderitemprice,2)?></span></li>
                             
													   <?php } ?>
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

          
		</div>
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
	   

            
          
           
		   
		   
		    
        

            
            <!-- start: FOOTER -->
          
            <!-- end:Footer -->
         </div>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <script src="<?php echo base_url(); ?>web-assets/js/jquery.min.js"></script> 
	   <script src="<?php echo base_url(); ?>web-assets/js/jquery-ui.min.js"></script>
	   	<script src="<?php echo base_url(); ?>web-assets/js/jquery.countdown360.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/tether.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/animsition.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/bootstrap-slider.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/jquery.isotope.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/headroom.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/foodpicky.min.js"></script>
   	<script src="<?php echo base_url(); ?>web-assets/js/stepper.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>web-assets/js/notifIt.js"></script>
	<script>
            jQuery(document).on('ready', function(){
                jQuery('.stepper-widget').stepper();

                jQuery('.stepper-widget').on('stepperupdate', function(ev, data){
                    console.log(data.updateType);
                });
            });
        </script>
     
      <!-- jQuery easing plugin --> 
      <script src="<?php echo base_url(); ?>web-assets/js/jquery.easing.min.js" type="text/javascript"></script> 
  
      <script>
         $(function() {
         
         //jQuery time
         var current_fs, next_fs, previous_fs; //fieldsets
         var left, opacity, scale; //fieldset properties which we will animate
         var animating; //flag to prevent quick multi-click glitches
         
         $(".next").click(function(){
         	if(animating) return false;
         	animating = true;
         	
         	current_fs = $(this).parent();
         	next_fs = $(this).parent().next();
         	
         	//activate next step on progressbar using the index of next_fs
         	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
         	
         	//show the next fieldset
         	next_fs.show(); 
         	//hide the current fieldset with style
         	current_fs.animate({opacity: 0}, {
         		step: function(now, mx) {
         			//as the opacity of current_fs reduces to 0 - stored in "now"
         			//1. scale current_fs down to 80%
         			scale = 1 - (1 - now) * 0.2;
         			//2. bring next_fs from the right(50%)
         			left = (now * 50)+"%";
         			//3. increase opacity of next_fs to 1 as it moves in
         			opacity = 1 - now;
         			current_fs.css({'transform': 'scale('+scale+')'});
         			next_fs.css({'left': left, 'opacity': opacity});
         		}, 
         		duration: 800, 
         		complete: function(){
         			current_fs.hide();
         			animating = false;
         		}, 
         		//this comes from the custom easing plugin
         		easing: 'easeInOutBack'
         	});
         });
         
         $(".previous").click(function(){
         	if(animating) return false;
         	animating = true;
         	
         	current_fs = $(this).parent();
         	previous_fs = $(this).parent().prev();
         	
         	//de-activate current step on progressbar
         	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
         	
         	//show the previous fieldset
         	previous_fs.show(); 
         	//hide the current fieldset with style
         	current_fs.animate({opacity: 0}, {
         		step: function(now, mx) {
         			//as the opacity of current_fs reduces to 0 - stored in "now"
         			//1. scale previous_fs from 80% to 100%
         			scale = 0.8 + (1 - now) * 0.2;
         			//2. take current_fs to the right(50%) - from 0%
         			left = ((1-now) * 50)+"%";
         			//3. increase opacity of previous_fs to 1 as it moves in
         			opacity = 1 - now;
         			current_fs.css({'left': left});
         			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
         		}, 
         		duration: 800, 
         		complete: function(){
         			current_fs.hide();
         			animating = false;
         		}, 
         		//this comes from the custom easing plugin
         		easing: 'easeInOutBack'
         	});
         });
         
         $(".submit").click(function(){
         	return false;
         })
         
         });
      </script>
	  <script type="text/javascript" src="<?php echo base_url(); ?>web-assets/js/asidebar.jquery.js"></script>

      <script>
	  		 $('.btnupd').click(function(){
				
        var qnty      = $(this).data("pid");
        var qntydi      = $(this).data("pidi");
		var qntyy     = $('#qnty_'+qnty).val();
		var rowid     = $(this).data("rowid");
			if(qntydi == 'I'){
				if(qntyy >= 99){
					return false;
				}
			var fquantity = parseFloat(qntyy)+1;
		}else{
			if(qntyy == 1){
				$("#item_div_"+qnty).hide();
				$("#item_adiv_"+qnty).hide();
			}
			var fquantity = parseFloat(qntyy)-1;
		}
		var p_id    = $(this).data("pid");
        var p_name  = $(this).data("p_name");
        var p_price = $(this).data("p_price");
		var url = "<?php echo site_url('Products/check_update_cart');?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType: 'json',
                data : {product_id: p_id, product_name: p_name, product_price: p_price, quantity: fquantity,rowid:rowid},
				success: function(data){
					if(data.cartcount =='0'){
						notif({
				type: "error",
				msg: "<span style='color:#fff'>Please Select Items</span>",
				position: "right",
				width: 500,
				height: 60,
				autohide: true
			});
				 window.location.replace("<?php echo site_url('Restaurants');?>");
					}
					
					var dprsnt = "<?php echo $this->session->userdata('cupon_discount'); ?>";
					var totalckout = data.total;
					var shopdiscount = "<?php echo $rdiscount; ?>";
					//alert(shopdiscount);
					if(shopdiscount > 0){
						var shopdiount = (shopdiscount / 100) * totalckout;
						var aftershopdiscount = totalckout - shopdiount;
					}else{
						var aftershopdiscount = totalckout;
					}
					//alert(shopdiount);
					var cupontype = "<?php echo $this->session->userdata('cupon_type'); ?>";
					if(dprsnt.length!=''){
					if(cupontype == 'percent'){	
					var dis = (dprsnt / 100) * aftershopdiscount;	
					}else{
						var dis = dprsnt;
					}
					}else{
						dis='0';
					}
					
					var gst = "<?php  echo $gst; ?>";
					var deliverc = "<?php  echo $delverc; ?>";
					if(totalckout==0){
						var deliverc =0;
					}
					var tprice = aftershopdiscount + parseFloat(deliverc) - dis;
					var tdis = parseFloat(dis).toFixed(2);
					$('#dis').html(tdis);
					var aftergst =(gst/100)*tprice;
					var all = tprice + aftergst;
					var topaycart = all.toFixed(2);
					var totalcart = totalckout.toFixed(2);
					//$('#afterprice').html(orderprice);
					$('#gstprc').html(aftergst.toFixed(2));
					$('#agstprc').html(aftergst.toFixed(2));
					$('#deliverc').html(parseFloat(deliverc).toFixed(2));
					$('#adeliverc').html(parseFloat(deliverc).toFixed(2));
					$('#s-dicount').html(shopdiount.toFixed(2));
					$('#as-dicount').html(shopdiount.toFixed(2));
					$('#ordertotal').html(topaycart);
					$('#aordertotal').html(topaycart);
					$('#toatalprice').html(totalcart);
					$('#atoatalprice').html(totalcart);
					$('#qntyorder_'+p_id).html(fquantity);
                
				}
            });
          });
      </script>
	  
          <script>


		 
	 $('#form-address').click(function(){
        var title     = $('#title').val();
        var address    = $('#address').val();
		var landmark   = $('#landmark').val();
		var pincode = $('#pincode').val();
		var url = "<?php echo site_url('Products/saveaddress');?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				data : {title: title, address: address, landmark: landmark, pincode: pincode},
				success: function(data){
				var arr = data.errors;
								if(arr){
				var etitle = arr.title;
				if(etitle){$("#a-title").css("border","1px red solid");}else{
					$("#a-title").css("border","1px #e6e6e6 solid");
				}
				var eaddress = arr.address;
				if(eaddress){$("#a-address").css("border","1px red solid");}else{
					$("#a-address").css("border","1px #e6e6e6 solid");
				}
				var elandmark = arr.landmark;
				if(elandmark){$("#a-landmark").css("border","1px red solid");}else{
					$("#a-landmark").css("border","1px #e6e6e6 solid");
				}
				var epincode = arr.pincode;
				if(epincode){$("#a-pincode").css("border","1px red solid");}else{
					$("#a-pincode").css("border","1px #e6e6e6 solid");
				}
				}else{
					alert("Succusssfully Register");
					 location.reload();
				}
				//for(var key in arr){  }
				
				
			console.log(data);
                  
                },
    error: function(){
        //alert("fail to load ajax");
    }
            });
          });
      </script>
	  <script>
$(document).ready(function(){
$("#statusorderc").hide();
$("#statusorderf").hide();
   var url = "<?php echo site_url('Products/customer_adddress_web');?>";
   var estimatetime = "<?php echo $rmin; ?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				success: function(data){
				//for(var key in arr){  }
				$.each(data, function (key, data) {
					
    console.log(key)
    $.each(data, function (index, data) {
		
        $('#c_address').append("<div class='col-sm-6'><div class='deliver'><div class='home-icon'><i class='fa fa-home' aria-hidden='true'></i></div><div id='iddd'><div class='add-title'>"+ data.title +"</div><div class='add-sec'>" + data.address + "</div><div class='del-time'>"+ estimatetime +" MINS</div><div class='deliver-btn' id='"+data.id+"'>Deliver Here</div></div></div></div>");
		console.log('index', data)
    })
})				
if(data.address.length == 0){
	 $("#next-bt").hide();
}				console.log(data);
           
                },
    error: function(){
      //  alert("failure load customer address");
		console.log("failure load customer address");
    }
            });
});
</script>
<script>
$(document).ready(function(){
	 $("#ccountdown").hide();
	$(".orderconformedstatus").hide();
	$(".savadr").hide();
   var url = "<?php echo site_url('Products/total_cart_ajax');?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				success: function(data){
				//for(var key in arr){  }
				if(data.total_cart == 0){
			//notif({
			//	type: "error",
			//	msg: "<span style='color:#fff'>Please Select Items</span>",
			//	position: "center",
			//	width: 500,
			///	height: 60,
			//	autohide: true
			//});
				 window.location.replace("<?php echo site_url('Restaurants');?>");
				}
					console.log(data);
                 },
    error: function(){
       // alert("failure");
    }
            });
});
</script>
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

$(document).on('click', '#iddd .deliver-btn', function(){ 
	
      var adid = $(this).attr('id');
	 
	  var url = "<?php echo site_url('Products/customer_adddress_webid/');?>"+adid;
	 var estimatetime = "<?php echo $rmin; ?>"	
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				success: function(data){
					$(".savadr").show();
				//alert(data.address.id);
				//for(var key in arr){  }
				
		
        $('#deliver-address').html("<div class='col-sm-12'><div class='deliver'><div class='home-icon'><i class='fa fa-home' aria-hidden='true'></i></div><div id='iddd'><div class='add-title'>"+ data.address.title +"</div><div class='add-sec'>" + data.address.address + "</div><div class='del-time'>" + estimatetime +" MINS</div><div class='deliver-btn'>Delivery address</div></div></div></div>");
		//console.log('index', data);
     $('#adress_id').val(data.address.id);
				
				console.log(data);
               
                },
    error: function(){
      		console.log("load customer address");
    }
            });
});	
</script>
<script>
 $('#ck_cart').click(function(){
 
 var sess = "<?php echo $this->session->userdata('customer_id'); ?>";
if(sess){}else{
	notif({
				type: "error",
				msg: "<span style='color:#fff'>Please Login </span>",
				position: "center",
				width: 500,
				height: 60,
				autohide: true
			});
	return false;
} 
  $.ajax({
        url: '<?php echo site_url('Products/cart_ckfinal/');?>',
        type: 'post',
     //   dataType: 'json',
        data: $('form#check_cart').serialize(),
        success: function(data) {
		//	alert(data);
			if(data == 1){
				notif({
				type: "error",
				msg: "<span style='color:#fff'>Please Select Address</span>",
				position: "center",
				width: 500,
				height: 60,
				autohide: true
			});
				return false;
			}
			if(data == 2){
				notif({
				type: "error",
				msg: "<span style='color:#fff'>Minimum amount $20.</span>",
				position: "center",
				width: 500,
				height: 60,
				autohide: true
			});
				return false;
			}
			 $(".after-confirm").hide();
			 $(".orderconformedstatus").show();
			 
			 $("#orderid").html(data);
			var countdown =  $("#countdown").countdown360({
       	 	radius      : 60,
         	seconds     : 10,
         	fontColor   : '#FFFFFF',
         	autostart   : false,
         	onComplete  : function () { 
			 $("#statusordera").hide();
			 $("#countdown360_countdown").hide();
			 $("#ccountdown").show();
			 $("#statusorderc").show();
			
			console.log('done') 
			
			}
		   });
			countdown.start();
			console.log('countdown360 ',countdown);
              
			  },
		 error: function(){
      		console.log("load check out fail");
    }		 
    });
 });
</script>
<script type="text/javascript" charset="utf-8">

		 	
		 	$(document).on("click","button",function(e){
		 		e.preventDefault();
		 		var type = $(this).attr("data-type");
		 		if(type === "time-remaining")
		 		{
		 			var timeRemaining = countdown.getTimeRemaining();
		 			//alert(timeRemaining);
		 		}
		 		else
		 		{
		 			var timeElapsed = countdown.getElapsedTime();
		 			//alert(timeElapsed);
		 		}
		 	});
		  </script>
		 <?php $this->view('web/offers-js-web') ?>

   </body>
</html>