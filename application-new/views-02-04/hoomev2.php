

<script>
    var rootUrl = '<?php echo base_url(); ?>'
    var isAllow = false;
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmi_ZOEHu6_jHaOuRsf6G1ULq5KZ_BlQQ&libraries=places"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div>
    


 <div>
     <div class="spinner" style="display: none;">
         <div class="spinner-center">
             <img src="<?php echo base_url(); ?>cnt/images/loader.gif" />
         </div>
     </div>
     <style>
         .not-pop .modal-header {
             height:auto !important;
             padding: 5px !important;

         }
         .not-pop .modal-header .modal-title {
                 margin-top: 0px !important;
                 color:#fff !important;

         }
         .not-pop .modal-footer{
             height:auto !important;
             padding: 5px !important;
          }
         .not-pop .modal-footer .btn{
             margin-top:0 !important;
             font-size: 10px !important;
             padding: 2px 5px !important;

         }
         .not-pop .modal-body{
              padding: 15px !important;
              text-align: center !important;
         }
     </style>
     <div class="modal modal-alert" id="alertMessage" role="dialog" data-keyboard="false" data-backdrop="static">
         <div class="modal-dialog modal-sm not-pop">
             <div class="modal-content">
                 <div class="modal-header" id="alertHeader">
                     
                     <p class="modal-title"><span id="spnalertTitle"></span></p>
                 </div>
                 <div class="modal-body">
                     <span id="_alertMessage" class="message-container"></span>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnAlertMessageClose"><i class="fa fa-times-circle-o"></i> Close</button>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal" id="ConfirmDeletePopup" role="dialog" data-keyboard="false" data-backdrop="static">
         <div class="modal-dialog modal-sm">
             <div class="modal-content">
                 <div class="modal-header" style="background-color: indianred;color: #000;font-weight: bold;padding:15px;">
                     <span>Confirm Delete</span>
                     <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                     <p class="modal-title"></p>
                 </div>
                 <div class="modal-body" style="padding:20px;padding-top:0;border-bottom:1px solid #ccc;font-weight:bold;">
                     <span id="confirmMessage">Are you sure do you want to delete?</span>
                 </div>
                 <div class="modal-footer" style="padding:10px;">
                     <button class="btn btn-info" id="btnDeleteConfirm"><i class="fa fa-check-circle-o"></i> Yes</button>
                     <button class="btn btn-danger" data-dismiss="modal" id="btnConfirmClose"><i class="fa fa-times-circle-o"></i> No</button>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal modal-alert" id="alertOTP" role="dialog" data-keyboard="false" data-backdrop="static">
         <div class="modal-dialog modal-sm">
             <div class="modal-content">
                 <div class="modal-header" id="alertHeader">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <p class="modal-title"><span id="spnalertTitle">OTP</span></p>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">
                         <span id="_alertOTPMessage" class="message-container"></span>
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" id="txtOTP" placeholder="OTP">
                         <i class="form-group__bar"></i>
                     </div>                    
                 </div>
                 <div class="modal-footer">
                     <input type="button" class="btn btn-success" value="Yes" id="btnSubmitOTP" />
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                 </div>
             </div>
         </div>
     </div>
     <div class="modal modal-alert" id="alertMessageforms" role="dialog" data-keyboard="false" data-backdrop="static">
         <div class="modal-dialog modal-sm not-pop">
             <div class="modal-content">
                 <div class="modal-header" id="alertHeaderforms">
                     
                     <p class="modal-title"><span id="spnalertTitleforms"></span></p>
                 </div>
                 <div class="modal-body">
                     <span id="_alertMessageforms" class="message-container"></span>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-success pull-left" id="btnRedirect" ><i class="fa fa-user"></i> View Profile</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnAlertMessageCloseforms"><i class="fa fa-times-circle-o"></i> Close</button>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Viewham</title>
    
    
    
    <link href="<?php echo base_url(); ?>cnt/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>cnt/intlTelInput.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/dashboard-viewham.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/metisMenu.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/elegant-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/pe-7-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/pe-7-icons-helper.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/jquery-jvectormap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/tether-shepherd.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/jstree-default.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/styles.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/dashboard-projects.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>cnt/view-bootstrap.css" />
    <link href="<?php echo base_url(); ?>cnt/home-custom.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>cnt/Dev.css" rel="stylesheet" />
    <style>
        input[type=file] {
        display: none;
    }
        .refCode {
            font-size: 12px;
            color: #e74b24;
            padding-top: 1px;
            display:none;
        }
        .applyRC{
            cursor: pointer;
            border-color: #ccc;
            background: #00b9f5;
            color: #fff;
        }
    </style>
    <script src="<?php echo base_url(); ?>scr/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>scr/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>scr/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>scr/CommonUtil.js"></script>
    <script src="<?php echo base_url(); ?>scr/intlTelInput.min.js"></script>
    <script src="<?php echo base_url(); ?>scr/Viewham.js"></script>
</head>
<body class="preload" data-trigger="tutorial">
    <header class="header">
	<input type="hidden" id="hdnOtpType" />
        <div class="branding float-left">
            <h1 class="logo text-center">
                <span id="spnlogo" style="cursor:pointer;">
                    <span class="nav-label">
                        <span class="highlight"><img src="/Images/viewham_logo.png" style="width:80%;"/></span>
                    </span>
                </span>
            </h1>
        </div>
        <div class="topbar">
            <div class="search-container" style="display:none">
                <i id="main-search-toggle" class="fa fa-search icon"></i>
                <div id="main-search-input-wrapper" class="main-search-input-wrapper">
                    <input type="text" id="main-search-input" class="main-search-input form-control" placeholder="Search...">
                    <span id="clear-search" aria-hidden="true" class="fa fa-times icon clear-search" style="font-size:12px;"></span>
                </div>
            </div>
           
            <div class="navbar-tools">                
                <div class="user-container dropdown" style="float:none;padding-top: 7px;">
                    <div class="dropdown-toggle" id="dropdownMenu-user" data-toggle="dropdown" aria-expanded="true" role="button">
                        <label style="cursor:pointer;">Registration</label>
                        <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="dropdown-menu form-login stop-propagation registration-dropdown" role="menu">
                        <span class="arrow"></span>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="txtRegName" maxlength="100" onKeyPress="return ValidateAlpha(event);">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="txtRegEmail">
                            </div>
                            <div class="form-group">
                                <div> <label>Password</label></div>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="txtRegPassword" maxlength="12">
                                    <span class="input-group-addon" id="spnDisplayRegPwd" style="cursor:pointer"><i class="fa fa-eye change" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mobile number</label>
                                <input type="tel" class="form-control" id="txtRegMobileNo" maxlength="10" style="width:320px;" placeholder="Mobile number">
                            </div>
                            <div class="form-group">
                                <div>
                                    <label class="clickhere" id="lblHRC" style="font-size: 11px;">Have Reference Code?</label>
                                </div>
                                <div style="display:none;" id="divRefCode">
                                    <label>Reference Code</label>
                                    <div class="input-group">
                                       <input type="text" id="txtRefCode" class="form-control" />
                                        <span class="input-group-addon applyRC" id="spnApplyRC">Apply</span>
                                    </div>
                                    <input type="hidden" id="hdnRefby"/>
                                    <span class="refCode" id="spnRefCode"></span>
                                </div>
                            </div>
                            <p><small>By Signing up with Viewham, you're agreeing to our <a  href="#">terms and conditions</a>.</small></p>

                            <button class="btn btn-primary btn-block m-t-10 m-b-10" id="btnRegister"><i class="fa fa-user-circle"></i> Register</button>
                            <div class="text-center">
                                <span id="spnRegisterReturnMessage" style="color:red" class="clear"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-container dropdown" style="float:none;padding-top: 7px;">
                    <div class="dropdown-toggle" id="dropdownMenu-user" data-toggle="dropdown" aria-expanded="true" role="button">
                        <label style="cursor:pointer;">Login</label>
                        <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="dropdown-menu form-login stop-propagation registration-dropdown"  role="menu"  id="dropLogin" style="width:295px;">
                        <span class="arrow"></span>
                        <div class="col-sm-12 form-group">
                            <div><label>Mobile/Email</label></div>
                            <input type="text" id="txtMobileOrEmail" name="LoginName" class="form-control" placeholder="Email or Mobile">
                        </div>
                        <div class="col-sm-12 form-group">
                            <div><label>Password</label></div>
                            <div class="input-group">
                                <input type="password" id="txtLoginPassword" name="Password" class="form-control" placeholder="Password">
                                <span class="input-group-addon" id="spnDisplayPwd" style="cursor:pointer"><i class="fa fa-eye change" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-primary btn-block m-t-10 m-b-10" id="btnLogin"><i class="fa fa-lock"></i> Login</button>
                        </div>
                        <div class="col-sm-12 form-group">
                            <div class="text-center">
                                <div><span id="btnforgetpassword" class="clickhere"><small>Forgot Email/Password?</small></span></div>
                                <div><span id="spnLoginReturnMessage" style="color:red" class="clear"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-container dropdown">
                    <style>
                        ul.s-post{
                            margin:0;
                        }
                        ul.s-post li:nth-child(1){
                            display:inline-block;
                            width:80%;

                        }
                        ul.s-post li:nth-child(2){
                            display:inline-block;
                            width:18%;

                        }
                        ul.s-post li:nth-child(2) input{
                                margin-top: -2px;
                        }
                    </style>
                    <ul class="s-post">
                    <li>
                        <select class="form-control select-view" id="sltPostAllSkills">
                            <option value="0">Select Post</option>
                            <option value="PBP">Post a business proposal</option>
                            <option value="RFF">Request for funding</option>
                            <option value="OW">Offer a work</option>
                            <option value="RFW">Request for work</option>
                            <option value="WAR">Write a review</option>
                        </select>   
                    </li>
                        <li>
                            <input type="button" value="Go" class="btn btn-success form-group" id="btnGoPosts" />
                        </li>
                    </ul>
                    
                    
                </div>
            </div>
        </div>
    </header>
    <style>
        .view1 {
          
            padding: 10px 10px 0px 10px;
            float: left;
            overflow: hidden;
            min-height: 300px;
            position: relative;
            text-align: center;
            width: 100%;
            
            cursor: default;
            background: url(../Images/survive.jpg) no-repeat center center;
            background-size: 100% !important;
        }

            .view1:hover {
                transition: all 0.4s linear !important;
                background: #fff !important;
            }

            .view1 .mask, .view1 .content {
                width: 100%;
                position: absolute;
                overflow: hidden;
                left: 0;
            }

            .view1 img {
                display: block;
                position: relative;
            }

            .view1 h2 {
                text-transform: uppercase;
                color: #fff;
                text-align: center;
                position: relative;
                font-size: 17px;
                margin-bottom: 0;
            }

            .view1 p {
                font-family: Georgia, serif;
                font-style: italic;
                font-size: 12px;
                position: relative;
                color: #fff;
                text-align: center;
                margin-bottom: 0;
            }

            .view1 a.info {
                display: inline-block;
                text-decoration: none;
                padding: 7px 14px;
                background: #000;
                color: #fff;
                text-transform: uppercase;
                box-shadow: 0 0 1px #000;
            }

                .view1 a.info:hover {
                    box-shadow: 0 0 5px #000;
                }

        .view-first img {
            transition: all 0.2s linear !important;
        }

        .view-first .mask {
            opacity: 0;
            transition: all 0.8s ease-in-out !important;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .view-first h2 {
            transform: translateY(-30px) !important;
            opacity: 0;
            transition: all 0.3s ease-in-out !important;
        }

        .view-first p {
            transform: translateY(100px) !important;
            opacity: 0;
            transition: all 0.2s linear !important;
        }

        .view-first a.info {
            opacity: 0;
            transition: all 0.2s ease-in-out !important;
        }

        .view-first:hover img {
            transform: scale(1.1) !important;
        }

        .view-first:hover .mask {
            opacity: 1;
        }

        .view-first:hover h2,
        .view-first:hover p,
        .view-first:hover a.info {
            opacity: 1;
            transform: translateY(0px) !important;
        }

        .view-first:hover p {
            transition-delay: 0.1s !important;
        }

        .view-first:hover a.info {
            transition-delay: 0.2s !important;
        }

        .nav-tabs-theme-3 {
            margin-bottom: 0;
        }

        .tabpanel1 .tab-content > .active {
            display: block;
            min-height: 210px;
            background: #fff;
        }

        .learn-view {
            background: url(../Images/learn.png) no-repeat center center;
        }

        legend {
            display: block;
           
            z-index: 9;
            left: 5px;
            top: 5px;
            width: auto;
            margin-bottom: 0px;
            font-size: 20px;
            font-weight: bold;
            line-height: inherit;
            color: #333;
            border-bottom: 0px solid #e5e5e5;
            color: #fff;
            background: #cccccc9c;
            padding: 2px 5px;
            border-bottom-right-radius: 4px;
        }
         legend.my-leg {
            display: block;
            position: absolute;
            z-index: 9;
            left: 5px;
            top: 5px;
            width: auto;
            margin-bottom: 0px;
            font-size: 20px;
            font-weight: bold;
            line-height: inherit;
            color: #333;
            border-bottom: 0px solid #e5e5e5;
            color: #fff;
            background: #cccccc9c;
            padding: 2px 5px;
            border-bottom-right-radius: 4px;
        }

        fieldset {
            position: relative;
        }

        .border-sec {
            margin-bottom: 0px;
            padding: 0;
            border: 5px solid #ccc;
        }
        .tab-content.view-land > .tab-pane , .idea-land {
            background-size: contain !important;
            background-position: center center !important;
            background-repeat: no-repeat !important;
        }
    </style>
   
    <div id="content-wrapper" class="content-wrapper view view-account">
        <div class="container-fluid">
            <!-- <h2 class="view-title">My Account</h2> -->
            <div class="row">
                <div class="module-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <fieldset>
                        <legend class="my-leg">Learn</legend>
                        <section class="module view1 learn-view view-first border-sec" style="min-height: 194px;">
                            <div class="module-inner">
                                <!-- <h4 class="text-center" style="color: #fff;font-size: 60px;opacity: 0.5;">Learn</h4> -->
                                <div class="mask">
                                    <div role="tabpanel" class="tabpanel1 ">
                                        <!-- Nav tabs -->
                                        <!-- Tab panes -->
                                        <h2>
                                            <div class="tab-content view-land">
                                                <div role="tabpanel" class="tab-pane active" id="home-2" style="background:url(../Images/learn-hover.jpg) ;min-height:174px;">
                                                </div>
                                            </div>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </fieldset>
                </div>
            </div><br>
            <div class="row">
                <div class="module-wrapper col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <fieldset>
                        <legend class="my-leg">Survive</legend>
                        <section class="module view1 view-first border-sec">
                            <div class="module-inner">
                                <!-- <h4 class="text-center" style="color: #fff;font-size: 60px;margin-top:10%;opacity: 0.5;">Survive</h4> -->
                                <div class="mask">
                                    <div role="tabpanel" class="tabpanel1 ">
                                        <!-- Nav tabs -->
                                        <!-- Tab panes -->
                                        <h2>
                                            <div class="tab-content view-land">
                                                <div role="tabpanel" class="tab-pane active"  id="BtnProfessionalAddEdit" style="background:url(../Images/pro.jpg);">
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="BtnHobbyAddEdit" style="background:url(../Images/hobby.jpg);">
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="BtnOtherAddEdit" style="background:url(../Images/other.jpg);">
                                                </div>
                                            </div>
                                        </h2>
                                        <p>
                                            <ul class="nav nav-tabs nav-tabs-theme-3 " role="tablist">
                                                <li role="presentation" class="active"><a href="#BtnProfessionalAddEdit" aria-controls="BtnProfessionalAddEdit" role="tab" data-toggle="tab"><i class="fa fa-black-tie" aria-hidden="true"></i><br><span class="hidden-xs hidden-sm">Professional Skill</span></a></li>
                                                <li role="presentation"><a href="#BtnHobbyAddEdit" aria-controls="BtnHobbyAddEdit" role="tab" data-toggle="tab"><i class="fa fa-gamepad" aria-hidden="true"></i><br><span class="hidden-xs hidden-sm">Hobby Skill</span></a></li>
                                                <li class="last" role="presentation"><a href="#BtnOtherAddEdit" aria-controls="BtnOtherAddEdit" role="tab" data-toggle="tab"><i class="fa fa-users" aria-hidden="true"></i><br><span class="hidden-xs hidden-sm">Other Skill</span></a></li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </fieldset>
                </div>
                <div class="module-wrapper col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <fieldset>
                        <legend class="my-leg">Grow</legend>
                        <section class="module view1 view-first border-sec" style="background:url(../Images/grow.jpg);">
                            <div class="module-inner">
                                <!-- <h4 class="text-center" style="color: #fff;font-size: 60px;margin-top:10%;opacity: 0.5;">Grow</h4> -->
                                <div class="mask">
                                    <div role="tabpanel" class="tabpanel1 ">
                                        <!-- Nav tabs -->
                                        <!-- Tab panes -->
                                        <h2>
                                            <div class="tab-content view-land">
                                                <div role="tabpanel" class="tab-pane active" id="btnOpen-Entrepreneur" style="background:url(../Images/entrepreneur.jpg);">
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="btnOpen-Investor" style="background:url(../Images/investor.jpg);">
                                                </div>                                                
                                            </div>
                                        </h2>
                                        <p>
                                            <ul class="nav nav-tabs nav-tabs-theme-3 " role="tablist">
                                                <li role="presentation" class="active"><a href="#btnOpen-Entrepreneur" aria-controls="btnOpen-Entrepreneur" role="tab" data-toggle="tab"><i class="fa fa-male" aria-hidden="true"></i><br><span class="hidden-xs hidden-sm">Entrepreneur</span></a></li>
                                                <li role="presentation" ><a href="#btnOpen-Investor" aria-controls="btnOpen-Investor" role="tab" data-toggle="tab"><i class="fa fa-inr" aria-hidden="true"></i><br><span class="hidden-xs hidden-sm">Investor</span></a></li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </fieldset>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="module-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <fieldset>
                        <legend class="my-leg">Idea Hub</legend>
                        <section class="module view1 learn-view view-first border-sec" style="background:url(../Images/idea-hub-bg.jpg);min-height: 194px;">
                            <div class="module-inner">
                                <!-- <h4 class="text-center" style="color: #fff;font-size: 60px;opacity: 0.5;">Learn</h4> -->
                                <div class="mask">
                                    <div role="tabpanel" class="tabpanel1 ">
                                        <!-- Nav tabs -->
                                        <!-- Tab panes -->
                                        <h2>
                                            <div class="tab-content view-land">
                                                <div role="tabpanel" class="tab-pane active" id="home-2" style="background:url(../Images/idea-hub.jpg) ;min-height:174px;">
                                                </div>
                                            </div>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </fieldset>
                </div>
            </div>
            
        </div>
    </div>
    <div class="modal fade" id="myModalPost" role="dialog" style="display:none;z-index: 100;" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="module-title" style="color:darkblue" id="divPostName"></h3>
                </div>
                <div class="modal-body height">
                    <div id="DivPostSkills"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnRedirectDshaboard">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myBusinessProposalModal" role="dialog" style="display:none;z-index: 100;" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="module-title" style="color:darkblue">
                        Business Proposal
                    </h3>
                </div>
                <div class="modal-body height">
                    <div id="DivOSkills">
                        <script src="<?php echo base_url(); ?>scr/Countries.js"></script>
<script src="<?php echo base_url(); ?>scr/Viewham.js"></script>
<script src="<?php echo base_url(); ?>scr/Franchise.js"></script>
<script src="<?php echo base_url(); ?>scr/Outsourcework.js"></script>
<script>
    var SkillsListData = [];
    var IndustryData = [];
    function minmax(value, min, max) {
        if (parseInt(value) < min || isNaN(parseInt(value)))
            return 1;
        else if (parseInt(value) > max)
            return 100;
        else return value;
    }
    function ValidateAlpha(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 && charCode != 46)

            return false;
        return true;
    }
    $(function () {
       
        $('#divOutsource,#divFranchise').hide();
        $('#divPostName').text("Offer a work");
        var rootUrl = '<?php echo base_url(); ?>'
        var _url = window.location.pathname;
        viewham.setLabelText();
        $('.pbp_qty').numeric();
        var REFGRPLIST = 'SKIL,INDSTY';
        // MasterSkills.Bind(REFGRPLIST);
       

        var options_Indu = {
            placeholder: "Industry",
            pageSize: 50,
            searchIn: 'INDSTY',
            url: rootUrl + "Opportunity/opGetDynamicMasterData",
            minimumSearchTextLength: 2
        };
		
        $('#ddlIndustryBusiness').autofillSelect(options_Indu);
        $('#ddlIndustryOutsource').autofillSelect(options_Indu);
        $('#ddlIndustryFranchise').autofillSelect(options_Indu);

        addNewRow(1);      
        //MasterDetails.BindIndustries(); 
        viewham.loadLocations('txtPost1SearchLocations', 'ddlLocationOB');
        viewham.loadLocations('txtPost2SearchLocations', 'ddlLocationFranchise');
        var $sltLocation = $('#ddlLocationOB');
        $sltLocation.select2({ placeholder: "Select Locations" });
        $('#sltInvesttypeBusiness').select2({ placeholder: "Expected Role" });
        $('#sltPriceInvestBusiness,#sltPriceInvestOutsource,#sltPriceInvestFranchise').val("IN").trigger("change");
        $('#rbtnIndividual').prop('checked', true);
        $('.PostBusinessProposal').on('click', function () {
            var value_ = $(this).val();
            switch (value_) {
                case "B":
                    $('#divBusinessproposal').show();
                    $('#divOutsource, #divFranchise').hide();
                    break;
                case "O":
                    $('#divOutsource').show();
                    $('#divBusinessproposal, #divFranchise').hide();
                    break;
                case "F":
                    $('#divFranchise').show();
                    $('#divOutsource, #divBusinessproposal').hide();
                    break;
                default:
            }
        });
        $("#btnAddSkillSet-bp").unbind('click').click(function () {
            requiredSkill.Add();
        });
        $('#txtInvestamonutMinOutsource,#txtInvestamonutMaxOutsource,#txtIncomeamonutMinOutsource,#txtIncomeamonutMaxOutsource').numeric();
        $('#txtInvestamonutMinBusiness,#txtInvestamonutMaxBusiness,#txtskillQuantity-1').numeric();
        $('#txtIncomeamonutMinBusiness,#txtIncomeamonutMaxBusiness').rnumeric();
        $('#btnBusinessproposalSave').unbind('click').click(function () {
            debugger;
            var sltIndustryB = $('#ddlIndustryBusiness').val();
            var sltLocation = $sltLocation.val();
            var descriptionBusiness = $('#txtProjectDescriptionBusiness').val().trim();
            var sltPriceInvestBusiness = $('#sltPriceInvestBusiness').val();
            var sltInvesttypeBusiness = $('#sltInvesttypeBusiness').val();
            var invsetMinAmountBusiness = parseFloat($('#txtInvestamonutMinBusiness').val());
            var invsetMaxAmountBusiness = parseFloat($('#txtInvestamonutMaxBusiness').val());
            var incomeMinAmountBusiness = parseFloat($('#txtIncomeamonutMinBusiness').val());
            var incomeMaxAmountBusiness = parseFloat($('#txtIncomeamonutMaxBusiness').val());
            var reqSklNamelength = $('.pbp_skil').length;
            var reqSklQtylength = $('.pbp_qty').length;
            var requiredskills = [];
            var Businessdata = {};
            $('#requiedSkillbp .skill').each(function (index, element) {
                var id = $(element).attr('id');
                var skillName = $('#' + id + ' .pbp_skil').val();
                var skillQuantity = $('#' + id + ' .pbp_qty').val();
                var _skill = {};
                _skill.SkillId = skillName;
                _skill.Quantity = skillQuantity;
                if (skillName != 0) {
                    requiredskills.push(_skill);
                }
            });
            if (sltIndustryB == 0) {
                alertMessage("Please select Industry type.", 'Error', 0);
                return false;
            }
            else if (sltLocation == null) {
                alertMessage("Please select location.", 'Error', 0);
                return false;
            }
            else if (descriptionBusiness == '') {
                alertMessage("Please enter description.", 'Error', 0);
                return false;
            }
            if ($('#chkSkilledCandidates').is(':checked')) {
                debugger;
                var value1 = $('.pbp_skil').filter(function () {
                    return this.value != '0';
                });
                var value2 = $('.pbp_qty').filter(function () {
                    return this.value != '' && this.value != 0;
                });
                if (value1.length >= 0 && (value1.length !== reqSklNamelength)) {
                    alertMessage("Skill  is required.", 'Error', 0);
                    return false;
                }
                if (value2.length >= 0 && (value2.length !== reqSklQtylength)) {
                    alertMessage("Quantity is required.", 'Error', 0);
                    return false;
                }
            }
            if ($('#chkInvestor').is(':checked')) {
                //if (sltPriceInvestBusiness == 0) {
                //    alertMessage("Please select Price type.", 'Error', 0);
                //    return false;
                //}
                 if (isNaN(invsetMinAmountBusiness)) {
                    alertMessage("Please enter min amount.", 'Error', 0);
                    return false;
                }
                else if (invsetMinAmountBusiness === 0) {
                    alertMessage("Min amount must be greater than zero.", 'Error', 0);
                    return false;
                }
                else if (isNaN(invsetMaxAmountBusiness)) {
                    alertMessage("Please enter max amount.", 'Error', 0);
                    return false;
                }
                else if (invsetMaxAmountBusiness === 0) {
                    alertMessage("Max amount must be greater than zero.", 'Error', 0);
                    return false;
                }
                else if (invsetMaxAmountBusiness <= invsetMinAmountBusiness) {
                    alertMessage("Max amount must be greater than min amount.", 'Error', 0);
                    return false;
                }
                else if (isNaN(incomeMinAmountBusiness)) {
                    alertMessage("Please enter min share.", 'Error', 0);
                    return false;
                }
                else if (incomeMinAmountBusiness === 0) {
                    alertMessage("Min share must be greater than zero.", 'Error', 0);
                    return false;
                }
                else if (isNaN(incomeMaxAmountBusiness)) {
                    alertMessage("Please enter max share.", 'Error', 0);
                    return false;
                }
                else if (incomeMaxAmountBusiness === 0) {
                    alertMessage("Max share must be greater than zero.", 'Error', 0);
                    return false;
                }
                else if (incomeMaxAmountBusiness <= incomeMinAmountBusiness) {
                    alertMessage("Max share must be greater than min share.", 'Error', 0);
                    return false;
                }
                else if (sltInvesttypeBusiness == 0) {
                     alertMessage("Please select investor type.", 'Error', 0);
                     return false;
                 }
            }
           
            var isConsultant = $('#chkConsultant').is(':checked');
            var isMentor = $('#chkMentor').is(':checked');
            var PostType = $('input[name=BusinessType]:checked').val();
            Businessdata = {
                'Proposal_Type': PostType,
                'Industry_Id': sltIndustryB,
                'Location': sltLocation,
                'Description': descriptionBusiness,
                'CurrencyID': sltPriceInvestBusiness,
                'InvsetMinAmount': invsetMinAmountBusiness,
                'InvsetMaxAmount': invsetMaxAmountBusiness,
                'ShareMinAmount': incomeMinAmountBusiness,
                'ShareMaxAmount': incomeMaxAmountBusiness,
                'Role_Excepted': sltInvesttypeBusiness.toString(),
                'IsConsultant': isConsultant,
                'IsMentor': isMentor,
                'RequiredSkills': requiredskills
            } 
            if ((_url == '/') && !(isAllow)) {
                $('#myLoginModal').modal("show");
                return false;
            }
            $('#myLoginModal').modal("hide");
            $.ajax({
                type: "POST",
                url: rootUrl + "Post/CreateBusinessProposal",
                async: false,
                traditional: true,
                data: JSON.stringify({ 'lobcls_VH_BUSINESSPROPOSAL': Businessdata }),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                beforeSend: function () {
                    loader.show();
                },
                complete: function () {
                    loader.hide();
                },
                success: function (response) {
                    $('#sltPostAllSkills').val("0");
                    if (response.ResponseStatus.toString() == 1) {
                        var notificationData = { 'NOTIFICATION_TYPE': notificationTypeEnum.QuickLinks, 'SUBTYPE': postTypeEnum.EstablishOwnBusiness, 'REF_ID': response.BusinessproposalList[0].ID };
                        Notification.Save(notificationData);
                        var _url = window.location.pathname;
                        if (_url == '/') {
                            $('#btnAlertMessageClose').addClass('RedirectToDashboard');
                            $('.RedirectToDashboard').click(function () { window.location.href = '../Home/Dashboard'; });
                        }
                        alertMessage(response.ResponseMessage, 'success', 1);
                        $('#myModalPost').hide();
                    }
                    else {
                        alertMessage(response.ResponseMessage, 'Error', 0);
                    }
                }
            });
        });
        $("#chkSkilledCandidates").change(function () {
            var ischecked = $(this).is(':checked');
            if (ischecked) {
                $('.addedSkills').show();
                $('#requiedSkillbp').empty();
                addNewRow(1);
            }
            else {
                $('#requiedSkillbp').empty();
                $('.addedSkills').hide();
            }
        });
        $("#chkInvestor").change(function () {
            var ischecked = $(this).is(':checked');
            if (ischecked)
                $('.invest').show();

            else
                $('.invest').hide();
        });
        $.ajax({
            type: "Get",
            url: rootUrl + "Post/opGetBusinessproposal",
            data: { "ID": 23 },
            dataType: "json",
            beforeSend: function () {
                $("loader").show();
            },
            complete: function () {
                $("loader").hide();
            },
            success: function (response) {
                console.log('Businessproposal',response);
            }
        });
        $('#txtProjectDescriptionBusiness,#txtProjectDescriptionOutsource,#txtProjectDescriptionFranchise').bind("cut copy paste", function (e) {
            e.preventDefault();
        });
    });
    var requiredSkill = (function () {
        var skillSNO = 2;
        return {
            Add: function () {
                debugger;
                var skillCount = $('.pbp_skil').length; 
                if (skillCount < 7) {
                    addNewRow(skillSNO);
                   
                    $(".removeSkill").unbind('click').click(function () {
                        requiredSkill.Delete($(this));
                    });                   
                    $('#sltskillName-' + (skillSNO)).unbind('change').change(function () {
                        requiredSkill.selectChange($(this));
                    });
                    skillSNO++;
                }
                else
                    alertMessage('Maximum 7 Skills allowed', 'Warning', 2);
            },
            Delete: function (e) {
                var id = e.attr('id');
                $('#ul-' + id).remove();
            },
            selectChange: function (e) {
                var value_ = e.val();
                if (value_ != 0) {
                    var sid = e.attr('id');
                    var isSelect = false;
                    $('#requiedSkillbp .skill').each(function (index, element) {
                        var id = $(element).attr('id');
                        var skillId = $('#' + id + ' .pbp_skil').attr('id');
                        var skillName = $('#' + id + ' .pbp_skil').val();
                        if (sid != skillId && value_ == skillName) {
                            isSelect = true;
                        }
                    });
                    if (isSelect) {
                        alertMessage('Skill already selected', 'Warning', 2);
                        e.val('0');
                    }
                }
            }
        }
    })();
    var MasterSkills = (function () {
        return {
            Bind: function (REFGRPLIST) {
                $.ajax({
                    async: false,
                    type: "POST",
                    dataType: "json",
                    url: rootUrl + "Opportunity/opGetDynamicMasterData",
                    data: { 'REFGRP': REFGRPLIST },
                    success: function (items) {
                        var SkillsList = jQuery.grep(items.lobcls_VH_MASTER_DATA, function (item, index) {
                            return (item.REFGRP == 'SKIL');
                        });
                        var IndustryList = jQuery.grep(items.lobcls_VH_MASTER_DATA, function (item, index) {
                            return (item.REFGRP == "INDSTY");
                        });
                        var skilldetails = {};
                        skilldetails.Id = 0;
                        skilldetails.Name = "*** Select Skill ***";
                        SkillsListData.push(skilldetails);
                        $.each(SkillsList, function (i, item) {
                            var skilldetails = {};
                            skilldetails.Id = item.REFID;
                            skilldetails.Name = item.SDESC;
                            SkillsListData.push(skilldetails); 
                        });
                        IndustryData.push($('<option>', { value: "0", text: "*** Select Industry ***" }));
                        $.each(IndustryList, function (i, item) {
                            IndustryData.push($('<option>', { value: item.REFID, text: item.SDESC }));
                        });
                    }
                });
            }
        }
    })();
    var MasterDetails = (function () {
        return {
            BindSkills: function (id) {
                //var optionsAsString = "";
                //for (var i = 0; i < SkillsListData.length; i++) {
                //    optionsAsString += "<option value='" + SkillsListData[i].Id + "'>" + SkillsListData[i].Name + "</option>";
                //}
                //$('#sltskillName-'+id).append(optionsAsString);
                var options = {
                    placeholder: "Type your Skill",
                    pageSize: 50,
                    searchIn: 'SKIL',
                    url: rootUrl + "Opportunity/opGetDynamicMasterData",
                    minimumSearchTextLength: 2
                };
                $('#sltskillName-' + id).autofillSelect(options);
            },
            BindIndustries: function () {
                //$('#ddlIndustryBusiness,#ddlIndustryOutsource,#ddlIndustryFranchise').empty().append(IndustryData);
            }
        }
    })();

    function addNewRow(skillSNO) {
        var skillTxt = '';
        skillTxt += '<div class="row form-group skill" id="ul-skill-' + (skillSNO) + '">';
        skillTxt += '<div class="col-sm-3"><select id="sltskillName-' + (skillSNO) + '" class="form-control pbp_skil">' + SkillsListData + '</select></div>';
        skillTxt += '<div class="col-sm-3"><input type="text" id="txtskillQuantity-' + (skillSNO) + '" class="form-control pbp_qty" placeholder="Quantity"/></div>';
        skillTxt += '<div class="col-sm-3">';
        skillTxt += '<button class="btn btn-danger close-btn removeSkill" id="skill-' + (skillSNO) + '">X</button>';
        skillTxt += '</div>';
        skillTxt += '</div>';        
        $('#requiedSkillbp').append(skillTxt);
        MasterDetails.BindSkills(skillSNO);
    }
</script>
<div class="row form-group"  id="myModalPost">
    <div class="col-sm-4" id="divFileFormate1">
        <input type="radio" id="rbtnBusiness" value="B" name="BusinessType" checked="checked" class="PostBusinessProposal">
        <label>To establish own business</label>
    </div>
    <div class="col-sm-4" id="divTextFormate2">
        <input type="radio" id="rbtnOursource" value="O" name="BusinessType" class="PostBusinessProposal">
        <label>Outsource your work</label>
    </div>
    <div class="col-sm-4" id="divTextFormate3">
        <input type="radio" id="rbtnFranchise" value="F" name="BusinessType" class="PostBusinessProposal">
        <label>Offer a Franchise</label>
    </div>
</div>
<div>

  
    <div id="divBusinessproposal" class="row form-group">
        <div class="row form-group">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Industry</label>
                    <select id="ddlIndustryBusiness" class="form-control"></select>
					
                </div>
				
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" id="txtPost1SearchLocations" class="form-control" placeholder="Search Locations" style="width: 100%;display:inline;margin-bottom:5px;" />
                    <select id="ddlLocationOB" name="Location" class="js-example-basic-single form-control" style="width:100%"></select>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Description</label>
                    <textarea id="txtProjectDescriptionBusiness" rows="6" class="no-resize form-control" onKeyPress="return ValidateAlpha(event);"></textarea>
                </div>
            </div>
        </div>

        <div class="req-res-main">
            <div class="row"><lable class="col-sm-12"><b>Required Resources</b></lable></div>
            <div class="row req-res">
                <div class="row form-group" style="margin-bottom:0">

                    <div class="col-sm-3" id="divFileFormate4">
                        <div class="checkbox checkbox-info">
                            <input id="chkSkilledCandidates" type="checkbox" checked="checked">
                            <label for="chkSkilledCandidates">
                                Skilled Candidates
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3" id="divFileFormate4">
                        <div class="checkbox checkbox-info">
                            <input id="chkInvestor" type="checkbox" checked="checked">
                            <label for="chkInvestor">
                                Investor
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3" id="divFileFormate5">
                        <div class="checkbox checkbox-info">
                            <input id="chkConsultant" type="checkbox" name="checkbox">
                            <label for="chkConsultant">
                                Consultant
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3" id="divFileFormate6">
                        <div class="checkbox checkbox-info">
                            <input id="chkMentor" type="checkbox" name="checkbox">
                            <label for="chkMentor">
                                Mentor
                            </label>
                        </div>
                    </div>

                </div>
                <div class="req-res-sec">

                    <fieldset class="addedSkills my-field">
                        <legend>Skilled Candidates</legend>
                        <div class="row form-group addedSkills" style="margin-bottom:0px;">
                            <div class="col-sm-3">
                                <label>Skill Name</label>
                            </div>
                            <div class="col-sm-3">
                                <label>Quantity</label>
                            </div>
                            <div class="col-sm-3">
                                <button id="btnAddSkillSet-bp" class="btn btn-primary close-btn">+</button>
                            </div>
                        </div>
                        <div class="row form-group addedSkills form-group-nomar">
                            <div id="requiedSkillbp" class="skill"></div>
                        </div>
                    </fieldset>
                    <fieldset class="my-field invest">
                        <legend>Investor</legend>
                        <div class="row form-group invest form-group-nomar">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Approx Investment Expected</label><span class="req">*</span>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <select class="form-control" id="sltPriceInvestBusiness" name="country"></select>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" placeholder="Min" id="txtInvestamonutMinBusiness">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" placeholder="Max" id="txtInvestamonutMaxBusiness">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Approx Share Offered</label><span class="req">*</span>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Min share" id="txtIncomeamonutMinBusiness" maxlength="3" onkeyup="this.value = minmax(this.value, 0, 100)" />

                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Max share" id="txtIncomeamonutMaxBusiness" maxlength="3" onkeyup="this.value = minmax(this.value, 0, 100)" />

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Role expected from Investor</label><span class="req">*</span>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <select class="js-example-basic-multiple form-control" multiple="multiple" id="sltInvesttypeBusiness" style="width:100%">
                                                <option value="SLP" name="SLP"></option>
                                                <option value="COF" name="COF"></option>
                                                <option value="STP" name="STP"></option>
                                                <option value="FIN" name="FIN"></option>
                                                <option value="OTH" name="OTH"></option>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>



                    </fieldset>

                    <div class="row form-group" style="margin-bottom: 0;">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-success pull-right" data-type="Save" value="Save" id="btnBusinessproposalSave"><i class="fa fa-floppy-o"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="divOutsource" class="row form-group" style="display:none">
        <div class="row form-group">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Industry</label>
                    <select id="ddlIndustryOutsource" class="form-control"></select>
                </div>
                <div class="form-group">
                    <label>Approx Outsource Quote <span class="req">*</span></label>
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control" id="sltPriceInvestOutsource" name="country"></select>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Min" id="txtInvestamonutMinOutsource">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Max" id="txtInvestamonutMaxOutsource">
                        </div>

                    </div>

                </div>
                <div class="form-group">
                    <label>Approx Project Duration<span class="req">*</span></label>
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control" id="sltPriceIncomeOutsource">
                                <option value="H">Days</option>
                                <option value="M">Months</option>
                                <option value="Y">Years</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Min" id="txtIncomeamonutMinOutsource">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Max" id="txtIncomeamonutMaxOutsource">
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Description</label>
                    <textarea id="txtProjectDescriptionOutsource" rows="8" class="no-resize form-control" onKeyPress="return ValidateAlpha(event);"></textarea>
                </div>
            </div>

        </div>




        <div class="row form-group">
            <button type="button" class="btn btn-success pull-right" data-type="Save" value="Save" id="btnOutsourceSave"><i class="fa fa-floppy-o"></i> Save</button>
        </div>
    </div>
    <div id="divFranchise" class="row form-group" style="display:none">
        <div class="row form-group">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Industry</label>
                    <select id="ddlIndustryFranchise" class="js-example-basic-single form-control" style="width:100%"></select>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea id="txtProjectDescriptionFranchise" rows="3" class="no-resize form-control" maxlength="500" onKeyPress="return ValidateAlpha(event);"></textarea>
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" id="txtPost2SearchLocations" class="form-control" placeholder="Search Locations" style="width: 100%;display:inline" />
                    <select id="ddlLocationFranchise" name="Location" class="js-example-basic-single form-control" style="width:100%;margin-top:5px;"></select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Franchise Model<span class="req">*</span></label>
                    <select id="ddlFranchiseModalFranchise" class="form-control">
                        <option value="1">Fresher</option>
                        <option value="2">Moderate</option>
                        <option value="3">High</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Approx Investment<span class="req">*</span></label>
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control" id="sltPriceInvestFranchise" name="country"></select>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Min" id="txtInvestamountMinFranchise">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Max" id="txtInvestamountMaxFranchise">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Approx Income<span class="req">*</span></label>
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control" id="sltPriceIncomeFranchise">
                                <option value="D">Daily</option>
                                <option value="M">Monthly</option>
                                <option value="Y">Yearly</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Min" id="txtIncomeamountMinFranchise">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Max" id="txtIncomeamountMaxFranchise">
                        </div>
                       
                    </div>
                </div>
                <div class="form-group">
                    <label>Approx BreakEven<span class="req">*</span></label>
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control" id="sltPriceBreakFranchise">
                                <option value="M">Months</option>
                                <option value="Y">Years</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Min" id="txtBreakamountMinFranchise">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Max" id="txtBreakamountMaxFranchise">
                        </div>
                    </div>
                </div>
            </div>

        </div>








        <div class="row form-group">
            <div class="col-sm-12"><button type="button" class="btn btn-success pull-right" data-type="Save" value="Save" id="btnFranchiseSave"><i class="fa fa-floppy-o"></i> Save</button></div>
        </div>
    </div>
</div>




                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myLoginModal" role="dialog" data-keyboard="false" data-backdrop="static" style="z-index:99999 !important;">
        <div class="modal-dialog modal-cus">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <p class="modal-title"><span class="spn-AMS">Login</span></p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <p><strong>User Name</strong><span class="req">*</span></p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" id="txtMobileOrEmail_P" name="LoginName" class="form-control" placeholder="Email or Mobile">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <p><strong>Password</strong><span class="req">*</span></p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="password" id="txtLoginPassword_P" name="Password" class="form-control" placeholder="Password">
                                        <span class="input-group-addon" id="spnLoginPassword_P"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-type="Send" id="btnPopupLogin"><i class="fa fa-lock"></i> Login</button>
                    <button type="button" class="btn btn-danger" data-dismiss="myLoginModal" id="btnLoginPopupCancel"><i class="fa fa-times-circle-o"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Opportunities popups  startregion -->
    <div class="modal fade" id="mySkillsModal" role="dialog" style="display:none;z-index: 100;" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="module-title">
                        My Professional Skill
                    </h3>
                </div>
                <div class="modal-body model-body-login">
                    <div id="DivPSkills">
                        <script src="<?php echo base_url(); ?>scr/ProfessionalJs.js"></script>
<div id="divprofessionalskill" class="row modal-body height">
    <div class="row avail-sec form-group form-group-nomar">
        
            <div class="col-sm-6">
                <div class="form-group">
                        <label>Skill</label>
                        <select id="sltProfessional" class="js-example-basic-single form-control" style="width:100%"></select>
                </div>
                <div class="form-group">
                        <label>Locations</label>

                        <input type="text" id="txtSearchLocations" class="form-control" placeholder="Search Locations" style="width: 100%;display:inline" />
                        <select class="js-example-basic-multiple form-control" multiple="multiple" id="sltLocations" style="width: 100%;"></select>
                
                </div>
            </div>
            <div class="col-sm-6">
                
                <div class="form-group">
                        <label>Experience</label>
                        <select id="sltExperience" class="js-example-basic-single" style="width:100%">
                            <option value="-1">--- Please Select Experience ---</option>
                            <option value="0">Fresher</option>
                            <option value="1">0-1 Years</option>
                            <option value="2">1-2 Years</option>
                            <option value="3">2-3 Years</option>
                            <option value="4">3-4 Years</option>
                            <option value="5">4-5 Years</option>
                            <option value="6">5-6 Years</option>
                            <option value="7">6-7 Years</option>
                            <option value="8">7-8 Years</option>
                            <option value="9">8-9 Years</option>
                            <option value="10">More then 10 Years</option>
                        </select>
                     </div>
                </div>
        
    </div>
    <div class="my-price-sec row form-group form-group-nomar">
        <div class="col-sm-6">
            <div class="form-group">
                <div id="divFileFormateP">
                    
                    <label for="f-option">Portfolio (File)</label>
                    <div id="fileGroup">
                    <input type="file" name="img[]" class="file FileFormat" id="fileUploadProfessionals">
                    <div class="input-group FileFormat">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                        <input type="text" class="form-control" id="fileUploadProfessionals1" disabled placeholder="Upload file">
                        <span class="input-group-btn">
                            <button class="browse btn btn-primary" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                        </span>
                    </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="col-sm-6">
            <div class="row form-group" id="txtGroup" style="display:none">
               
                    <textarea class="form-control TextFormat no-resize" maxlength="500" placeholder="Projects Description" id="txtProfessionalDescription"></textarea>
               
            </div>
            <div class="form-group">
                <label> Career Objective </label>
                <textarea class="form-control TextFormat no-resize" maxlength="180" placeholder="Career Objective " id="txtProfCrrObjective" onKeyPress="return ValidateAlpha(event);"></textarea>
            </div>
            
        </div>
    </div>
   <div class="avail-sec">
    <div class="row form-group form-group-nomar">
        <div class="col-sm-6">
            <div class="form-group">
            <label>Availability:</label>
            <div>
                <input type="button" id="btnweekdaySun" value="Sun" class="btn btn-success daysP" />
                <input type="button" id="btnweekdayMon" value="Mon" class="btn btn-success daysP" />
                <input type="button" id="btnweekdayTue" value="Tue" class="btn btn-success daysP" />
                <input type="button" id="btnweekdayWed" value="Wed" class="btn btn-success daysP" />
                <input type="button" id="btnweekdayThu" value="Thu" class="btn btn-success daysP" />
                <input type="button" id="btnweekdayFri" value="Fri" class="btn btn-success daysP" />
                <input type="button" id="btnweekdaySat" value="Sat" class="btn btn-success daysP" />
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            
            <div class="row">
                <label class="col-sm-12"><br /></label>
                <div class="col-sm-5">
                    <div class="input-group bootstrap-timepicker timepicker">
                        <input id="txtFromTimeSlot" type="text" class="form-control input-small">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="input-group bootstrap-timepicker timepicker">
                        <input id="txtToTimeSlot" type="text" class="form-control input-small">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <button class='btn btn-info btn-p' id='btnAddSlotsP' title="Add Time Slot"><i class='fa fa-plus'></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="row form-group form-group-nomar">
       <div class="col-sm-12">
        
            <table id="tblTimeSlots" class="skills-t table table-bordered text-center" style="display:none;width:100%">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>From Time</th>
                        <th>To Time</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
       
    </div>
    </div>
    <div class="row form-group my-price-sec">
        <div class="col-sm-6">
            <div class="row">
                <label class="col-sm-12">My Price : Short Time Work</label>
                <div class="col-sm-4">
                    <select class="form-control" id="sltShortTimeWork" name="country"></select>
                </div>
                <div class="col-sm-4">
                    <input type="text" maxlength="6" class="form-control" placeholder="Amount" id="txtShortTimeWorkAmount">
                </div>
                <div class="col-sm-4">
                    <select class="form-control" id="sltShortTimeWorkTimes">
                        <option value="H">Hour</option>
                        <option value="D">Day</option>
                    </select>
                </div>
            </div>
            
        </div>
        <div class="col-sm-6">
            <div class="row form-group">
                <label class="col-sm-12">Long Time Work</label>
                <div class="col-sm-6">
                    <input type="radio" name="NagotioblePrice" id="rdbNagotioble" value="N" checked="checked" /><b>Negotiable</b>
                </div>
                <div class="col-sm-6">
                    <input type="radio" name="NagotioblePrice" id="rdbNonNagotioble" value="X" /><b>Non Negotiable</b>
                </div>
            </div>
            <div class="row rdbNagotioblePrice form-group" style="display:none">
                <div class="col-sm-4">
                    <b>Income</b>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Min Price" id="txtMinPrice" maxlength="9" />
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Max Price" id="txtMaxPrice" maxlength="9" />
                </div>
            </div>
            <div class="row rdbNagotioblePrice form-group" style="display:none">
                <div class="col-sm-4">
                    <b>Share</b>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control share_min" placeholder="Min share" id="txtMinShare" maxlength="3" " />
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control share_max" placeholder="Max share" id="txtMaxShare" maxlength="3" />
                </div>
            </div>
            </div>
    </div>
    
    <div class="row form-group form-group-nomar">
        <div class="col-sm-12 text-right">
            <button type="button" class="btn btn-success" data-type="Save" value="Save" id="btnProfessionalSave"><i class="fa fa-floppy-o"></i> Save</button>
        </div>
    </div>
</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="hdnProfessionalId" value="0" />
    <input type="hidden" id="hdnHobbyId" value="0" />
    <input type="hidden" id="hdnOtherId" value="0" />
    <input type="hidden" id="sltAllSkills" value="0" />
    <div class="modal fade" id="myHobbySkillsModal" role="dialog" style="display:none;z-index: 100;" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="module-title">
                        My Hobby Skill
                    </h3>
                </div>
                <div class="modal-body model-body-login">
                    <div id="DivHSkills">
                        <script src="<?php echo base_url(); ?>scr/HobbySkills.js"></script>
<div class="row modal-body height" id="divHobby">
    <div class="row avail-sec form-group form-group-nomar">
       
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Skill</label>
                    <select id="ddlHobbytype" class="js-example-basic-single form-control" style="width:100%"></select>
                </div>
                <div class="form-group">
                    <label>Locations</label>
                    <input type="text" id="txtHSearchLocations" class="form-control" placeholder="Search Locations" style="width: 100%;display:inline" />
                    <select class="js-example-basic-multiple form-control" multiple="multiple" id="ddlLocation" style="width: 100%;"></select>
                </div>

                </div>
            <div class="col-sm-6">
                  
                <div class="form-group">
                    <label>Experience</label>
                    <select id="ddlSkillExpertice" class="js-example-basic-single form-control" style="width:100%">
                        <option value="0">--- Please Select Experience ---</option>
                        <option value="1">Fresher</option>
                        <option value="2">Moderate</option>
                        <option value="3">High</option>
                    </select>
                </div>
</div>
        
    </div>
    
    
    <div class="row my-price-sec form-group form-group-nomar">
        <div class="col-sm-6">
            <div id="divFileFormateH">
            
            <label for="f-option">Portfolio (File)</label>
            </div>
            <div id="fileGroupH">
                    <input type="file" name="img[]" class="file FileFormat" id="btnHobbyFileupload">
                    <div class="input-group FileFormat">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                        <input type="text" class="form-control" id="btnHobbyFileupload1" disabled placeholder="Upload file">
                        <span class="input-group-btn">
                            <button class="browse btn btn-primary" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                        </span>
                    </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label> Career Objective </label>
                <textarea class="form-control TextFormat no-resize" maxlength="180" placeholder="Career Objective" id="txtHobbyCrrObjective" onKeyPress="return ValidateAlpha(event);"></textarea>
            </div>
        </div>
    </div>
    
    
    <div class="avail-sec">
        <div class="row form-group form-group-nomar">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Availability:</label>
                    <div>
                        <input type="button" id="HbtnweekdaySun" value="Sun" class="btn btn-success daysH" />
                        <input type="button" id="HbtnweekdayMon" value="Mon" class="btn btn-success daysH" />
                        <input type="button" id="HbtnweekdayTue" value="Tue" class="btn btn-success daysH" />
                        <input type="button" id="HbtnweekdayWed" value="Wed" class="btn btn-success daysH" />
                        <input type="button" id="HbtnweekdayThu" value="Thu" class="btn btn-success daysH" />
                        <input type="button" id="HbtnweekdayFri" value="Fri" class="btn btn-success daysH" />
                        <input type="button" id="HbtnweekdaySat" value="Sat" class="btn btn-success daysH" />
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row form-group">
                    <label class="col-sm-12"><br /></label>
                    <div class="col-sm-5">
                        <div class="input-group bootstrap-timepicker timepicker">
                            <input id="txtFromTimeSlotH" type="text" class="form-control input-small">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="input-group bootstrap-timepicker timepicker">
                            <input id="txtToTimeSlotH" type="text" class="form-control input-small">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button class='btn btn-success' id='btnAddSlotsH' title="Add Time Slot"><i class='fa fa-plus'></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row form-group form-group-nomar">
            <div class="col-sm-12">
                <table id="tblTimeSlotsH" class="skills-t table table-bordered text-center" style="display:none;width:100%">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>From Time</th>
                            <th>To Time</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>

        </div>
    </div>
    
    <div class="row my-price-sec form-group">
        <div class="col-sm-6">
            <div class="row form-group">
            <label class="col-sm-12">My Price : Short Time Work</label>
                <div class="col-sm-4">
                    <select class="form-control" id="sltPrice" name="country"></select>
                </div>
                <div class="col-sm-4">
                    <input type="text" maxlength="6" class="form-control" placeholder="Amount" id="txtHobbyamonut">
                </div>
                <div class="col-sm-4">
                    <select class="form-control" id="sltWorktypeH">
                        <option value="H">Hour</option>
                        <option value="D">Day</option>
                    </select>
                </div>
                </div>
            </div>
        <div class="col-sm-6">
            <div class="row form-group">
            <label class="col-sm-12">Long Time Work</label>
            <div class="col-sm-6">
                <input type="radio" name="NagotioblePriceHB" id="rdbNagotiobleH" value="N" checked="checked" /><b>Negotiable</b>
            </div>
            <div class="col-sm-6">
                <input type="radio" name="NagotioblePriceHB" id="rdbNonNagotiobleH" value="X" /><b>Non Negotiable</b>
            </div>
            </div>
            <div class="row NagotioblePriceH form-group" style="display:none">
                <div class="col-sm-4">
                    <label>Income</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Min Price" id="txtMinPriceH" maxlength="9" />
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Max Price" id="txtMaxPriceH" maxlength="9" />
                </div>
            </div>
            <div class="row NagotioblePriceH form-group" style="display:none">
                <div class="col-sm-4">
                    <label>Share</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control share_min" placeholder="Min share" id="txtMinShareH" maxlength="3" />
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control share_max" placeholder="Max share" id="txtMaxShareH" maxlength="3" />
                </div>
            </div>
        </div>
    </div>
    
    <div class="row form-group form-group-nomar">
        <div class="col-sm-12 text-right">
            <button type="button" class="btn btn-success" data-type="Save" value="Save" id="btnHobbySave"><i class="fa fa-floppy-o"></i> Save</button>
        </div>
    </div>
</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myOtherSkillsModal" role="dialog" style="display:none;z-index: 100;" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="module-title">
                        Other Skill
                    </h3>
                </div>
                <div class="modal-body model-body-login">
                    <div id="DivOSkills">
                        <script src="<?php echo base_url(); ?>scr/OtherSkills.js"></script>
<link href="<?php echo base_url(); ?>cnt/intlTelInput.css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>scr/intlTelInput.min.js"></script>
<div class="row modal-body height" id="divOtherSkill">
    <div class="row avail-sec form-group form-group-nomar">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Skill</label>
                <select id="ddlOtherSkill" class="js-example-basic-single form-control" style="width:100%"></select>
            </div>
            <div class="form-group">
                <label>Locations</label>
                <input type="text" id="txtOSearchLocations" class="form-control" placeholder="Search Locations" style="width: 100%;display:inline" />
                <select class="js-example-basic-multiple form-control" multiple="multiple" id="ddlLocations" style="width: 100%;"></select>
            </div>
        </div>
        <div class="col-sm-6">
            
            <div class="form-group">
                <label>Experience</label>
                <select id="sltExperienceO" class="js-example-basic-single form-control" style="width:100%">
                    <option value="0">--- Please Select Experience ---</option>
                    <option value="1">Fresher</option>
                    <option value="2">Moderate</option>
                    <option value="3">High</option>
                </select>
            </div>
            <div class="form-group">
                <label>Language</label>
                <select class="js-example-basic-multiple form-control" multiple="multiple" id="ddlLanguage" style="width: 100%;"></select>
            </div>
        </div>
    </div>
    
    
    <div class="row my-price-sec form-group form-group-nomar">
        <div class="col-sm-6" >
            <div id="divFileFormateO">
                
                <label for="f-option">Portfolio (File)</label>
            </div>
            <div id="fileGroupO">
                <input type="file" name="img[]" class="file FileFormat" id="OtherSkillsFileupload">
                <div class="input-group FileFormat">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                    <input type="text" class="form-control" id="txtfileformate" disabled placeholder="Upload file">
                    <span class="input-group-btn">
                        <button class="browse btn btn-primary" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                    </span>
                </div>
            </div>

        </div>
        <div class="col-sm-6">
            <label> Career Objective </label>
            <textarea class="form-control TextFormat no-resize noctrlxcv" maxlength="180" placeholder="Career Objective" id="txtOtherCrrObjective" onKeyPress="return ValidateAlpha(event);"></textarea>
        </div>
        
    </div>
    <div class="avail-sec">
        <div class="row">
            <div class="col-sm-6">
                <div class="row form-group">
                    <label class="col-sm-12">My Price : Short Time Work</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="sltShortTimeWorkO" name="country"></select>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" maxlength="6" class="form-control" placeholder="Amount" id="txtShortTimeWorkAmountO">
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" id="sltShortTimeWorkTimesO">
                            <option value="H">Hour</option>
                            <option value="D">Day</option>
                        </select>
                    </div>
                </div>
               
            </div>
            <div class="col-sm-6">
                <div class="row form-group">
                    <label class="col-sm-12">Long Time Work</label>
                    <div class="col-sm-6">
                        <input type="radio" name="NagotioblePriceHBO" id="rdbNagotiobleO" value="N" checked="checked" /><b>Negotiable</b>
                    </div>
                    <div class="col-sm-6">
                        <input type="radio" name="NagotioblePriceHBO" id="rdbNonNagotiobleO" value="X" /><b>Non Negotiable</b>
                    </div>
                    </div>
                <div class="row form-group NagotioblePriceO" style="display:none">
                        <label class="col-sm-12">Income</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Min Price" id="txtMinPriceO" maxlength="9" />
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Max Price" id="txtMaxPriceO" maxlength="9" />
                    </div>
                </div>
                <div class="row form-group NagotioblePriceO" style="display:none">
                        <label class="col-sm-12">Share</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control share_min" placeholder="Min share" id="txtMinShareO" maxlength="3" />
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control share_max" placeholder="Max share" id="txtMaxShareO" maxlength="3" />
                    </div>
                </div>
                </div>
        </div>
    </div>

        <div class="row form-group form-group-nomar my-price-sec">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="radio" id="rdbnMediate" name="ProfileFor" checked="checked" value="M" /><b>Mediate</b>
                    </div>
                    <div class="col-sm-6">
                        <input type="radio" id="rdbnHelp" name="ProfileFor" value="H" /><b>Help</b>
                    </div>
                </div>
                <div class="row">
                <div class="row form-group rdbHelp" style="display:none">
                    <div class="col-sm-12">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" id="txtCandidateName" maxlength="50" />
                    </div>
                </div>
                <div class="row form-group rdbHelp" style="display:none">
                    <div class="col-sm-12">
                        <label>Number</label>
                        <input type="text" class="form-control" placeholder="Mobile Number" id="txtCandidateNumber" />
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <button type="button" class="btn btn-success " data-type="Save" value="Save" id="btnOtherSave"><i class="fa fa-floppy-o"></i> Save</button>
            </div>
        </div>
    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>   
    <!-- #popups  endregion -->   
	<!-- #region ---- Confirm OTP ---- -->
        <div id="ForgetPasswordModalPopup" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog forgot-pop">
                <input type="hidden" id="hdnLoginId" />
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h4 class="modal-title"><span id="rf-Title">Forgot password ?</span> </h4>
                    </div>
                    <div class="modal-body">
                        <div class="forgot-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active" id="DivMobile"><a href="#mobile" aria-controls="home" role="tab" data-toggle="tab">Mobile Verification</a></li>
                                <li role="presentation" id="DivEmail" class="ShowHideTabe" style="display:none"><a href="#email" aria-controls="profile" role="tab" data-toggle="tab">Email Verification</a></li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="mobile">
                                    <div class="forgot-p">
                                        <div class="row form-group">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="Enter Mobile No." id="txtUserMobileNo" >
                                            </div>
                                            <div class="col-sm-4">
                                                <button class="btn btn-info" id="btnOTPMobile">Send</button>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="Enter OTP" id="txtMobileOTP">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-8 text-left">
                                                <button class="btn btn-primary pull-right" id="btnVerifyMobileOTP"><i class="fa fa-check-circle"></i> Verify</button>
                                            </div>
                                            <div class="col-sm-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane ShowHideTabe" id="email" style="display:none">
                                    <div class="forgot-p">
                                        <div class="row form-group">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="Enter email id" id="txtUserEmailId">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-8 text-left">
                                                <button class="btn btn-primary pull-right" id="btnVerifyEmailOTP"><i class="fa fa-check-circle"></i> Send </button>
                                            </div>
                                            <div class="col-sm-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btndisplayClose" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- #endregion -->
        <!-- #region ---- Password Change -->
        <div class="modal" id="UpdatePasswordModalPopup" role="dialog" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-cus">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p class="modal-title"><span class="spn-AMS">Update password</span></p>
                    </div>
                    <div class="modal-body">
                        <div class="row ">
                            <div class="col-sm-12">
                                <div class="row form-group">
                                    <div class="col-sm-6 pull-right">
                                        <strong>Viewham Account Verified <span style="color:green;"><i class="fa fa-2x fa-check-circle" aria-hidden="true"></i></span></strong>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <p><strong>New password</strong><span class="req">*</span></p>
                                    </div>
                                    <div class="col-sm-1">
                                        <p>:</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" id="txtNewpassword" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-sm-7 reqMessage"><span id="spnReqMsg_Slot"></span></div>
                        <button type="button" class="btn btn-success" data-type="Send" id="btnUpdatePWD">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnfpCancel">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- #endregion -->
    <footer id="footer" class="site-footer">
        <div class="copyright">Copyright &copy; 2017 - <a href="#">VIEWHAM</a></div>
    </footer>

    <script>
        //Browse
        $(document).on('click', '.browse', function () {
            var file = $(this).parent().parent().parent().find('.file');
            file.trigger('click');
        });
        $(document).on('change', '.file', function () {
            $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
        });
        //document ready start
        var s = $("#main-search-input-wrapper"); s.hide();
        var verifyType = false;
        var isAllow = false;
        var CheckEmail = function (email) {
            var regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
            return regex.test(email);
        }
        var CheckUsername = function (Username) {
            var charRegExp = /^[a-zA-Z '.-]+$/
            return charRegExp.test(Username);
        }
        function ValidateAlpha(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 && charCode != 46)

                return false;
            return true;
        }
        $(function () {
            var _url = window.location.pathname;
            $('#BtnProfessionalAddEdit').click(function () {
                $('#sltAllSkills').val("P");
                $('#mySkillsModal').modal('show');
            });
            $('#BtnHobbyAddEdit').click(function () {
                $('#sltAllSkills').val("H");
                $('#myHobbySkillsModal').modal('show');
            });
            $('#BtnOtherAddEdit').click(function () {
                $('#sltAllSkills').val("O");
                $('#myOtherSkillsModal').modal('show');
            });
            $('#btnOpen-Investor').click(function () {
                $('#sltAllSkills').val("I");
                $('#modal-Investor').modal('show');
            });
            $('#btnOpen-Entrepreneur').click(function () {
                $('#sltAllSkills').val("E");
                $('#modal-Entrepreneur').modal('show');
            });
            $("#main-search-toggle").on("click", function () {
                s.toggle(), $("#main-search-input").trigger("focus")
            }), $("#clear-search").on("click", function () {
                $(this).closest("#main-search").find("#main-search-toggle").trigger("click")
            }), $("#main-search-input").on("keydown", function () {
                var a = $(this);
                "Search..." !== a.val() && a.val().length > 0 && a.closest("form").find("#clear-search").show().one("click", function () {
                    a.val(""), a.trigger("blur"), $("#clear-search").hide();
                })
            });
            // var scripturl = rootUrl + "<?php echo base_url(); ?>scr/utils.js"; //for published
            var scripturl = "<?php echo base_url(); ?>scr/utils.js"; //For local
            $('#txtMobileOrEmail,#txtMobileOrEmail_P').keyup(function () {
                var _val = $(this).val();
                if (isNaN(_val)) {
                    $("#txtMobileOrEmail,#txtMobileOrEmail_P").intlTelInput("destroy");
                    $('#txtMobileOrEmail,#txtMobileOrEmail_P').focus();
                }
                else {
                    $("#txtMobileOrEmail,#txtMobileOrEmail_P").intlTelInput({
                        preferredCountries: ['in', 'us', 'jp'],
                        separateDialCode: true,
                        geoIpLookup: function (callback) {
                            $.get("http://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                                var countryCode = (resp && resp.country) ? resp.country : "";
                                callback(countryCode);
                            });
                        },
                        initialCountry: "auto",
                        utilsScript: scripturl
                    });
                    $('#txtMobileOrEmail,#txtMobileOrEmail_P').focus();
                }
            })
            var telInputUserMobileNo = $("#txtUserMobileNo");
            var telInput = $("#txtRegMobileNo");
            // initialise plugin
            $("#txtMobileOrEmail,#txtMobileOrEmail_P").intlTelInput({
                preferredCountries: ['in', 'us', 'jp'],
                separateDialCode: true,
                geoIpLookup: function (callback) {
                    $.get("http://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "";
                        callback(countryCode);
                    });
                },
                utilsScript: scripturl
            });
            telInputUserMobileNo.intlTelInput({
                preferredCountries: ['in', 'us', 'jp'],
                separateDialCode: true,
                utilsScript: scripturl
            });
            telInput.intlTelInput({
                // allowDropdown: false,
                // autoHideDialCode: false,
                // autoPlaceholder: "off",
                // dropdownContainer: "body",
                // excludeCountries: ["us"],
                // formatOnDisplay: false,
                geoIpLookup: function (callback) {
                    $.get("http://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "";
                        callback(countryCode);
                    });
                },
                // initialCountry: "auto",
                // nationalMode: false,
                // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                // placeholderNumberType: "MOBILE",
                preferredCountries: ['in', 'us', 'jp'],
                separateDialCode: true,
                utilsScript: scripturl
            });
            $('.stop-propagation').on('click', function (e) {
                e.stopPropagation();
            });
            $('#DivMobile').click(function () {
                 $('#email').hide().removeClass('active');
                 $('#mobile').show().addClass('active');
            });
            $('#DivEmail').click(function () {
                $('#mobile').hide().removeClass('active');
                $('#email').show().addClass('active');
            });
            $("#btnforgetpassword").click(function () {
                $('#ForgetPasswordModalPopup').modal('show');
                $('#btnOTPMobile').text('Send');
                $('.ShowHideTabe').show();
                $('#DivMobile').click().addClass('active');
                $('#DivEmail').removeClass('active');
                $('#rf-Title').text('Forgot Password');
                $('#email').hide();
                $('#hdnOtpType').val('F');
                //$('#dropLogin').hide();
                $('#txtUserEmailId,#txtUserMobileNo,#txtMobileOTP').val('');
                $('#txtEmailOTP').numeric();
                $('#txtMobileOTP,#txtUserMobileNo').numeric();
                $('#btnOTPEmail,#btnOTPMobile').show();
                $('#txtUserMobileNo,#txtUserEmailId').removeAttr('disabled');
                //$('#txtUserMobileNo').numeric();
                //$("#txtUserMobileNo").intlTelInput("setNumber", "+44 7733 123 456");
            });

            $("#btnOTPMobile").click(function () {
                $('#btnOTPMobile').text('Re-Send');
                var Mobileno = $('#txtUserMobileNo').val();
                if (Mobileno == "") {
                    alertMessage('Please enter Mobile number.', 'Messaage', 0);
                    return false;
                }
                else if (!telInputUserMobileNo.intlTelInput("isValidNumber")) {
                    alertMessage("Mobile no is not valid.");
                    return false;
                }
                var extension1 = $("#txtUserMobileNo").intlTelInput("getSelectedCountryData").dialCode;
                Mobileno = Mobileno.replace(/\s/g, '')
                var fullMobileNo1 = '+' + extension1 + ' ' + Mobileno;
                $('#hdnLoginId').val(fullMobileNo1);
                data = { 'LOGINID': fullMobileNo1,'Type':'R'  };
                ForgotPassword.SendOTP(data);
            })
            $("#btnOTPEmail").click(function () {
                var Email = $('#txtUserEmailId').val();
                if (Email == "") {
                    alertMessage('Please enter email id.', 'Messaage', 0);
                    return false;
                }
                else if (!CheckEmail(Email)) {
                    alertMessage('Enter valid email id.', 'Messaage', 0);
                    return false;
                }
                $('#hdnLoginId').val(Email);
                data = { 'LOGINID': Email };
                ForgotPassword.SendOTP(data);
            })
            $("#btnVerifyEmailOTP").click(function () {
                var Email = $('#txtUserEmailId').val();
                var Otp = $('#txtEmailOTP').val();
                if (Email == "") {
                    alertMessage('Please enter email id.', 'Messaage', 0);
                    return false;
                }
                else if (!CheckEmail(Email)) {
                    alertMessage('Enter valid email id.', 'Messaage', 0);
                    return false;
                }
                //else if (Otp == "") {
                //    alertMessage('Please enter OTP.', 'Messaage', 1);
                //    return false;
                //}
                var LoginId = Email;
                $('#hdnLoginId').val(Email);
                var data = { 'LOGINID': LoginId, 'OTP': "" };
                ForgotPassword.VerifyEmail(data);
            })
            $("#btnVerifyMobileOTP").click(function () {
                var MobileNo = $('#txtUserMobileNo').val();
                var extension1 = $("#txtUserMobileNo").intlTelInput("getSelectedCountryData").dialCode;
                var Otp = $('#txtMobileOTP').val();
                if (MobileNo == "") {
                    alertMessage('Please enter mobile number.', 'Messaage', 0);
                    return false;
                }
                else if (!telInputUserMobileNo.intlTelInput("isValidNumber")) {
                    alertMessage("Mobile no is not valid.", 'Messaage', 0);
                    return false;
                }
                else if (Otp == "") {
                    alertMessage('Please enter OTP.', 'Messaage', 0);
                    return false;
                }
                MobileNo = MobileNo.replace(/\s/g, '')
                var fullMobileNo1 = '+' + extension1 + ' ' + MobileNo;
                $('#hdnLoginId').val(fullMobileNo1);
                var LoginId = fullMobileNo1;
                var data = { 'LOGINID': LoginId, 'OTP': Otp };
                ForgotPassword.VerifyOTP(data);
            })
            $("#btnUpdatePWD").click(function () {
                var LoginId = $('#hdnLoginId').val().trim();
                var Newpassword = $('#txtNewpassword').val().trim();
                if (Newpassword == "") {
                    alertMessage('Please enter new password.', 'Error', 0);
                    return false;
                }
                data = { 'LOGINID': LoginId, 'NEWPASSWRD': Newpassword };
                ForgotPassword.UpdatePassword(data);
            })
            $('#txtLoginPassword').on('keypress', function (evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode == 13) {
                    $('#btnLogin').click();
                }
            });
            $('#btnLogin').click(function () {
                var varEmailMobile = $('#txtMobileOrEmail').val().trim();
                var varPassword = $('#txtLoginPassword').val().trim();
                var extension = $("#txtMobileOrEmail").intlTelInput("getSelectedCountryData").dialCode;
                if (varEmailMobile == "") {
                    $('#spnLoginReturnMessage').text("Email/Mobile is required.");
                    $('#txtMobileOrEmail').focus();
                    return false;
                }
                if (isNaN(varEmailMobile)) {
                    if (!CheckEmail(varEmailMobile)) {
                        $('#spnLoginReturnMessage').text("Invalid email id.");
                        $('#txtMobileOrEmail').focus();
                        return false;
                    }
                }
                else {
                    if (extension == undefined) {
                        $('#spnLoginReturnMessage').text("Country code is required.");
                        $('#txtMobileOrEmail').focus();
                        return false;
                    }
                    else if (!$('#txtMobileOrEmail').intlTelInput("isValidNumber")) {
                        $('#spnLoginReturnMessage').text("Mobile no is not valid.");
                        $('#txtMobileOrEmail').focus();
                        return false;
                    }
                    else
                        varEmailMobile = '+' + extension + ' ' + varEmailMobile;
                }
                if (varPassword == "") {
                    $('#spnLoginReturnMessage').text("Password is required.");
                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: rootUrl + "Home/Login",
                    async: true,
                    traditional: true,
                    data: { 'LoginName': varEmailMobile, 'Password': varPassword },
                    dataType: "json",
                    beforeSend: function () {
                        loader.show();
                    },
                    complete: function () {
                        loader.hide();
                    },
                    success: function (result) {
                        if (result.ResponseStatus == "1") {
                            window.location.href = rootUrl + "Home/Dashboard";
                        }
                        else {
                            $('#spnLoginReturnMessage').text(result.ResponseMessage);
                            return false;
                        }
                    }
                });
            });
            $('#btnPopupLogin').click(function () {
                var varEmailMobile = $('#txtMobileOrEmail_P').val().trim();
                var varPassword = $('#txtLoginPassword_P').val().trim();
                var extension = $("#txtMobileOrEmail_P").intlTelInput("getSelectedCountryData").dialCode;
                if (varEmailMobile == "") {
                    alert("Email/Mobile is required.")
                    $('#txtMobileOrEmail_P').focus();
                    return false;
                }
                if (isNaN(varEmailMobile)) {
                    if (!CheckEmail(varEmailMobile)) {
                        alert("Invalid email id.");
                        $('#txtMobileOrEmail_P').focus();
                        return false;
                    }
                }
                else {
                    if (extension == undefined) {
                        alert("Country code is required.");
                        $('#txtMobileOrEmail_P').focus();
                        return false;
                    }
                    else if (!$('#txtMobileOrEmail_P').intlTelInput("isValidNumber")) {
                        alert("Mobile no is not valid.");
                        $('#txtMobileOrEmail_P').focus();
                        return false;
                    }
                    else
                        varEmailMobile = '+' + extension + ' ' + varEmailMobile;
                }
                if (varPassword == "") {
                    alert("Password is required.");
                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: rootUrl + "Home/Login",
                    async: true,
                    traditional: true,
                    data: { 'LoginName': varEmailMobile, 'Password': varPassword },
                    dataType: "json",
                    beforeSend: function () {
                        loader.show();
                    },
                    complete: function () {
                        loader.hide();
                    },
                    success: function (result) {
                        $('#myLoginModal').modal("hide");
                        if (result.ResponseStatus == "1") { 
                            isAllow = true;
                            var selectedSkillType = $('#sltAllSkills').val();
                            var _sltPostAllSkills = $('#sltPostAllSkills').val();
                            if (selectedSkillType != undefined) {
                                switch (selectedSkillType) {
                                    case "P":
                                        $('#btnProfessionalSave').click();
                                        break;
                                    case "H":
                                        $('#btnHobbySave').click();
                                        break;
                                    case "O":
                                        $('#btnOtherSave').click();
                                        break;
                                    case "E":
                                        $('#btnEntrepreneurSave').click();
                                        break;
                                    case "I":
                                        $('#btnInvesterSave').click();
                                }
                            }
                            else if (_sltPostAllSkills != "0") {
                                switch (_sltPostAllSkills) {
                                    case "PBP":
                                        {
                                            var rdbtype = $("input[name=BusinessType]:checked").val();
                                            if (rdbtype == "B")
                                                $('#btnBusinessproposalSave').click();
                                            else if (rdbtype == "O")
                                                $('#btnOutsourceSave').click();
                                            else if (rdbtype == "F")
                                                $('#btnFranchiseSave').click();
                                        }
                                        break;
                                    case "RFF":
                                        $('#btnFundingSave').click();
                                        break;
                                    case "OW":
                                        $('#btnOfferworkSave').click();
                                        break;
                                    case "RFW":
                                        $('#btnGoPosts').click();
                                        break;
                                    case "WAR":
                                        $('#btnGoPosts').click();
                                }
                            }
                        }
                        else {
                            alert(result.ResponseMessage);
                            return false;
                        }
                    }
                });
            });
            $('#clickLogin').click(function () {
                $('#txtMobileOrEmail,#txtLoginPassword').val('');
                $('#spnLoginReturnMessage').text('');
            });
            $('#btnLoginPopupCancel').click(function () {
                $('#myLoginModal').modal("hide");
            });
            $('#clickRegister').click(function () {
                $('#txtRegName,#txtRegEmail,#txtRegPassword,#txtRegMobileNo').val('');
                $('#spnRegisterReturnMessage').text('');
            });
            $('#btnRegister').click(function () {
               // $('#').val('Re-Send');
                $('#btnOTPMobile').text('Re-Send');
                var name = $('#txtRegName').val().trim();
                var email_id = $('#txtRegEmail').val().trim();
                var password = $('#txtRegPassword').val().trim();
                var mobileNo = $('#txtRegMobileNo').val().trim();
                if (name == "") {
                    $('#spnRegisterReturnMessage').text("Name is required.");
                    return false;
                }
                //else if (!CheckUsername(name)) {
                //    $('#spnRegisterReturnMessage').text("Special charecters and numbers are not allowed.");
                //    return false;
                    //}
                else if (password == "") {
                    $('#spnRegisterReturnMessage').text("Password is required.");
                    return false;
                }
                else if (email_id == "") {
                    $('#spnRegisterReturnMessage').text("Email is required.");
                    return false;
                }
                else if (!CheckEmail(email_id)) {
                    $('#spnRegisterReturnMessage').text("Email is not valid.");
                    return false;
                }
                else if (mobileNo == "") {
                    $('#spnRegisterReturnMessage').text("Mobile no is required.");
                    return false;
                }
                else if (!telInput.intlTelInput("isValidNumber")) {
                    $('#spnRegisterReturnMessage').text("Mobile no is not valid.");
                    return false;
                }
                var extension = $("#txtRegMobileNo").intlTelInput("getSelectedCountryData").dialCode;
                var fullMobileNo = "+" + extension + ' ' + mobileNo;
                var refBy = $('#hdnRefby').val();
                data = { "NAME": name, "EMAIL": email_id, "PASSWRD": password, "MOBILENO": fullMobileNo,'REFBY':refBy };
                $.ajax({
                    type: "POST",
                    url: rootUrl + "Home/CreateUser",
                    data: data,
                    async: true,
                    beforeSend: function () {
                        loader.show();
                    },
                    complete: function () {
                        loader.hide();
                    },
                    success: function (response) {
                        //console.log(response);
                        if (response.ResponseStatus == "1") {
                            //alertMessage(response.ResponseMessage, 'Success', 1);
                            var data = response.lobcls_VH_USR;
                            var mobileNo = data[0].MOBILENO;
                            var email = data[0].EMAIL;
                            var name = data[0].NAME;
                            verifyType = true;
                            $('#hdnOtpType').val('R');
                            $('#ForgetPasswordModalPopup').modal('show');
                            $('#btndisplayClose').hide();
                            $('#rf-Title').text('Mobile Verification');
                            $('#btnOTPMobile').show();
                            $('#mobile').click();
                            mobileNo = mobileNo.replace(/\s/g, '');
                            $("#txtUserMobileNo").intlTelInput("setNumber", mobileNo);
                            $('.ShowHideTabe').hide();
                            $('#email').hide();
                            //$('#txtUserMobileNo').val(mobileNo).attr('disabled', true);
                            //$('#txtUserEmailId').val(email).attr('disabled', true);

                        }
                        else
                            alertMessage(response.ResponseMessage, 'Failure', 0);
                    }
                });
            });
            $('#btnShowSkills').click(function () {
                var selectedSkillType = $('#sltAllSkills').val();
                if (selectedSkillType != "0") {
                    var formType = '';
                    switch (selectedSkillType) {
                        case "SKLP":
                            // formType = "_PartialProfessionalSkills";
                            $('#modal-ProfessionalSkill').modal("show");
                            break;
                        case "SKLH":
                            // formType = "_PartialHobby";
                            $('#modal-HobbySkill').modal("show");
                            break;
                        case "SKLO":
                            // formType = "_PartialOtherSkills";
                            $('#modal-OtherSkill').modal("show");
                            break;
                        case "SKLE":
                            // formType = "_PartialEntrepreneur";
                            $('#modal-Entrepreneur').modal("show");
                            break;
                        case "SKLI":
                            //formType = "_PartialInvester";
                            $('#modal-Investor').modal("show");
                    }
                    if (selectedSkillType == "SKLI") {
                        $.ajax({
                            url: rootUrl + "Opportunity/" + formType,
                            dataType: "html",
                            success: function (data) {
                                $('#DivSkills').html(data);

                            }
                        });
                    }
                }
                else {
                    alertMessage('Skill is required.');
                }
            });
            $('#btnGoPosts').click(function () {
                var selectedSkillType = $('#sltPostAllSkills').val();
                if (selectedSkillType == 'WAR' || selectedSkillType == 'RFW') {
                    if ((_url == '/'||_url.toLowerCase()=='/viewham') && !(isAllow)) {
                        $('#myLoginModal').modal("show");
                        return false;
                    }
                }
                if (selectedSkillType != "0") {
                    var formType = '';
                    switch (selectedSkillType) {
                        case "PBP":
                            {
                                $('#myBusinessProposalModal').modal('show');
                                return false;
                            }
                            break;
                        case "RFF":
                            formType = "_PartialFunding";
                            break;
                        case "OW":
                            formType = "_PartialOfferWork";
                            break;
                        case "RFW":
                            formType = "_PartialWork";
                            break;
                        case "WAR":
                            formType = "_PartialReview";
                    }
                    $.ajax({
                        url: rootUrl + "Post/" + formType,
                        dataType: "html",
                        success: function (data1) {
                            $('#DivPostSkills').html(data1);
                            $('#myModalPost').modal('show');
                        }
                    });
                }
            });

            //$('#btnShowPostSkills').click(function () {
            //    var selectedSkillType = $('#sltPostAllSkills').val();
            //    if (selectedSkillType != "0") {
            //        var formType = '';
            //        switch (selectedSkillType) {
            //            case "PBP":
            //                formType = "_PartialBussinessProposal";
            //                // $('#modal-PostBussinessProposal').modal("show");
            //                break;
            //            case "RFF":
            //                formType = "_PartialFunding";
            //                break;
            //            case "OW":
            //                formType = "_PartialOfferWork";
            //                break;
            //            case "RFW":
            //                formType = "_PartialWork";
            //                break;
            //            case "WAR":
            //                formType = "_PartialReview";
            //        }
            //        $.ajax({
            //            url: rootUrl + "Post/" + formType,
            //            dataType: "html",
            //            success: function (data1) {
            //                var _url = window.location.pathname;
            //                $('#DivPostSkills').html(data1);
            //                $('#myModalPost').modal('show');
            //                if (selectedSkillType == 'PBP') {
            //                    $('#divBusinessproposal').modal('show');
            //                }
            //                else if (selectedSkillType == 'RFW') {
            //                    if ((_url == '/') && !(isAllow)) {
            //                        $('#myLoginModal').modal("show");
            //                        return false;
            //                    }
            //                }
            //                else if (selectedSkillType == 'WAR') {
            //                    if ((_url == '/') && !(isAllow)) {
            //                        $('#myLoginModal').modal("show");
            //                        return false;
            //                    }
            //                }
            //            }
            //        });
            //    }
            //    else {
            //        alertMessage('Post is required.');
            //    }
            //});
            $('#spnLoginPassword_P').unbind('click').click(function () {
                debugger;
                var type = $('#txtLoginPassword_P').attr('type');
                if (type == "text") {
                    $(this).find($("i")).removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                    $('#txtLoginPassword_P').removeAttr("type");
                    $('#txtLoginPassword_P').prop('type', 'password');
                } else {
                    $(this).find($("i")).removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                    $('#txtLoginPassword_P').removeAttr("type");
                    $('#txtLoginPassword_P').prop('type', 'text');
                }
            });
            $('#spnDisplayPwd').unbind('click').click(function () {
                debugger;
                var type = $('#txtLoginPassword').attr('type');
                if (type == "text") {
                    $(this).find($("i")).removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                    $('#txtLoginPassword').removeAttr("type");
                    $('#txtLoginPassword').prop('type', 'password');
                } else {
                    $(this).find($("i")).removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                $('#txtLoginPassword').removeAttr("type");
                $('#txtLoginPassword').prop('type', 'text');
               }
            });
            $('#spnDisplayRegPwd').unbind('click').click(function () {
                debugger;
                var type = $('#txtRegPassword').attr('type');
                if (type == "text") {
                    $(this).find($("i")).removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                    $('#txtRegPassword').removeAttr("type");
                    $('#txtRegPassword').prop('type', 'password');
                } else {
                    $(this).find($("i")).removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                    $('#txtRegPassword').removeAttr("type");
                    $('#txtRegPassword').prop('type', 'text');
                }
            });
            $('#lblHRC').unbind('click').click(function () {
                $('#divRefCode').toggle('show');
            });
            $('#spnApplyRC').unbind('click').click(function () {
                var refCode = $('#txtRefCode').val();
                $.ajax({
                    type: "POST",
                    url: rootUrl + "Home/VerifyRefCode",
                    async: true,
                    data: { 'RefCode': refCode },
                    dataType: "json",
                    //beforeSend: function () {
                    //    loader.show();
                    //},
                    //complete: function () {
                    //    loader.hide();
                    //},
                    success: function (response) {
                        console.log(response);
                        if (response == 0) {
                            $('#spnRefCode').empty().text('Please enter a valid Reference Code.').show();
                            $('#hdnRefby').val(0);
                        } else {
                            $('#spnRefCode').empty().text('Reference Code Applied.').show();
                            $('#hdnRefby').val(response);
                        }
                    }
                });
            });
            $('#spnlogo').unbind('click').click(function () {
               // window.location.reload();
            });
        });
        var ForgotPassword = (function () {
            var rootUrl = '/'
            return {
                SendOTP: function (data) {
                    $.ajax({
                        type: "POST",
                        url: rootUrl + "Home/Forgotpassword",
                        async: true,
                        traditional: true,
                        data: data,
                        dataType: "json",
                        beforeSend: function () {
                            loader.show();
                        },
                        complete: function () {
                            loader.hide();
                        },
                        success: function (response) {
                            var message = response.ResponseStatus == 1 ? "Success" : "Error";
                            alertMessage(response.ResponseMessage, message, response.ResponseStatus);
							//$('#btnOTPMobile').text('Re-Send');
                        }
                    });
                },
                VerifyEmail: function (data) {
                    $.ajax({
                        type: "POST",
                        url: rootUrl + "Home/VerifyEmail",
                        data: data,
                        dataType: "json",
                        beforeSend: function () {
                            loader.show();
                        },
                        complete: function () {
                            loader.hide();
                        },
                        success: function (response) {
                            if (response.ResponseStatus != 0) {
                                if (!verifyType) {
                                    $('#ForgetPasswordModalPopup').modal('hide');
                                  //  $('#UpdatePasswordModalPopup').modal('show');
									$('#txtNewpassword').val('')
                                }
                                // alertMessage(response.ResponseMessage, "Success", 0);
                            }
                            var message = response.ResponseStatus == 1 ? "Success" : "Error";
                            alertMessage(response.ResponseMessage, message, response.ResponseStatus);
                        }
                    });
                },
                VerifyOTP: function (data) {
                    $.ajax({
                        type: "POST",
                        url: rootUrl + "Home/VerifyOTP",
                        async: true,
                        traditional: true,
                        data: data,
                        dataType: "json",
                        beforeSend: function () {
                            loader.show();
                        },
                        complete: function () {
                            loader.hide();
                        },
                        success: function (response) {
                            if (response.ResponseStatus != 0) {
                                $('#ForgetPasswordModalPopup').modal('hide');
                                if (!verifyType) {
                                    $('#UpdatePasswordModalPopup').modal('show');
                                    $('#txtNewpassword').val('');
                                }
                                alertMessage(response.ResponseMessage, "Success", response.ResponseStatus);
                                $('#btnAlertMessageClose').unbind('click').click(function () {
                                    if ($('#hdnOtpType').val() == "R") {
                                     window.location.href = rootUrl + "Home/Dashboard";
                                    }
                                });
                            }
                            else {
                                alertMessage(response.ResponseMessage, "Error", response.ResponseStatus);
                            }
                        }
                    });
                },

                UpdatePassword: function (data) {
                    $.ajax({
                        type: "POST",
                        url: rootUrl + "Home/UpdatePasswordF",
                        async: true,
                        traditional: true,
                        data: data,
                        dataType: "json",
                        beforeSend: function () {
                            loader.show();
                        },
                        complete: function () {
                            loader.hide();
                        },
                        success: function (response) {
                            $('#UpdatePasswordModalPopup').modal('hide');
                            var message = response.ResponseStatus == 1 ? "Success" : "Error";
                            alertMessage(response.ResponseMessage, message, response.ResponseStatus);
                        }
                    });
                }
            }
        })();

         
        //document ready end
    </script>
    
    <!-- #region ---- Investor Popup ---- -->

    <div class="modal fade" id="modal-Investor" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <p class="modal-title"><b>Investor Details</b></p>
                </div>
                <div class="modal-body">
                     <script src="<?php echo base_url(); ?>scr/Countries.js"></script>
<script src="<?php echo base_url(); ?>scr/Investor.js"></script>
<script>
    //document ready start 
    $(function () {
        viewham.loadLocations('sltInvestorLocations', 'sltInvestorLocations1');
    });
    //document ready end
</script>
<div class="row" id="divInvestor">
    <div class="row form-group">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Industry<span class="req">*</span></label>
                <select id="ddlIndustries" name="Industries" class="js-example-basic-multiple" multiple="multiple" style="width:100% !important"></select>
            </div>
            <div class="form-group">
                <label>Locations<b class="req">*</b></label>
                <input type="text" class="form-control" id="sltInvestorLocations" placeholder="Search Locations" />
                <select id="sltInvestorLocations1" class="js-example-basic-multiple  form-control" multiple="multiple" style="width:100% !important"></select>
            </div>
            <div class="form-group">
                <label for="sltInvesttype">Association Role<b class="req">*</b></label>
                <select class="js-example-basic-multiple form-control" multiple="multiple" id="sltInvesttype" style="width:100% !important;">
                    <option value="SLP" name="SLP"></option>
                    <option value="COF" name="COF"></option>
                    <option value="STP" name="STP"></option>
                    <option value="FIN" name="FIN"></option>
                    <option value="OTH" name="OTH"></option>
                    <option value="MTR" name="MTR"></option>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
        <div class="row form-group">
            <label class="col-sm-12">Investment<span class="req">*</span></label>
            <div class="col-sm-4">
                <label>Currency</label>
                <select class="form-control" name="country" id="sltInvestorcurrency"></select>
            </div>
            <div class="col-sm-4">
                <label>Min</label>
                <input type="text" class="form-control" id="txtInvestMinAmount" placeholder="Min" maxlength="9" />
            </div>
            <div class="col-sm-4">
               <label>Max</label>
                <input type="text" class="form-control" id="txtInvestMaxAmount" placeholder="Max" maxlength="9" />
            </div>
        </div>
            <div class="row form-group">
                <label class="col-sm-12">Share<b class="req">*</b></label>
                
                <div class="col-sm-6">
                    <label>Min %</label>
                    <input type="text" class="form-control" maxlength="3" id="txtExpectedMinAmount" placeholder="Min Share" />
                </div>
                <div class="col-sm-6">
                    <label>Max %</label>
                    <input type="text" class="form-control" maxlength="3" id="txtExpectedMaxAmount" placeholder="Max share" />
                </div>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-sm-12 text-right">
            <button type="button" class="btn btn-success" data-type="Save" id="btnInvesterSave"><i class="fa fa-floppy-o"></i> Save</button>
        </div>
    </div>
   
</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- #endregion -->

    <!-- #region ---- Entrepreneur Popup -->

    <div class="modal fade" id="modal-Entrepreneur" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <p class="modal-title"><b>Entrepreneur Details</b></p>
                </div>
                <div class="modal-body">
                    <script src="<?php echo base_url(); ?>scr/Countries.js"></script>
<script src="<?php echo base_url(); ?>scr/Entrepreneur.js"></script>
<script src="<?php echo base_url(); ?>scr/Investor.js"></script>
<script>
    //document ready start
    $(function () {
        viewham.loadLocations('sltEntrepreneurLocations', 'sltEntrepreneurLocations1');
    });
    //document ready end
</script>
<div class="row" id="divEntreprenuer">
    <div class="row form-group">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Industry<span class="req">*</span></label>
                <select id="ddlEntrepreneur" class="js-example-basic-single form-control" style="width:100% !important;"></select>
            </div>
            <div class="form-group">
                <label>Expertise<span class="req">*</span></label>
                <select id="ddlExpertise" class="js-example-basic-multiple form-control" multiple="multiple" style="width:100% !important;"></select>
            </div>
            <div class="form-group">
                <label>Experience<span class="req">*</span></label>
                <select id="ddlExperience" class="js-example-basic-single form-control" style="width:100% !important;">
                    <option value="0">Fresher</option>
                    <option value="1">0-1 years</option>
                    <option value="2">1-2 years</option>
                    <option value="3">2-3 years</option>
                    <option value="4">3-4 years</option>
                    <option value="5">4-5 years</option>
                    <option value="6">5-6 years</option>
                    <option value="7">6-7 years</option>
                    <option value="8">7-8 years</option>
                    <option value="9">8-9 years</option>
                    <option value="10">More than 10 years </option>
                </select>

            </div>
            <div class="form-group">
                <label>Nature of Business <span class="req">*</span></label>
                <select class="js-example-basic-multiple Locations form-control" multiple="multiple" id="sltBusinesstype" style="width:100% !important;">
                    <option value="EOB" name="EOB"></option>
                    <option value="AOP" name="AOP"></option>
                    <option value="AFR" name="AFR"></option>
                </select>
            </div>
            </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="row">
                    <label for="sltEntrepreneurcurrency" class="col-sm-12">Budget<span class="req">*</span></label>
                    <div class="col-sm-4">
                        <label>Currency</label>
                        <div> <select class="form-control" name="country" id="sltEntrepreneurcurrency" style="width:100% !important;"></select></div>
                    </div>
                    <div class="col-sm-4">
                        <label>Min</label>
                        <div><input type="text" class="form-control" id="txtEnterpreneurMinReturn" placeholder="Min" maxlength="9" /></div>
                    </div>
                    <div class="col-sm-4">
                        <label>Max</label>
                        <div><input type="text" class="form-control" id="txtEnterpreneurMaxReturn" placeholder="Max" maxlength="9" /></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Locations</label><span class="req">*</span>
                <input type="text" class="form-control" id="sltEntrepreneurLocations" placeholder="Search Locations" />
                <select id="sltEntrepreneurLocations1" class="js-example-basic-multiple form-control" multiple="multiple" style="width:100% !important;"></select>
            </div>
        </div>
       
    </div>
    <div class="row form-group">
        <div class="col-sm-12 text-right">
            <button type="button" class="btn btn-success" data-type="Save" id="btnEntrepreneurSave"><i class="fa fa-floppy-o"></i> Save</button>
        </div>
    </div>
  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- #endregion -->

<!-- Visual Studio Browser Link -->
<script type="application/json" id="__browserLink_initializationData">
    {"appName":"Chrome","requestId":"aced8039139b44f6be447c2537de30b5"}
</script>
<script type="text/javascript" src="http://localhost:55755/555bc3add9ac4ee193b3d5d4a5d954a3/browserLink" async="async"></script>
<!-- End Browser Link -->

</body>
</html>