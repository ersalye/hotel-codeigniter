	<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
	  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>web-assets/images/favicon.png">
      <link rel="icon" href="#">
      <title>Storkks</title>
      <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url(); ?>web-assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>web-assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- <link href="<?php echo base_url(); ?>web-assets/css/animsition.min.css" rel="stylesheet"> -->
      <link href="<?php echo base_url(); ?>web-assets/css/animate.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url(); ?>web-assets/css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url(); ?>web-assets/css/dist.css">  
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/normalize.css" />
      <?php $cntrl = $this->uri->segment(1);;
				//$baser = base_url('Profile');
		 if($cntrl != 'Profile'){
			 ?>
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/demo.css" />
	 
		 <?php } ?>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/component.css" />
      <!-- login -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/util.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/main.css">
      <!-- End login -->
   </head>
   <style>
   body {
  overflow: hidden;
}


/* Preloader */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  /* change if the mask should have another color then white */
  z-index: 99;
  /* makes sure it stays on top */
}

#status {
  width: 200px;
  height: 200px;
  position: absolute;
  left: 50%;
  /* centers the loading animation horizontally one the screen */
  top: 50%;
  /* centers the loading animation vertically one the screen */
  background-image: url(https://www.storkks.com/assets/images/load.gif);
  /* path to your loading animation */
  background-repeat: no-repeat;
  background-position: center;
  margin: -100px 0 0 -100px;
  /* is width and height divided by two */
}</style>
   
   <body class="home">
   
   <!-- start cat -->
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>


	  
   <!-- End cat -->
    <?php $cururl = current_url();
		 
				$my_account = base_url('My-account');
		 if($cururl != $my_account){
			 ?>
      <div class="aside">
         <div class="aside-header">
		   <a  href="<?php echo base_url(); ?>"> <img class="img-rounded" src="<?php echo base_url(); ?>web-assets/images/storkks_logo_dark.png" alt=""> </a>
            <span class="close" data-dismiss="aside" aria-hidden="true">&times;</span>
         </div>
         <div class="aside-contents">
            <div class="limiter loginf">
               <div class="container-login100">
                  <div class="wrap-login100">
                     <form id="loginformr" class="login100-form validate-form">
                        <span class="login100-form-title p-b-40">
                        Login
                        <div class="txt2">(or)</div>
                        <a href="#">
                        <div id="aformcreate" class="create lfadeout">
                        Create an account
                        </div>
                        </a>
                        </span>
                        <div id="lemail" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                           <input id="login-uname" class="input100" type="tel" name="email" maxlength="10">
                           <span class="focus-input100"></span>
                           <span class="label-input100">Phone</span>
						   <span id="valid-lmail" class="err-valid">Enter valid Phone</span>
						   <span id="exist-lmail" class="err-valid">Phone number not registered</span>
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
                           <input id="forgot-email" class="input100" type="tel" name="email" maxlength="10">
                           <span class="focus-input100"></span>
                           <span class="label-input100">Phone</span>
						   <span id="valid-fmail" class="err-valid">Enter valid Phone</span>
						   <span id="exist-fmail" class="err-valid">Phone id not registered</span>
                        </div>
                        
                        
                        <div class="container-login100-form-btn">
                           <button type="button" id="send-otp" class="login100-form-btn">
                           <span id="sendsubmitotp">Send OTP</span><span id="floader" style="position:relative;z-index:9999;">
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
						   <span id="valid-otp_forgot" class="err-valid">Enter valid OTP</span>
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
                          <input id="chng-password" class="input100" type="password" name="chng-password">
                          <input id="pass-email" class="input100" type="hidden" name="email">
                           <span class="focus-input100"></span>
                           <span class="label-input100">Password</span>
						   <!--  <span id="valid-otp" class="err-valid">Enter valid OTP</span>
						 <span id="exist-chmail" class="err-valid">Mail id not registered</span>-->
                        </div>
						<div id="conform-password" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                          <input id="cnfm-password" class="input100" type="password" name="cnfm-password">
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
					 
                        <span class="login100-form-title p-b-40">
                        Sign up<br>
                        <div class="txt2">(or)</div>
                        <a href="#">
                        <div class="create lcreate">
                        Login to your account
                        </div>
                        </a>
                        </span>
						<div id="ephone" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                           <input id="cphone" class="input100" type="tel" maxlength="10"  name="phone">
                           <span class="focus-input100"></span>
                           <span id="erphone" class="label-input100">Phone number <span class="create">*</span></span>
						   <span id="errmsgg" class="err-valid"></span>
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
                           <input id="cemail" class="input100" type="email" name="email" maxlength="99">
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
						   <button type="button" id="rg-save" class="login100-form-btn" style="position:relative;">
                          <span id="submitotp"> Submit </span>   <span id="loader" style="position:relative;z-index:9999;"></span>
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
					 <div id="sucregister"></div>
                  </div>
               </div>
            </div>
         </div>
		 <div id="successmsg"></div>
      </div>
<?php } ?>
	  </script>
      <!-- <div class="aside-backdrop"></div> -->
      <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!--header starts-->
		 <?php $cururl = current_url();
		 
				$base = base_url();
		 if($cururl == $base){
			 ?>
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
               <div class="container">
                  <button class="navbar-toggler hidden-xs-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>"> <img class="img-rounded" src="<?php echo base_url(); ?>web-assets/images/storkks_logo.png" alt=""> </a>
                  <div class="collapse navbar-toggleable-sm  float-sm-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
                    
                       
						<?php $c_id =$this->session->userdata('customer_id'); if(empty($c_id)) {?>
					   <li class="nav-item"> <a href="#" class="nav-link" href="<?php echo base_url(); ?>" onclick="$('.aside').asidebar('open')">Login / Sign up</a> </li>
						<?php }else{ ?>
						 <li class="nav-item dropdown"> <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $c_name =$this->session->userdata('customer_name'); ?></a>
                                <div class="dropdown-menu"> 
								<a class="dropdown-item" href="<?php echo base_url('My-account'); ?>">Profile</a>
							
                                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="<?php echo base_url('Products/logout'); ?>">Logout</a> </div>
                            </li>
						<?php 
						} ?>
						 
					 
                     </ul>
                  </div>
               </div>
            </nav>
            <!-- /.navbar -->
         </header>
		 <?php }else{?>
		 <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark nav-bg">
               <div class="container">
                  <button class="navbar-toggler hidden-xs-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>"> <img class="img-rounded" src="<?php echo base_url(); ?>web-assets/images/storkks_logo.png" alt=""> </a>
                  <?php  $cururl = current_url();
				$cntlr = $this->uri->segment(1);  
				$baser = 'Restaurants';
				if($cntlr == $baser){
				?>
				  <a class="categories1 dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-th" aria-hidden="true"></i>
				<?php  current_url(); ?>Categories</a> 
				<ul class="categories-sec dropdown-menu mega-dropdown-menu">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div>
                     <h5>Recommended</h5>
                  </div>
                  <ul class="rec">
				  <?php if(!empty($_GET['city'])){
					  $city = $_GET['city'];
				  }else{
					  $city=$this->uri->segment(3); 
				  }
				  ?>
				     <?php foreach($csns as $p){ ?>
                     <li><a href="<?php echo base_url('Restaurants').'/'.'Search'.'/'.$city.'/'.$p['id']; ?> "><?php echo $p['name']; ?></a></li>
                     <?php  } ?>
                  </ul>
               </div>
               <div class="col-sm-6">
                  <div>
                     <h5>Most Popular</h5>
                  </div>
                  <ul class="rec">
                    <?php 
						   foreach($mostpopular as $r){ ?>
					<li>
                        <a class="dummy-media-object" href="<?php echo base_url('Profile/').$r['id']; ?>" style="background:url(<?php echo base_url(); ?>uploads/images/<?php echo $r['shop_logo']; ?>);">
                           <h3><?php echo $r['name']; ?></h3>
                        </a>
                     </li>
					 <?php } ?>
                   
                  </ul>
               </div>
            </div>
         </div>
      </ul>
				<div class="cur-loc"><i class="fa fa-map-marker" aria-hidden="true" style="color:#f30"></i> <span id="ipp"></span> <span class="sr-only">(current)</span></div><?php }?>
				
                  <div class="collapse navbar-toggleable-sm  float-sm-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
                        
						
						
                        <?php $c_id =$this->session->userdata('customer_id');
						if(empty($c_id)) {?>
					   <li class="nav-item"> <a href="#" class="nav-link" href="<?php echo base_url(); ?>" onclick="$('.aside').asidebar('open')">Login / Sign up</a> </li>
						<?php }else{ ?>
						 <li class="nav-item dropdown"> <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $c_name =$this->session->userdata('customer_name'); ?></a>
                                <div class="dropdown-menu"> 
								<a class="dropdown-item" href="<?php echo base_url('My-account'); ?>">Profile</a>
								
                                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="<?php echo base_url('Products/logout'); ?>">Logout</a> </div>
                            </li>
											
						<?php  }?>
						
                       
                     </ul>
                  </div>
               </div>
            </nav>
            <!-- /.navbar -->
         </header>
		 <?php }?>
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/notifIt.css">