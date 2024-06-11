
@extends('layouts.app')
@if($property)
    @section('title', $property->title)
@endif

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
					<a href="index.html"><img src="../images/logo.png" alt=""></a>
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
                                    <span><img src="images/agent-03.jpg" alt=""></span>
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


@section('content')
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

            @section('content')
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
        @endsection
</div>


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script type="text/javascript" src="scripts/infobox.min.js"></script>
<script type="text/javascript" src="scripts/markerclusterer.js"></script>
<script type="text/javascript" src="scripts/maps.js"></script>

<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
<script src="scripts/moment.min.js"></script>
<script src="scripts/daterangepicker.js"></script>

</div>
<!-- Wrapper / End -->

</html>
