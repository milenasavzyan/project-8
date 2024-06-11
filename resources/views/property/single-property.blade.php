
@extends('layouts.app')
@if($property)
    @section('title', $property->title)
@endif


<body>

<!-- Wrapper -->
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
                    <div class="header-widget">
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
                        <a href="{{ route('property.create') }}" class="button border">Submit Property</a>
                    </div>
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
    <div id="titlebar" class="property-titlebar margin-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if($property)
                        <a href="listings-list-with-sidebar.html" class="back-to-listings"></a>
                        <div class="property-title">
                            <h2>{{ $property->title }} <span class="property-badge">{{ $property->statusName }}</span></h2>
                            <span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							{{ $property->address }}
						</a>
					</span>
                        </div>

                        <div class="property-pricing">
                            <div class="property-price">${{$property->price}}</div>
                            <div class="sub-price">${{ $property->area }} / sq ft</div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->

    <!-- Slider -->
    <div class="fullwidth-property-slider margin-bottom-50">
        @foreach ($property->images as $image)
            <div><img src="{{ asset($image->image) }}" alt=""></div>
        @endforeach
    </div>


    <div class="container">
	<div class="row">

		<!-- Property Description -->
		<div class="col-lg-8 col-md-7">
			<div class="property-description">
                @if($property)

				<!-- Main Features -->
				<ul class="property-main-features">
					<li>Area <span>{{ $property->area }} sq ft</span></li>
					<li>Rooms <span>{{ $property->rooms }}</span></li>
					<li>Bedrooms <span>{{ $property->bedrooms }}</span></li>
					<li>Bathrooms <span>{{ $property->bathrooms }}</span></li>
				</ul>


				<!-- Description -->
				<h3 class="desc-headline">Description</h3>
					<p>{{ $property->description }}</p>


				<!-- Details -->
				<h3 class="desc-headline">Details</h3>
				<ul class="property-features margin-top-0">
					<li>Building Age: <span>{{ $property->building_age }}</span></li>
					<li>Zip Code: <span>{{ $property->zip_code }}</span></li>
					<li>State: <span>{{ $property->state }}</span></li>
				</ul>
                    @endif

				<!-- Features -->
                    <h3 class="desc-headline">Features</h3>
                    <ul class="property-features checkboxes margin-top-0">
                        @foreach ($property->features as $feature)
                            <li>{{ $feature->name }}</li>
                        @endforeach
                    </ul>
				<!-- Similar Listings Container -->


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-5">
			<div class="sidebar sticky right">
					</div>

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->

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
<script type="text/javascript" src="../public/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="../public/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="../public/scripts/masonry.min.js"></script>
<script type="text/javascript" src="../public/scripts/custom.js"></script>

<!-- Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script type="text/javascript" src="../public/scripts/infobox.min.js"></script>
<script type="text/javascript" src="../public/scripts/markerclusterer.js"></script>
<script type="text/javascript" src="../public/scripts/maps.js"></script>

<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
<script src="../public/scripts/moment.min.js"></script>
<script src="../public/scripts/daterangepicker.js"></script>

</div>
<!-- Wrapper / End -->


</body>
</html>
