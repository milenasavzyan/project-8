
@extends('layouts.app')
    @section('title', 'My Profile')

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
					<img src="../public/images/listing-01.jpg" alt="">
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
					<img src="../public/images/listing-03.jpg" alt="">
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
					<img src="../public/images/listing-05.jpg" alt="">
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
					<a href="index.html"><img src="../public/images/logo.png" alt=""></a>
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

                        <li><a class="current" href="#">Home</a>
                            <ul>
                                <li><a href="{{ route('index') }}">Home </a></li>
                            </ul>
                        </li>

                        <li><a href="#">Listings</a>
                            <ul>
                                <li><a href="#">List Layout</a>
                                    <ul>
                                        <li><a href="{{ route('property.index')}}">Listings</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a href="#">Features</a>
                            <ul>
                                <li><a href="#">Search Styles</a>
                                    <ul>
                                        <li><a href="{{ route('views.index') }}">Listing List</a></li>
                                        <li><a href="{{ route('property.index')}}">Listings</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">My Account</a>
                                    <ul>
                                        <li><a href="{{ route('user.show') }}">My Profile</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('property.create') }}">Submit Property</a></li>
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

					<!-- User Menu -->
					<div class="user-menu">
                        @if(Auth::check())
                            <div class="user-name">
                                <span><img src="../public/images/agent-03.jpg" alt=""></span>
                                Hi, {{ Auth::user()->name }}!
                            </div>
                        @endif
						<ul>
                            <li><a href="{{ route('user.show') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
							<li><a href="{{ route('user.logout') }}"><i class="sl sl-icon-power"></i> Log Out</a></li>
						</ul>
					</div>

					<a href="submit-property.html" class="button border">Submit Property</a>
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

				<h2>My Profile</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="{{ route('index') }}">Home</a></li>
						<li>My Profile</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">


		<!-- Widget -->
		<div class="col-md-4">
			<div class="sidebar left">

				<div class="my-account-nav-container">

					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Account</li>
                        <li><a href="{{ route('user.show') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
					</ul>

					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Listings</li>
						<li><a href="{{ route('property.create') }}"><i class="sl sl-icon-action-redo"></i> Submit New Property</a></li>
					</ul>

					<ul class="my-account-nav">
                        <li><a href="{{ route('user.logout') }}"><i class="sl sl-icon-power"></i> Log Out</a></li>
					</ul>

				</div>

			</div>
		</div>

        <div class="col-md-8">
            <div class="row">
                @if(Auth::check())

                    <form action="{{ route('user.update', ['id' => $user->id]) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="col-md-8 my-profile">
                            <h4 class="margin-top-0 margin-bottom-30">My Account</h4>

                            <label>Your Name</label>
                            <input name="name" value="{{ $user->name }}" type="text">

                            <label>Email</label>
                            <input name="email" value="{{ $user->email }}" type="text">

                            <label>New Password</label>
                            <input name="new_password" type="password">


                            <button class="button margin-top-20 margin-bottom-20">Save Changes</button>
                        </div>

                    </form>

                @endif
                <div class="col-md-4">
                    <!-- Avatar -->
                    <div class="edit-profile-photo">
                        @if($user->images)
                            <img src="{{ asset('../public/images/' . $user->images->image) }}" alt="">
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                    <input type="file" class="upload"/>
                                </div>
                            </div>
                        @else
                            <p>No image available</p>
                        @endif
                    </div>

                </div>


            </div>
        </div>

    </div>
</div>


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
