<!DOCTYPE html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/color.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div id="wrapper">


    <!-- Header Container
    ================================================== -->
    <header id="header-container">

        <!-- Topbar -->
        <div id="top-bar">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Top bar -->
                    <ul class="top-bar-menu">
                        <li><i class="fa fa-phone"></i> (123) 123-456 </li>
                        <li><i class="fa fa-envelope"></i> <a href="#">office@example.com</a></li>
                        <li>
                            <div class="top-bar-dropdown">
                                <span>Dropdown Menu</span>
                                <ul class="options">
                                    <li><div class="arrow"></div></li>
                                    <li><a href="#">Nice First Link</a></li>
                                    <li><a href="#">Second Link With Long Title</a></li>
                                    <li><a href="#">Third Link</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- Left Side Content / End -->


                <!-- Left Side Content -->
                <div class="right-side">

                    <!-- Social Icons -->
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
                    </ul>

                </div>
                <!-- Left Side Content / End -->

            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Topbar / End -->


        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>


                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                        </button>
                    </div>


                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">

                            <li><a href="#">Users</a>
                                <ul>
                                    <li><a href="{{ route('admin.users.index') }}">Users</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Properties</a>
                                <ul>
                                    <li><a href="{{ route('admin.properties.index') }}">Properties</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Features</a>
                                <ul>
                                    <li><a href="{{ route('admin.features.index') }}">Features</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->

                <!-- Right Side Content / End -->
                <div class="right-side">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <a href="{{ route('user.logout') }}" class="sign-in" style="font-size: 18px"> Log Out</a>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>@yield('name')</h2>


                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
    <!-- Footer
================================================== -->
    <div class="margin-top-55"></div>

    <div id="footer" class="sticky-footer">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img class="footer-logo" src="../images/logo.png" alt="">
                    <br><br>
                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
                </div>

                <div class="col-md-4 col-sm-6 ">
                    <h4>Helpful Links</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('user.logout') }}">Login</a></li>
                        <li><a href="{{ route('user.show') }}">My Account</a></li>
                        <li><a href="{{ route('property.create') }}">Add Property</a></li>
                    </ul>

                    <div class="clearfix"></div>
                </div>

                <div class="col-md-3  col-sm-12">
                    <h4>Contact Us</h4>
                    <div class="text-widget">
                        <span>12345 Little Lonsdale St, Melbourne</span> <br>
                        Phone: <span>(123) 123-456 </span><br>
                    </div>

                    <ul class="social-icons margin-top-20">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                    </ul>

                </div>

            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights">© 2024 Findeo. All Rights Reserved.</div>
                </div>
            </div>

        </div>

    </div>

</div>
</body>
