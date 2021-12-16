<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/highdmin/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Dec 2021 14:50:00 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Log In | Highdmin - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- App css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-fluid-pages loading pb-0">

        <div class="auth-fluid" style="background-image: url(assets/images/bg-auth.jpg);">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div>
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center">
                            <div class="auth-logo">
                                <a href="index-2.html" class="logo auth-logo-dark">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-dark.png" alt="" height="26">
                                    </span>
                                </a>
            
                                <a href="index-2.html" class="logo auth-logo-light">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="26">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <div class="text-center pt-3">
                            <h4 class="mt-0">Sign In</h4>
                            <p class="text-muted mb-4">Enter your email address and password to access account.</p>
                        </div>

                        <!-- form -->
                        <form method="post" action="index.php">
                            <div class="form-group">
                                <label for="emailaddress">Username </label>
                                <input class="form-control" name="username" type="text" id="emailaddress" required="" placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <a href="pages-recoverpw.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                            </div>
                            
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button name="_submit" value="user-login" class="btn btn-primary btn-block" type="submit">Log In </button>
                            </div>
                            
                            <div class="text-center mt-4">
                                <p class="text-muted">Don't have an account? <a href="?page=register" class="text-dark ml-1">Sign Up</a></p>
                            </div>
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted"><script>document.write(new Date().getFullYear())</script> &copy; Highdmin theme by <a href="#">Coderthemes</a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div>
            </div>
            <!-- end auth-fluid-form-box-->

        </div>
        <!-- end auth-fluid-->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/highdmin/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Dec 2021 14:50:01 GMT -->
</html>