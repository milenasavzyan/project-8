
@extends('layouts.app')
@section('title', 'Listing List')



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
            @foreach($properties as $property)
                <div class="listing-item compact">
                    <a href="single-property-page-2.html" class="listing-img-container">
                        <div class="remove-from-compare"><i class="fa fa-close"></i></div>
                        <div class="listing-badges">
                            <span>{{ $property->statusName }}</span>
                        </div>
                        <div class="listing-img-content">
                            <span class="listing-compact-title">{{ $property->title }} <i>${{ $property->price }}</i></span>
                        </div>
                        @foreach ($property->images as $image)
                            <div><img src="{{ asset('images/' . $image->image) }}" alt=""></div>
                        @endforeach

                    </a>
                </div>
            @endforeach

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



<!-- Search
================================================== -->
<section class="search margin-bottom-50">
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<!-- Title -->
			<h3 class="search-title">Search</h3>

			<!-- Form -->
			<div class="main-search-box no-shadow">


				<!-- Row With Forms -->
				<div class="row with-forms">
                    <form method="get" action="{{ route('views.search') }}">
					<!-- Status -->
					<div class="col-md-3">
						<select name="status" data-placeholder="Any Status" class="chosen-select-no-single" >
							<option>Any Status</option>
							<option>For Sale</option>
							<option>For Rent</option>
						</select>
					</div>

					<!-- Property Type -->
					<div class="col-md-3">
						<select name="type" data-placeholder="Any Type" class="chosen-select-no-single" >
							<option>Any Type</option>
                            <option>Apartment</option>
                            <option>House</option>
                            <option>Commercial</option>
                            <option>Garage</option>
                            <option>Lot</option>
						</select>
					</div>

					<!-- Main Search Input -->
					<div class="col-md-6">
						<div class="main-search-input">
							<input name="address" type="text" placeholder="Enter address e.g. street, city or state" value=""/>
							<button class="button">Search</button>
						</div>
					</div>
                    </form>
				</div>


				<!-- More Search Options -->
				<a href="#" class="more-search-options-trigger margin-top-10" data-open-title="More Options" data-close-title="Less Options"></a>

				<div class="more-search-options relative">
					<div class="more-search-options-container">

						<!-- Row With Forms -->
						<div class="row with-forms">

							<!-- Age of Home -->
							<div class="col-md-3">
								<select data-placeholder="Age of Home" class="chosen-select-no-single" >
									<option label="blank"></option>
									<option>Age of Home (Any)</option>
									<option>0 - 1 Years</option>
									<option>0 - 5 Years</option>
									<option>0 - 10 Years</option>
									<option>0 - 20 Years</option>
									<option>0 - 50 Years</option>
									<option>50 + Years</option>
								</select>
							</div>

							<!-- Rooms Area -->
							<div class="col-md-3">
								<select data-placeholder="Rooms" class="chosen-select-no-single" >
									<option label="blank"></option>
									<option>Rooms (Any)</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>

							<!-- Min Area -->
							<div class="col-md-3">
								<select data-placeholder="Beds" class="chosen-select-no-single" >
									<option label="blank"></option>
									<option>Beds (Any)</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>

							<!-- Max Area -->
							<div class="col-md-3">
								<select data-placeholder="Baths" class="chosen-select-no-single" >
									<option label="blank"></option>
									<option>Baths (Any)</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>

						</div>
						<!-- Row With Forms / End -->


						<!-- Checkboxes -->
						<div class="checkboxes in-row">

							<input id="check-2" type="checkbox" name="check">
							<label for="check-2">Air Conditioning</label>

							<input id="check-3" type="checkbox" name="check">
							<label for="check-3">Swimming Pool</label>

							<input id="check-4" type="checkbox" name="check" >
							<label for="check-4">Central Heating</label>

							<input id="check-5" type="checkbox" name="check">
							<label for="check-5">Laundry Room</label>


							<input id="check-6" type="checkbox" name="check">
							<label for="check-6">Gym</label>

							<input id="check-7" type="checkbox" name="check">
							<label for="check-7">Alarm</label>

							<input id="check-8" type="checkbox" name="check">
							<label for="check-8">Window Covering</label>

						</div>
						<!-- Checkboxes / End -->

					</div>

				</div>
				<!-- More Search Options / End -->


			</div>
			<!-- Box / End -->
		</div>
	</div>
</div>
</section>



<!-- Content
================================================== -->
<div class="container">
	<div class="row fullwidth-layout">

		<div class="col-md-12">

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-15">

				<div class="col-md-6">
					<!-- Sort by -->
					<div class="sort-by">
						<label>Sort by:</label>

						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single" >
								<option>Default Order</option>
								<option>Price Low to High</option>
								<option>Price High to Low</option>
								<option>Newest Properties</option>
								<option>Oldest Properties</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
						<a href="#" class="grid-three"><i class="fa fa-th"></i></a>
					</div>
				</div>
			</div>


			<!-- Listings -->
			<div class="listings-container list-layout">

				<!-- Listing Item -->
                @foreach($properties as $property)
				<div class="listing-item">
                    <a href="{{ route('property.show', ['property' => $property->id]) }}" class="listing-img-container">

						<div class="listing-badges">
							<span>{{ $property->statusName }}</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">${{ $property->price }} <i>${{ $property->area }} / sq ft</i></span>
							<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
							<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
						</div>
                        <div class="listing-carousel">
                            @foreach ($property->images as $image)
                                <div><img src="{{ asset($image->image) }}" alt=""></div>
                            @endforeach
                        </div>
					</a>

					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="single-property-page-1.html">{{ $property->title }}</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
                                {{ $property->address }}
							</a>

						</div>

						<ul class="listing-details">
							<li>{{ $property->area }} sq ft</li>
							<li>{{ $property->bedrooms }} Bedroom</li>
							<li>{{ $property->rooms }} Rooms</li>
							<li>{{ $property->bathrooms }} Bathroom</li>
						</ul>

						<div class="listing-footer">
                            @if(Auth::check())
                                <a href="#"><i class="fa fa-user"></i>{{ Auth::user()->name }} </a>
                            @endif
						</div>

					</div>
				</div>
                @endforeach
				<!-- Listing Item / End -->



			</div>
			<!-- Listings Container / End -->

			<div class="clearfix"></div>
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="blank">...</li>
						<li><a href="#">22</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Previous</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</nav>
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>

    @endsection



<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->


</html>
