<!DOCTYPE html>
<html>
<head>
    <title>AFA SMS - CMS Panel</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- NEED TO WORK ON -->

    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link  href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dropzone.css">

    <!-- BEGIN CORE JS FRAMEWORK--> 
    <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
    <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
    <script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
    <!-- END CORE JS FRAMEWORK --> 
    <!-- BEGIN PAGE LEVEL JS -->    
    <script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>    
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
    <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="assets/js/jquery.stringToSlug.min.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->     
    
    <!-- BEGIN CORE TEMPLATE JS --> 
    <script src="assets/js/core.js" type="text/javascript"></script> 
    <script src="assets/js/chat.js" type="text/javascript"></script> 
    <script src="assets/js/demo.js" type="text/javascript"></script>
     <script src="assets/js/my_script.js"></script>
     <script src="assets/js/gen_validatorv4.js"></script>
    <!-- END CORE TEMPLATE JS --> 

    <!-- END NEED TO WORK ON -->

</head>
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse"> 
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <!-- BEGIN NAVIGATION HEADER -->
        <div class="header-seperation"> 
            <!-- BEGIN MOBILE HEADER -->
            <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">    
                <li class="dropdown">
                    <a id="main-menu-toggle" href="#main-menu" class="">
                        <div class="iconset top-menu-toggle-white"></div>
                    </a>
                </li>        
            </ul>
            <!-- END MOBILE HEADER -->
            <!-- BEGIN LOGO --> 
            <h4><strong style="color:white">AFA SMS<br>CMS Panel</strong></h4>
            <!-- END LOGO --> 
            </div>
        <!-- END NAVIGATION HEADER -->
        <!-- BEGIN CONTENT HEADER -->
        <div class="header-quick-nav"> 
            <!-- BEGIN HEADER LEFT SIDE SECTION -->
            <!-- END HEADER LEFT SIDE SECTION -->
            <!-- BEGIN HEADER RIGHT SIDE SECTION -->
            <div class="pull-right"> 
                <div class="chat-toggler">  
                    <!-- BEGIN NOTIFICATION CENTER -->
                    <a href="#">
                        <div class="user-details"> 
                            <div class="username">
            
                                <span class="bold"><?php echo $_SESSION['fullname']; ?></span>
                            </div>                      
                        </div> 
                        &nbsp; &nbsp; &nbsp; &nbsp; 
                    </a>    
                    
                    <!-- END NOTIFICATION CENTER -->
                    <!-- BEGIN PROFILE PICTURE -->
                    <!-- <div class="profile-pic"> 
                        <img src="assets/img/image-6.jpg" alt="" data-src="assets/img/image-6.jpg" data-src-retina="assets/img/image-6.jpg" width="35" height="35" />
                    </div>   -->
                    <!-- END PROFILE PICTURE -->                
                </div>
                <!-- BEGIN HEADER NAV BUTTONS -->
                <ul class="nav quick-section">
                    <!-- BEGIN SETTINGS -->
                    <li class="quicklinks"> 
                        <a data-toggle="dropdown" class="dropdown-toggle pull-right" href="#" id="user-options">
                            <div class="iconset top-settings-dark"></div>   
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="user-options">
                            <li><a href="/" target="_blank">Preview</a></li>
                            <li><a href="change_password.php">Change Password</a></li>
                            <li class="divider"></li>                 
                            <li><a href="logout.php"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a></li>
                        </ul>
                    </li>
                    <!-- END SETTINGS -->
                </ul>
                <!-- END HEADER NAV BUTTONS -->
            </div>
            <!-- END HEADER RIGHT SIDE SECTION -->
        </div> 
        <!-- END CONTENT HEADER --> 
    </div>
    <!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER -->