
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Storkks</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>admin-assets/images/favicon.png">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/extensions/pace.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/unslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/Climacons-Font-master/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/style1.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/morris.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/app.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/colors.min.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/vertical-overlay-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/style2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/timeline.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/star.rating.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin-assets/css/bootstrap-clockpicker.min.css">
    
   
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar">
    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="nav-item mobile-menu hidden-md-up float-xs-left">
                        <a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="navbar-brand">
                            <img alt="stack admin logo" src="<?php echo base_url(); ?>admin-assets/images/logo.png" width="130" class="brand-logo">
                            
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
                           <!--  <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                                <i class="ficon ft-bell"></i>
                                <span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span>
                            </a> -->
                            <!-- <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
                                </li>
                                <li class="list-group scrollable-container">
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left valign-middle"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left valign-middle"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left valign-middle"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left valign-middle"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left valign-middle"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time></small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
                            </ul> -->
                        </li>
                        <li class="dropdown dropdown-notification nav-item">
                            <!-- <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                                <i class="ficon ft-mail"></i>
                                <span class="tag tag-pill tag-default tag-warning tag-default tag-up">3</span>
                            </a> -->
                            <!-- <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0">
                                        <span class="grey darken-2">Messages</span>
                                        <span class="notification-tag tag tag-default tag-warning float-xs-right m-0">4 New</span>
                                    </h6>
                                </li>
                                <li class="list-group scrollable-container">
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="<?php echo base_url(); ?>admin-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Margaret Govan</h6>
                                                <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="<?php echo base_url(); ?>admin-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Bret Lezama</h6>
                                                <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="<?php echo base_url(); ?>admin-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Carie Berra</h6>
                                                <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="<?php echo base_url(); ?>admin-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Eric Alsobrook</h6>
                                                <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                            </ul> -->
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                                <span class="avatar avatar-online">
                                                                <img src="<?php echo base_url(); ?>admin-assets/images/avatar-s-1.png" alt="avatar">
                                                                <i></i>
                                </span><span class="user-name">Admin</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                               <!--   <a href="#" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>
                                <a href="#" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>
                                <a href="#" class="dropdown-item"><i class="ft-mail"></i> My Inbox</a>
                                <a href="#" class="dropdown-item"><i class="ft-check-square"></i> Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-message-square"></i> Chats</a> 
                                <div class="dropdown-divider"></div>-->
                             <a href="<?php echo base_url(); ?>Admin_login/logout" class="dropdown-item"  >
                                    <i class="ft-power"></i> Logout
                                </a>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
     <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
        <div class="main-menu-content">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                <li class=" navigation-header"><span>General</span><i data-toggle="tooltip" data-placement="right" data-original-title="General" class=" ft-minus"></i>
                </li>
                <li class="active nav-item">
                    <a href="#"><i class="ft-home"></i><span data-i18n="" class="menu-title">Administrador</a>
                </li>
                <li class=" nav-item">
                    <a href="#"><i class="ft-monitor"></i><span data-i18n="" class="menu-title">Dispatcher</span></a>
                </li>
                                <li class="nav-item   has-open">
                    <a href="#">
                        <i class="fa fa-handshake-o"></i>
                        <span data-i18n="" class="menu-title">Dispute</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="#" class="menu-item">User Disputes</a></li>
                        <li><a href="#" class="menu-item">DB Disputes</a></li>
                        <li><a href="#" class="menu-item">Restaurant Disputes</a></li>
                        <li><a href="#" class="menu-item">Common Dispute Message</a></li>
                        
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="fa fa-cutlery"></i><span data-i18n="" class="menu-title">Restaurant</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/shops" class="menu-item">Restaurant List</a></li>
                        <li><a href="<?php echo base_url(); ?>Admin/Addshop" class="menu-item">Add Restaurant</a></li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="fa fa-users"></i><span data-i18n="" class="menu-title">Delivery People</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/DeliveryPeople" class="menu-item">Delivery People List</a></li>
                        <li><a href="<?php echo base_url(); ?>Admin/AddPeople" class="menu-item">Add Delivery People</a></li>
                       <!-- <li><a href="#" class="menu-item">Shift Details</a></li>-->
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="fa fa-users"></i><span data-i18n="" class="menu-title">Dispute Manager</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/DisputeManager" class="menu-item">Dispute Manager List</a></li>
                        <li><a href="<?php echo base_url(); ?>Admin/AddManager" class="menu-item">Add Dispute Manager</a></li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span data-i18n="" class="menu-title">Cuisines</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/Cuisines" class="menu-item">Cuisines List</a></li>
                        <li><a href="<?php echo base_url(); ?>Admin/AddCuisines" class="menu-item">Add Cuisines</a></li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span data-i18n="" class="menu-title">Promocodes</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/Promocodes" class="menu-item">Promocodes List</a></li>
                        <li><a href="<?php echo base_url(); ?>Admin/AddPromocode" class="menu-item">Add Promocodes</a></li>
                    </ul>
                </li>
                 <li class=" nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span data-i18n="" class="menu-title">Resturant Banner</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/RestaurentBanners" class="menu-item">Resturant Banner List</a></li>
                        <li><a href="<?php echo base_url(); ?>Admin/AddRestaurentBanner" class="menu-item">Add Resturant Banner</a></li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span data-i18n="" class="menu-title">Notice Board</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/Notice" class="menu-item">Notice Board List</a></li>
                        <li><a href="<?php echo base_url(); ?>Admin/Addnotice" class="menu-item">Add Notice Board</a></li>
                        <li><a href="<?php echo base_url(); ?>Admin/CustomPush" class="menu-item">Custum Push</a></li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span data-i18n="" class="menu-title">User</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url(); ?>Admin/Users" class="menu-item">User List</a></li>
                        <li><a href="<?php echo base_url(); ?>Admin/AddUser" class="menu-item">Add User</a></li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span data-i18n="" class="menu-title">Page</span></a>
                    <ul class="menu-content">
                        <li><a href="#" class="menu-item">About us</a></li>
                        <li><a href="#" class="menu-item">FAQ</a></li>
                        <li><a href="#" class="menu-item">Privacy</a></li>
                        <li><a href="#" class="menu-item">Contact Us</a></li>
                        <li><a href="#" class="menu-item">Terms and Condition</a></li>
                    </ul>
                </li>
                 <li class=" nav-item"><a href="#"><i class="fa fa-shopping-bag"></i><span data-i18n="" class="menu-title">Leads</span></a>
                    <ul class="menu-content">
                        <li><a href="#" class="menu-item">Restaurant Leads</a></li>
                        <li><a href="#" class="menu-item">Delivery People</a></li>
                        <li><a href="#" class="menu-item">Newsletter</a></li>
                    </ul>
                </li>
               
               
               
                <li class=" nav-item">
                    <a href="<?php echo base_url(); ?>Admin/Deliveries"><i class="fa fa-shopping-basket"></i><span data-i18n="" class="menu-title">Deliveries</span></a>
                </li>
                
               
<!--                   <li class=" nav-item">
                    <a href="#"><i class="fa fa-shopping-basket"></i><span data-i18n="" class="menu-title">Translation</span></a>
                </li>-->
                <li class=" nav-item"><a href="#"><i class="fa fa-cog"></i><span data-i18n="" class="menu-title">Setting</span></a>
                        <ul class="menu-content">
                            <li><a href="#"><i class="fa fa-cog"></i><span data-i18n="" class="menu-title">Site Setting</a></li>
                          
                        </ul>
                </li>
                                                </ul>
        </div>
    </div>