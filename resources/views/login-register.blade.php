
@extends('layouts.app')
@section('title', 'Findeo')

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Compare Properties Widget
================================================== -->
<div class="compare-slide-menu">

	<div class="csm-trigger"></div>

	<div class="csm-content">
		<h4>Compare Properties <div class="csm-mobile-trigger"></div></h4>

		<div class="csm-properties">

			<!-- Property -->
			<div class="listing-item compact">
				<a href="single-property-page-2.html" class="listing-img-container">
					<div class="remove-from-compare"><i class="fa fa-close"></i></div>
					<div class="listing-badges">
						<span>For Sale</span>
					</div>
					<div class="listing-img-content">
						<span class="listing-compact-title">Eagle Apartments <i>$420,000</i></span>
					</div>
					<img src="images/listing-01.jpg" alt="">
				</a>
			</div>

			<!-- Property -->
			<div class="listing-item compact">
				<a href="single-property-page-2.html" class="listing-img-container">
					<div class="remove-from-compare"><i class="fa fa-close"></i></div>
					<div class="listing-badges">
						<span>For Sale</span>
					</div>
					<div class="listing-img-content">
						<span class="listing-compact-title">Selway Apartments <i>$420,000</i></span>
					</div>
					<img src="images/listing-03.jpg" alt="">
				</a>
			</div>

			<!-- Property -->
			<div class="listing-item compact">
				<a href="single-property-page-2.html" class="listing-img-container">
					<div class="remove-from-compare"><i class="fa fa-close"></i></div>
					<div class="listing-badges">
						<span>For Sale</span>
					</div>
					<div class="listing-img-content">
						<span class="listing-compact-title">Oak Tree Villas <i>$535,000</i></span>
					</div>
					<img src="images/listing-05.jpg" alt="">
				</a>
			</div>

		</div>

		<div class="csm-buttons">
			<a href="admin/properties/index.blade.php" class="button">Compare</a>
			<a href="#" class="button reset">Reset</a>
		</div>
	</div>

</div>
<!-- Compare Properties Widget / End -->


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
					<a href="property/index.blade.php"><img src="../public/images/logo.png" alt=""></a>
				</div>


				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>


				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					<a href="" class="sign-in"><i class="fa fa-user"></i> Log In / Register</a>
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



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Log In & Register</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Log In & Register</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Contact
================================================== -->

<!-- Container -->
<div class="container">

	<div class="row">
	<div class="col-md-4 col-md-offset-4">

	<button class="button social-login via-twitter"><i class="fa fa-twitter"></i> Log In With Twitter</button>
	<button class="button social-login via-gplus"><i class="fa fa-google-plus"></i> Log In With Google Plus</button>
	<button class="button social-login via-facebook"><i class="fa fa-facebook"></i> Log In With Facebook</button>

	<!--Tab -->
	<div class="my-account style-1 margin-top-5 margin-bottom-40">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Log In</a></li>
			<li><a href="#tab2">Register</a></li>
		</ul>

		<div class="tabs-container alt">

			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<form action="{{ route('index') }}" method="post" class="login">
                    @csrf

					<p class="form-row form-row-wide">
						<label for="username">Username:
							<i class="im im-icon-Male"></i>
							<input type="text" class="input-text" name="name" id="username" value="" />
						</label>
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:
							<i class="im im-icon-Lock-2"></i>
							<input class="input-text" type="password" name="password" id="password"/>
						</label>
					</p>

					<p class="form-row">
						<input type="submit" class="button border margin-top-10" name="login" value="Login" />

						<label for="rememberme" class="rememberme">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
					</p>

					<p class="lost_password">
						<a href="#" >Lost Your Password?</a>
					</p>

				</form>
			</div>

			<!-- Register -->
            <div class="tab-content" id="tab2" style="display: none;">
                <form method="post" action="{{ route('user.store') }}" class="register">
                    @csrf
                    <p class="form-row form-row-wide">
                        <label for="username2">Username:
                            <i class="im im-icon-Male"></i>
                            <input type="text" class="input-text" name="name" id="username2" value="" />
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="email2">Email Address:
                            <i class="im im-icon-Mail"></i>
                            <input type="text" class="input-text" name="email" id="email2" value="" />
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="password1">Password:
                            <i class="im im-icon-Lock-2"></i>
                            <input class="input-text" type="password" name="password" id="password1"/>
                        </label>
                    </p>

                    <p class="form-row">
                        <input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
                    </p>
                </form>
            </div>


        </div>
	</div>



	</div>
	</div>

</div>
<!-- Container / End -->



<!-- Footer
================================================== -->
    <div class="margin-top-55"></div>

    <div id="footer" class="sticky-footer">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img class="footer-logo" src="../public/images/logo.png" alt="">
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
    <!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script type="text/javascript" src="../public/scripts/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../public/scripts/jquery-migrate-3.1.0.min.js"></script>
<script type="text/javascript" src="../public/scripts/chosen.min.js"></script>
<script type="text/javascript" src="../public/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="../public/scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="../public/scripts/rangeSlider.js"></script>
<script type="text/javascript" src="../public/scripts/sticky-kit.min.js"></script>
<script type="text/javascript" src="../public/scripts/slick.min.js"></script>
<script type="text/javascript" src="../public/scripts/masonry.min.js"></script>
<script type="text/javascript" src="../public/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="../public/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="../public/scripts/custom.js"></script>





</div>
<!-- Wrapper / End -->


</body>
</html>
