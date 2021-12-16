<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/highdmin/layouts/vertical/forms-summernote.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Dec 2021 14:49:39 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Summernote | Highdmin - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://coderthemes.com/highdmin/layouts/assets/images/favicon.ico">

        <!-- Summernote css -->
        <link href="assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />

		<!-- App css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index-2.html" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                            <!-- <span class="logo-lg-text-light">Highdmin</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-light">H</span> -->
                        </span>
                    </a>

                    <a href="index-2.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme"
                            class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                                data-toggle="dropdown">Maxine Kennedy</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock mr-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">
                            <li class="menu-title">Navigation</li>
                            <?=menu($_GET['token'])?>                            
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">
    
                        <ul class="list-unstyled topnav-menu float-right mb-0">

                            <li class="d-none d-lg-block">
                                <form class="app-search">
                                    <div class="app-search-box">
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search..." id="top-search">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
    
                            <li class="dropdown d-inline-block d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>
    
    
    
                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-bell noti-icon"></i>
                                    <span class="badge badge-danger rounded-circle noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">
    
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="#" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>
    
                                    <div class="noti-scroll" data-simplebar>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Doug Dukes commented on Admin Dashboard
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Mario Drummond</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-secondary">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>
    
                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all
                                        <i class="fe-arrow-right"></i>
                                    </a>
    
                                </div>
                            </li>
    
                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name ml-1">
                                        Maxine K <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-help-circle"></i>
                                        <span>My Wallet <span class="badge badge-success float-right">3</span> </span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-lock"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </a>
    
                                </div>
                            </li>
    
                            <li class="dropdown notification-list">
                                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                    <i class="fe-settings noti-icon"></i>
                                </a>
                            </li>
    
                        </ul>

                        <!-- LOGO -->
                        <div class="logo-box">
                            <a href="index-2.html" class="logo logo-dark text-center">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="24">
                                    <!-- <span class="logo-lg-text-light">Highdmin</span> -->
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="22">
                                    <!-- <span class="logo-lg-text-light">H</span> -->
                                </span>
                            </a>

                            <a href="index-2.html" class="logo logo-light text-center">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="22">
                                </span>
                            </a>
                        </div>
    
                        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                            <li>
                                <button class="button-menu-mobile waves-effect waves-light">
                                    <i class="fe-menu"></i>
                                </button>
                            </li>

                            <li>
                                <!-- Mobile menu toggle (Horizontal Layout)-->
                                <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>   
            
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Summernote</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                        <li class="breadcrumb-item active">Summernote</li>
                                    </ol>
                                </div>
                            </li>
    
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end Topbar -->
                
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Default Editor</h4>
                                        <p class="sub-header">Super simple wysiwyg editor on Bootstrap</p>

                                        <!-- basic summernote-->
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-static">Clock</label>
                                                <div class="col-md-10">
                                                    <input type="text" readonly class="form-control-plaintext" id="example-static" value="<?=date("d-m-Y H:I:sa")?>">
                                                </div>
                                            </div>
                                                
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-placeholder">Title</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="title" id="example-placeholder" class="form-control" placeholder="placeholder">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-helping">Helping text</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="dept"  id="example-helping" class="form-control" placeholder="Helping text">
                                                    <!--span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span-->
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-textarea">Article</label>
                                                <div class="col-md-10">
                                                    <textarea name="article" class="form-control" rows="5" id="summernote-basic"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <button  type="submit" name="_submit" value="article-add" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->  

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <script>document.write(new Date().getFullYear())</script> &copy; Highdmin theme by <a href="#">Coderthemes</a> 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Summernote js -->
        <script src="assets/libs/summernote/summernote-bs4.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/form-summernote.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/highdmin/layouts/vertical/forms-summernote.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Dec 2021 14:49:40 GMT -->
</html>