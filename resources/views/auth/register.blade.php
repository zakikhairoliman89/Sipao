<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/veltrix-codeIgniter/layouts/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 08:24:27 GMT -->

<head>

    <meta charset="utf-8">
    <title>Register | Veltrix - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets') }}/images/favicon.ico">


    <!-- Bootstrap Css -->
    <link href="{{ url('assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ url('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ url('assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20">Free Register</h5>
                                <p class="text-white-50">Get your free Veltrix account now.</p>
                                <a href="index.html" class="logo logo-admin">
                                    <img src="{{ url('assets') }}/images/logo-sm.png" height="24" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="p-3">
                                <form class=" mt-4" action="{{ url('register') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="useremail">Email</label>
                                        <input type="email" class="form-control" id="useremail" name="email"
                                            placeholder="Enter email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" name="password"
                                            placeholder="Enter password">
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-12 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light"
                                                type="submit">Register</button>
                                        </div>
                                    </div>

                                    <div class="mt-2 mb-0 row">
                                        <div class="col-12 mt-4">
                                            <p class="mb-0">By registering you agree to the Veltrix <a href="#"
                                                    class="text-primary">Terms of Use</a></p>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <p>Already have an account ? <a href="pages-login.html" class="fw-medium text-primary"> Login
                            </a> </p>
                        <p>©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                            <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a>
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ url('assets') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ url('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('assets') }}/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ url('assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ url('assets') }}/libs/node-waves/waves.min.js"></script>


    <script src="{{ url('assets') }}/js/app.js"></script>

</body>

<!-- Mirrored from themesdesign.in/veltrix-codeIgniter/layouts/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 08:24:27 GMT -->

</html>
