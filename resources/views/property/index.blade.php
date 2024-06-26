<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Findeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/color.css">

</head>


{{--@extends('layouts.app')--}}
{{--@section('title', 'Findeo')--}}
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
                        <div><img src="{{ asset('images/' . $image->image) }}" alt="111"></div>
                    @endforeach

                </a>
			</div>
            @endforeach

		</div>

		<div class="csm-buttons">
			<a href="compare-properties.html" class="button">Compare</a>
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
                @if(Auth::check())
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
                @else
                    <div class="header-widget">
                        <a href="{{ route('user.logout') }}" class="sign-in"><i class="fa fa-user"></i> Log In / Register</a>
                    </div>
                @endif
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Banner
================================================== -->
<div class="parallax" data-background="images/home-parallax.jpg" data-color="#36383e" data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">
	<div class="parallax-content">

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<!-- Main Search Container -->
					<div class="main-search-container">
						<h2>Find Your Dream Home</h2>

						<!-- Main Search -->
						<form class="main-search-form">

							<!-- Type -->
							<div class="search-type">
								<label class="active"><input class="first-tab" name="tab" checked="checked" type="radio">Any Status</label>
								<label><input name="tab" type="radio">For Sale</label>
								<label><input name="tab" type="radio">For Rent</label>
								<div class="search-type-arrow"></div>
							</div>


							<!-- Box -->
							<div class="main-search-box">

								<!-- Main Search Input -->
								<div class="main-search-input larger-input">
									<input type="text" class="ico-01" id="autocomplete-input" placeholder="Enter address e.g. street, city and state or zip" value=""/>
									<button class="button">Search</button>
								</div>

								<!-- Row -->
								<div class="row with-forms">

									<!-- Property Type -->
									<div class="col-md-4">
										<select data-placeholder="Any Type" class="chosen-select-no-single" >
											<option>Any Type</option>
											<option>Apartments</option>
											<option>Houses</option>
											<option>Commercial</option>
											<option>Garages</option>
											<option>Lots</option>
										</select>
									</div>


									<!-- Min Price -->
									<div class="col-md-4">

										<!-- Select Input -->
										<div class="select-input">
											<input type="text" placeholder="Min Price" data-unit="USD">
										</div>
										<!-- Select Input / End -->

									</div>


									<!-- Max Price -->
									<div class="col-md-4">

										<!-- Select Input -->
										<div class="select-input">
											<input type="text" placeholder="Max Price" data-unit="USD">
										</div>
										<!-- Select Input / End -->

									</div>

								</div>
								<!-- Row / End -->


								<!-- More Search Options -->
								<a href="#" class="more-search-options-trigger" data-open-title="More Options" data-close-title="Less Options"></a>

								<div class="more-search-options">
									<div class="more-search-options-container">

										<!-- Row -->
										<div class="row with-forms">

											<!-- Min Price -->
											<div class="col-md-6">

												<!-- Select Input -->
												<div class="select-input">
													<input type="text" placeholder="Min Area" data-unit="Sq Ft">
												</div>
												<!-- Select Input / End -->

											</div>

											<!-- Max Price -->
											<div class="col-md-6">

												<!-- Select Input -->
												<div class="select-input">
													<input type="text" placeholder="Max Area" data-unit="Sq Ft">
												</div>
												<!-- Select Input / End -->

											</div>

										</div>
										<!-- Row / End -->


										<!-- Row -->
										<div class="row with-forms">

											<!-- Min Area -->
											<div class="col-md-6">
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
											<div class="col-md-6">
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
										<!-- Row / End -->


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

						</form>
						<!-- Main Search -->

					</div>
					<!-- Main Search Container / End -->

				</div>
			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline margin-bottom-25 margin-top-65">Newly Added</h3>
		</div>
		<!-- Carousel -->
		<div class="col-md-12">
			<div class="carousel">

                @foreach($properties as $property)

				<!-- Listing Item -->
					<div class="carousel-item">
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

							<ul class="listing-features">
                                    <li>Area <span>{{ $property->area }} sq ft</span></li>
                                    <li>Bedrooms <span>{{ $property->bedrooms }}</span></li>
                                    <li>Bathrooms <span>{{ $property->bathrooms }}</span></li>
							</ul>

							<div class="listing-footer">
                                @if(Auth::check())
                                    <a href="#"><i class="fa fa-user"></i>{{ Auth::user()->name }} </a>
                                @endif
							</div>
						</div>
					</div>
				</div>

                @endforeach


			</div>
		</div>
		<!-- Carousel / End -->

	</div>
</div>



<!-- Fullwidth Section -->
<section class="fullwidth margin-top-105" data-background-color="#f7f7f7">

	<!-- Box Headline -->
	<h3 class="headline-box">What are you looking for?</h3>

	<!-- Content -->
	<div class="container">
		<div class="row">

			<div class="col-md-3 col-sm-6">
				<!-- Icon Box -->
				<div class="icon-box-1">

					<div class="icon-container">
						<i class="im im-icon-Office"></i>
						<div class="icon-links">
							<a href="listings-grid-standard-with-sidebar.html">For Sale</a>
							<a href="listings-grid-standard-with-sidebar.html">For Rent</a>
						</div>
					</div>

					<h3>Apartments</h3>
					<p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<!-- Icon Box -->
				<div class="icon-box-1">

					<div class="icon-container">
						<i class="im im-icon-Home-2"></i>
						<div class="icon-links">
							<a href="listings-grid-standard-with-sidebar.html">For Sale</a>
							<a href="listings-grid-standard-with-sidebar.html">For Rent</a>
						</div>
					</div>

					<h3>Houses</h3>
					<p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<!-- Icon Box -->
				<div class="icon-box-1">

					<div class="icon-container">
						<i class="im im-icon-Car-3"></i>
						<div class="icon-links">
							<a href="listings-grid-standard-with-sidebar.html">For Sale</a>
							<a href="listings-grid-standard-with-sidebar.html">For Rent</a>
						</div>
					</div>

					<h3>Garages</h3>
					<p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<!-- Icon Box -->
				<div class="icon-box-1">

					<div class="icon-container">
						<i class="im im-icon-Clothing-Store"></i>
						<div class="icon-links">
							<a href="listings-grid-standard-with-sidebar.html">For Sale</a>
							<a href="listings-grid-standard-with-sidebar.html">For Rent</a>
						</div>
					</div>

					<h3>Commercial</h3>
					<p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Fullwidth Section / End -->



<!-- Flip banner -->
<a href="listings-half-map-grid-standard.html" class="flip-banner parallax" data-background="images/flip-banner-bg.jpg" data-color="#274abb" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
	<div class="flip-banner-content">
		<h2 class="flip-visible">We help people and homes find each other</h2>
		<h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
	</div>
</a>
<!-- Flip banner / End -->




<!-- Footer
================================================== -->
<div id="footer" class="sticky-footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="images/logo.png" alt="">
				<br><br>
				<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
					<li><a href="#">Login</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Add Property</a></li>
					<li><a href="#">Pricing</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Our Agents</a></li>
					<li><a href="#">How It Works</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>12345 Little Lonsdale St, Melbourne</span> <br>
					Phone: <span>(123) 123-456 </span><br>
					E-Mail:<span> <a href="#">office@example.com</a> </span><br>
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
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-migrate-3.1.0.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="scripts/rangeSlider.js"></script>
<script type="text/javascript" src="scripts/sticky-kit.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/masonry.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

<!-- Google Autocomplete -->
<script>
  function initAutocomplete() {
    var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete"></script>




</div>
<!-- Wrapper / End -->


</body>
</html>
