<!--<?php 
    session_start();
    if(empty($_SESSION['username']))
    {
        echo "<script type='text/javascript'>window.location.href='pages/login.html'</script>";
    }
    else
    {
        $namalogin = $_SESSION['namalogin'];
        $statuslogin = $_SESSION['statuslogin'];
    }
?>-->
<!DOCTYPE html>
<html class=" ">

<head>
    <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 4.1
         * This file is part of Ultra Admin Theme.
        -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Report Vendor GCC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">
    <!-- For iPad Retina display -->




    <!-- CORE CSS FRAMEWORK - START -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <link href="assets/plugins/messenger/css/messenger.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/messenger/css/messenger-theme-future.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/messenger/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen"/>

    <link href="assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>
    
    <link href="assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen" />
    
    <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" media="screen"/> 
    
    <link href="assets/plugins/ios-switch/css/switch.css" rel="stylesheet" type="text/css" media="screen" />
    
    <link href="assets/plugins/tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" media="screen" />
    
    <link href="assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    
    <link href="assets/plugins/typeahead/css/typeahead.css" rel="stylesheet" type="text/css" media="screen" />
    
    <link href="assets/plugins/multi-select/css/multi-select.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen"
    />
    <!-- CORE CSS TEMPLATE - START -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
    <!-- START TOPBAR -->
    <div class='page-topbar '>
        <div class='logo-area'>

        </div>
        <div class='quick-area'>
            <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="notify-toggle-wrapper">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-orange">3</span>
                        </a>
                        <ul class="dropdown-menu notifications animated fadeIn">
                            <li class="total">
                                <span class="small">
                                    You have
                                    <strong>3</strong> new notifications.
                                    <a href="javascript:;" class="pull-right">Mark all as Read</a>
                                </span>
                            </li>
                            <li class="list">

                                <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                    <li class="unread available">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Server needs to reboot</strong>
                                                    <span class="time small">15 mins ago</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="unread away">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>45 new messages</strong>
                                                    <span class="time small">45 mins ago</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" busy">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-times"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Server IP Blocked</strong>
                                                    <span class="time small">1 hour ago</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" offline">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>10 Orders Shipped</strong>
                                                    <span class="time small">5 hours ago</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" offline">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>New Comment on blog</strong>
                                                    <span class="time small">Yesterday</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" available">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Great Speed Notify</strong>
                                                    <span class="time small">14th Mar</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" busy">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-times"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Team Meeting at 6PM</strong>
                                                    <span class="time small">16th Mar</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Notifications</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-sm hidden-xs searchform">
                        <div class="input-group">
                            <span class="input-group-addon input-focus">
                                <i class="fa fa-search"></i>
                            </span>
                            <form action="search-page.html" method="post">
                                <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                                <input type='submit' value="">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="data/profile/profile.png" alt="user-image" class="img-circle img-inline">
                            <span>fitri
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">
                            <li>
                                <a href="#settings">
                                    <i class="fa fa-wrench"></i>
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="#profile">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="#help">
                                    <i class="fa fa-info"></i>
                                    Help
                                </a>
                            </li>
                            <li class="last">
                                <a href="pages/login.html">
                                    <i class="fa fa-lock"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="chat-toggle-wrapper">
                        <a href="#" data-toggle="chatbar" class="toggle_chat">
                            <i class="fa fa-comments"></i>
                            <span class="badge badge-warning">9</span>
                            <i class="fa fa-times"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid">

        <!-- SIDEBAR - START -->
        <div class="page-sidebar ">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">

                <!-- USER INFO - START -->
                <div class="profile-info row">

                    <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                        <a href="">
                            <img src="data/profile/profile.png" class="img-responsive img-circle">
                        </a>
                    </div>

                    <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                        <h3>
                            <a href="">fitri</a>

                            <!-- Available statuses: online, idle, busy, away and offline -->
                            <span class="profile-status online"></span>
                        </h3>

                        <p class="profile-title">admin</p>

                    </div>

                </div>
                <!-- USER INFO - END -->



                <ul class='wraplist'>


                    <li class="">
                        <a href="index.php">
                            <i class="fa fa-dashboard"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-users"></i>
                            <span class="title">Report</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="?p=jadwal">Report Vendor</a>
                            </li>
                            <li>
                                <a class="" href="?p=matakuliah">SLA</a>
                            </li>
                            <li>
                                <a class="" href="?p=modul">Performance</a>
                            </li>
                            <li>
                                <a class="" href="?p=tahunajaran">Bingung Banget</a>
                            </li>
                            <li>
                                <a class="" href="?p=jadwalasisten">Bingung Banget2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-user"></i>
                            <span class="title">bingung1</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="?p=absendosen"> Bingung 1.1</a>
                            </li>
                            <li>
                                <a class="" href="?p=absenasisten"> Bingung 1.2</a>
                            </li>
                            <li>
                                <a class="" href="?p=absenmahasiswa">Bingung 1.3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-user"></i>
                            <span class="title">User</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="?p=userdosen">Dosen</a>
                            </li>
                            <li>
                                <a class="" href="?p=userasisten">Asisten</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-envelope"></i>
                            <span class="title">Bingung2</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="?p=overview">Bingung 2.1</a>
                            </li>
                            <li>
                                <a class="" href="?p=oprec">Bingung 2.2</a>
                            </li>
                            <li>
                                <a class="" href="?p=workshop">Bingung 2.3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-graduation-cap"></i>
                            <span class="title">Surat</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="uni-courses.html">All Courses</a>
                            </li>
                            <li>
                                <a class="" href="uni-course-add.html">Add Course</a>
                            </li>
                            <li>
                                <a class="" href="uni-course-edit.html">Edit Course</a>
                            </li>
                            <li>
                                <a class="" href="uni-course-info.html">Course Info</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span class="title">Bingung 3</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="uni-library.html">Bingung 3.1</a>
                            </li>
                            <li>
                                <a class="" href="uni-library-add.html">Bingung 3.2</a>
                            </li>
                            <li>
                                <a class="" href="uni-library-edit.html">Bingung 3.3</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- MAIN MENU - END -->



            <div class="project-info">

                <div class="block1">
                    <div class="data">
                        <span class='title'>New&nbsp;Orders</span>
                        <span class='total'>2,345</span>
                    </div>
                    <div class="graph">
                        <span class="sidebar_orders">...</span>
                    </div>
                </div>

                <div class="block2">
                    <div class="data">
                        <span class='title'>Visitors</span>
                        <span class='total'>345</span>
                    </div>
                    <div class="graph">
                        <span class="sidebar_visitors">...</span>
                    </div>
                </div>

            </div>



        </div>
        <!--  SIDEBAR - END -->
        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <section class="wrapper main-wrapper" style=''>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <!-- MAIN CONTENT -->
                    <?php
                            $pages_dir = 'pages';
                            if(!empty($_GET['p'])){
                                $pages = scandir($pages_dir, 0);
                                unset($pages[0], $pages[1]);
                                $p = $_GET['p'];
                                if(in_array($p.'.php', $pages))
                                    include($pages_dir.'/'.$p.'.php');
                                else
                                    echo 'Halaman tidak ditemukan! :(';
                            }
                            else
                            {
                                include($pages_dir.'/home.php');
                            }
                    ?>
                    <!-- END MAIN CONTENT -->
                </div>
            </section>
        </section>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


    <!-- CORE JS FRAMEWORK - START -->
    <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>
    <!-- CORE JS FRAMEWORK - END -->


    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


    <!-- CORE TEMPLATE JS - START -->
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS - END -->

    <!-- Sidebar Graph - START -->
    <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
    <!-- Sidebar Graph - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script src="assets/plugins/messenger/js/messenger.min.js" type="text/javascript"></script>
    <script src="assets/plugins/messenger/js/messenger-theme-future.js" type="text/javascript"></script>
    <script src="assets/plugins/messenger/js/messenger-theme-flat.js" type="text/javascript"></script>
    <script src="assets/js/messenger.js" type="text/javascript"></script>

    <script src="assets/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>                        

    <script src="assets/plugins/datepicker/js/datepicker.js" type="text/javascript"></script>
    <script src="assets/plugins/daterangepicker/js/moment.min.js" type="text/javascript"></script>
    <script src="assets/plugins/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
    <script src="assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" type="text/javascript"></script> 
    <script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script> 
    <script src="assets/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script> 
    <script src="assets/js/form-validation.js" type="text/javascript"></script>
    
    <script src="assets/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
    <script src="assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="assets/plugins/autonumeric/autoNumeric-min.js" type="text/javascript"></script>
    
    <script src="assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script>  

    <script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.min.js" type="text/javascript"></script> 
    
    <script src="assets/plugins/tagsinput/js/bootstrap-tagsinput.min.js" type="text/javascript"></script> 
    <script src="assets/plugins/typeahead/typeahead.bundle.js" type="text/javascript"></script> 
    <script src="assets/plugins/typeahead/handlebars.min.js" type="text/javascript"></script> 
    
    <script src="assets/plugins/multi-select/js/jquery.multi-select.js" type="text/javascript"></script> 
    <script src="assets/plugins/multi-select/js/jquery.quicksearch.js" type="text/javascript"></script> 
    
    <script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->    
</body>

</html>