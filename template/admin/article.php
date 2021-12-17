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

                <div class="h-100" data-simplebar>

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
    
                            <li class="dropdown notification-list">
                                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                    <i class="fe-settings noti-icon"></i>
                                </a>
                            </li>
                        </ul>
    
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
                                    <h2 class="page-title">Article</h2>
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
                                        <h4 class="header-title"><?=$page['title']?></h4>
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
                                                    <input type="text" name="title" id="example-placeholder" class="form-control" value="<?=$article['title']?>" placeholder="placeholder">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-helping">School/Department Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="dept" value="<?=$article['dept']?>"  id="example-helping" class="form-control" placeholder="Helping text">
                                                    <!--span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span-->
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-textarea">Article</label>
                                                <div class="col-md-10">
                                                    <textarea name="article" class="form-control" rows="5" id="summernote-basic"><?=$article['news']?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row text-right">
                                                <button  type="submit" name="_submit" value="<?=$btn?>" class="btn btn-primary">Submit</button>
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