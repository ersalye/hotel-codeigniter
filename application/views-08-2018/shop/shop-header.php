
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Storkks</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
     <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/extensions/pace.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/unslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/Climacons-Font-master/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/style1.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/morris.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/app.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/colors.min.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/vertical-overlay-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/style2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/timeline.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/star.rating.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/bootstrap-clockpicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/dropify.min.css">
    

   
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar">
<style>
li.chover {
    background: #344054 !important;
}
</style>
    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="nav-item mobile-menu hidden-md-up float-xs-left">
                        <a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Shop'); ?>" class="navbar-brand">
                            <img alt="stack admin logo" src="<?php echo base_url(); ?>restaurant-assets/images/logo.png" width="130" class="brand-logo">
                            
                        </a>
                    </li>
                    <li class="nav-item hidden-md-up float-xs-right">
                        <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content container-fluid">
                <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                    <ul class="nav navbar-nav">
                        <li class="nav-item hidden-sm-down">
                            <a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item hidden-sm-down">
                            <a href="#" class="nav-link nav-link-expand"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item nav-search">
                            <a href="#" class="nav-link nav-link-search"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <div class="search-input">
                                <form  method="get" action="">
                                <input type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" placeholder="Explore Stack..." class="input" name="order_id">
                                </form>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-xs-right">
                        <li class="dropdown dropdown-notification nav-item">
                            <a href="<?php echo base_url('Shop'); ?>"  class="nav-link nav-link-label">
                                <i class="ficon ft-bell"></i>
                                <span class="tag tag-pill tag-default tag-danger tag-default tag-up" id="tot_incom_order">0</span>
                            </a>
                        
                        </li>
                        <li class="dropdown dropdown-notification nav-item">
                            
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                                <span class="avatar avatar-online">
                                <img src="<?php echo base_url(); ?>restaurant-assets/images/mac.png" alt="avatar">
                     <i></i></span><span class="user-name"><?php echo $this->session->userdata['Shopname']; ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a href="<?php echo base_url(); ?>Shop/ChangePwd" class="dropdown-item">
                                     Change Password
                                </a>
                                <a href="<?php echo base_url(); ?>/Shop_login/logout" class="dropdown-item">
                                    <i class="ft-power"></i> Logout
                                </a>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
	<?php  $menut = $this->uri->segment(2); 
	if($menut == 'Dashboard'){	$daclass = "active";	}else{	$daclass = "";}
	if($menut == 'Profile'){$pclass="active"; }else{		$pclass="";	}
	if($menut == 'Addons' || $menut == 'AddAddons' || $menut == 'Addonscat'){ $adclass="active open"; }  else {		$adclass="";	}
	if($menut == 'AddAddons'){ $aas="chover"; }  else {		$aas="";	}
	if($menut == 'Addonscat'){ $aascat="chover"; }  else {		$aascat="";	}
	if($menut == 'Addons'){ $ads="chover"; }  else {		$ads="";	}
	if($menut == 'Category' || $menut == 'Addcategory'){$acclass="active open";}else {		$acclass="";	}
	if($menut == 'Addcategory'){$acy="chover";}else {$acy="";}
	if($menut == 'Category'){$ac="chover";}else { $ac="";	}
	if($menut == 'Products' || $menut == 'AddProducts'){$apclass="active open";}else {		$apclass="";	}
	if($menut == 'Products' ){$apc="chover";}else {$apc="";}
	if($menut == 'AddProducts'){$apa="chover";}else {$apa="";}
	if($menut == 'Deliveries'){$dclass="active"; }else{		$dclass="";	}
	?>
	
      <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
        <div class="main-menu-content">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                <li class=" navigation-header"><span>Restaurant <?php //echo $menut ?> </span><i data-toggle="tooltip" data-placement="right" data-original-title="General" class=" ft-minus"></i>
                </li>
                <li class="<?php echo $daclass; ?> nav-item">
                    <a href="<?php echo base_url(); ?>Shop/Dashboard"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</a>
                </li>
                <!--<li class=" nav-item">
                    <a href="#"><i class="ft-monitor"></i><span data-i18n="" class="menu-title">Dispatcher</span></a>
                </li>-->
                <li class="<?php echo $pclass; ?> nav-item"><a href="<?php echo base_url(); ?>Shop/Profile"><i class="fa fa-cutlery"></i><span data-i18n="" class="menu-title">Restaurant</span></a>
                    
                </li>
                <li class="<?php echo $adclass; ?> nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span data-i18n="" class="menu-title">Addons</span></a>
                    <ul class="menu-content">
                        <li class="<?php echo $ads; ?>"><a href="<?php echo base_url(); ?>Shop/Addons" class="menu-item">Addons List</a></li>
                        <li  class="<?php echo $aas; ?>"><a href="<?php echo base_url(); ?>Shop/AddAddons" class="menu-item">Add Addons</a></li>
						<li  class="<?php echo $aascat; ?>"><a href="<?php echo base_url(); ?>Shop/Addonscat" class="menu-item">Addons Category</a></li>
                    </ul>
                </li>
                 <li class="<?php echo $acclass; ?> nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span data-i18n="" class="menu-title">Category</span></a>
                    <ul class="menu-content">
                        <li class="<?php echo $ac; ?>"><a href="<?php echo base_url(); ?>Shop/Category" class="menu-item">Category List</a></li>
                        <li class="<?php echo $acy; ?>"><a href="<?php echo base_url(); ?>Shop/Addcategory" class="menu-item">Add Category</a></li>
                    </ul>
                </li>
                <li class="<?php echo $apclass; ?> nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span data-i18n="" class="menu-title">Product</span></a>
                    <ul class="menu-content">
                        <li class="<?php echo $apc; ?>"><a href="<?php echo base_url(); ?>Shop/Products" class="menu-item">Product List</a></li>
                        <li class="<?php echo $apa; ?>"><a href="<?php echo base_url(); ?>Shop/AddProducts" class="menu-item">Add Product</a></li>
                    </ul>
                </li>
                <li class="<?php echo $dclass; ?> nav-item">
                    <a href="<?php echo base_url(); ?>Shop/Paymentinfo"><i class="fa fa-shopping-basket"></i><span data-i18n="" class="menu-title">Payment Info</span></a>
                </li> 
				<li class="<?php echo $dclass; ?> nav-item">
                    <a href="<?php echo base_url(); ?>Shop/Deliveries"><i class="fa fa-shopping-basket"></i><span data-i18n="" class="menu-title">Deliveries</span></a>
                </li>
                <!-- <li class=" nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span data-i18n="" class="menu-title">Banner</span></a>
                    <ul class="menu-content">
                        <li><a href="https://foodie.deliveryventure.com/shop/banner" class="menu-item">Banner</a></li>
                        <li><a href="https://foodie.deliveryventure.com/shop/banner/create" class="menu-item">Add Banner</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>     
