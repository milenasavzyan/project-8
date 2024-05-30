<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Findeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../public/css/style.css">
<link rel="stylesheet" href="../public/css/color.css">

</head>

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
                            <span>{{ $property->status }}</span>
                        </div>
                        <div class="listing-img-content">
                            <span class="listing-compact-title">{{ $property->title }} <i>${{ $property->price }}</i></span>
                        </div>
                        @foreach ($property->images as $image)
                            <div><img src="{{ asset('../public/images/' . $image->image) }}" alt=""></div>
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

						<li><a href="#">Home</a>
							<ul>
								<li><a href="index.html">Home 1</a></li>
								<li><a href="index-2.html">Home 2</a></li>
								<li><a href="index-3.html">Home 3</a></li>
								<li><a href="index-4.html">Home 4</a></li>
							</ul>
						</li>

						<li><a class="current" href="#">Listings</a>
							<ul>
								<li><a href="#">List Layout</a>
									<ul>
										<li><a href="listings-list-with-sidebar.html">With Sidebar</a></li>
										<li><a href="listings-list-with-map.html">With Map</a></li>
										<li><a href="listings-list-full-width.html">Full Width</a></li>
									</ul>
								</li>
								<li><a href="#">Grid Layout</a>
									<ul>
										<li><a href="listings-grid-standard-with-sidebar.html">Standard With Sidebar</a></li>
										<li><a href="listings-grid-compact-with-sidebar.html">Compact With Sidebar</a></li>
										<li><a href="listings-grid-with-map.html">With Map</a></li>
										<li><a href="listings-grid-full-width.html">Full Width</a></li>
									</ul>
								</li>
								<li><a href="#">Half Map</a>
									<ul>
										<li><a href="listings-half-map-list.html">List Layout</a></li>
										<li><a href="listings-half-map-grid-standard.html">Grid Standard Layout</a></li>
										<li><a href="listings-half-map-grid-compact.html">Grid Compact Layout</a></li>
									</ul>
								</li>
							</ul>
						</li>

						<li><a href="#">Features</a>
							<ul>
								<li><a href="#">Single Properties</a>
									<ul>
										<li><a href="single-property-page-1.html">Property Style 1</a></li>
										<li><a href="single-property-page-2.html">Property Style 2</a></li>
										<li><a href="single-property-page-3.html">Property Style 3</a></li>
									</ul>
								</li>
								<li><a href="#">Search Styles</a>
									<ul>
										<li><a href="index.html">Home Search 1</a></li>
										<li><a href="index-2.html">Home Search 2</a></li>
										<li><a href="index-3.html">Home Search 3</a></li>
										<li><a href="listings-list-full-width.html">Advanced Style</a></li>
										<li><a href="listings-list-with-sidebar.html">Sidebar Search</a></li>
									</ul>
								</li>
								<li><a href="#">My Account</a>
									<ul>
                                        <li><a href="{{ route('user.show') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
										<li><a href="my-bookmarks.html">Bookmarked Listings</a></li>
										<li><a href="my-properties.html">My Properties</a></li>
										<li><a href="change-password.html">Change Password</a></li>
									</ul>
								</li>
								<li><a href="#">Agencies & Agents</a>
									<ul>
										<li><a href="agencies-list.html">Agencies List</a></li>
										<li><a href="agency-page.html">Agency Page</a></li>
										<li><a href="agents-list.html">Agents List</a></li>
										<li><a href="agent-page.html">Agent Page</a></li>
									</ul>
								</li>

								<li><a href="compare-properties.html">Compare Properties</a></li>
								<li><a href="submit-property.html">Submit Property</a></li>
							</ul>
						</li>

						<li><a href="#">Pages</a>
							<ul>
								<li><a href="blog.html">Blog</a>
									<ul>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-post.html">Blog Post</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="pricing-tables.html">Pricing Tables</a></li>
								<li><a href="typography.html">Typography</a></li>
								<li><a href="icons.html">Icons</a></li>
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
                                <span><img src="../public/images/agent-03.jpg" alt=""></span>
                                Hi, {{ Auth::user()->name }}!
                            </div>
                        @endif

                        <ul>

                            <li><a href="{{ route('user.show') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                            <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Bookmarks</a></li>
                            <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Properties</a></li>
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
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
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
				<!-- Row With Forms / End -->


				<!-- Row With Forms -->
				<div class="row with-forms">

					<!-- Min Price -->
					<div class="col-md-3">

						<!-- Select Input -->
						<div class="select-input disabled-first-option">
							<input type="text" placeholder="Min Area" data-unit="Sq Ft">
							<select>
								<option>Min Area</option>
								<option>300</option>
								<option>400</option>
								<option>500</option>
								<option>700</option>
								<option>800</option>
								<option>1000</option>
								<option>1500</option>
							</select>
						</div>
						<!-- Select Input / End -->

					</div>

					<!-- Max Price -->
					<div class="col-md-3">

						<!-- Select Input -->
						<div class="select-input disabled-first-option">
							<input type="text" placeholder="Max Area" data-unit="Sq Ft">
							<select>
								<option>Max Area</option>
								<option>300</option>
								<option>400</option>
								<option>500</option>
								<option>700</option>
								<option>800</option>
								<option>1000</option>
								<option>1500</option>
							</select>
						</div>
						<!-- Select Input / End -->

					</div>


					<!-- Min Price -->
					<div class="col-md-3">

						<!-- Select Input -->
						<div class="select-input disabled-first-option">
							<input type="text" placeholder="Min Price" data-unit="USD">
							<select>
								<option>Min Price</option>
								<option>1 000</option>
								<option>2 000</option>
								<option>3 000</option>
								<option>4 000</option>
								<option>5 000</option>
								<option>10 000</option>
								<option>15 000</option>
								<option>20 000</option>
								<option>30 000</option>
								<option>40 000</option>
								<option>50 000</option>
								<option>60 000</option>
								<option>70 000</option>
								<option>80 000</option>
								<option>90 000</option>
								<option>100 000</option>
								<option>110 000</option>
								<option>120 000</option>
								<option>130 000</option>
								<option>140 000</option>
								<option>150 000</option>
							</select>
						</div>
						<!-- Select Input / End -->

					</div>


					<!-- Max Price -->
					<div class="col-md-3">

						<!-- Select Input -->
						<div class="select-input disabled-first-option">
							<input type="text" placeholder="Max Price" data-unit="USD">
							<select>
								<option>Max Price</option>
								<option>1 000</option>
								<option>2 000</option>
								<option>3 000</option>
								<option>4 000</option>
								<option>5 000</option>
								<option>10 000</option>
								<option>15 000</option>
								<option>20 000</option>
								<option>30 000</option>
								<option>40 000</option>
								<option>50 000</option>
								<option>60 000</option>
								<option>70 000</option>
								<option>80 000</option>
								<option>90 000</option>
								<option>100 000</option>
								<option>110 000</option>
								<option>120 000</option>
								<option>130 000</option>
								<option>140 000</option>
								<option>150 000</option>
							</select>
						</div>
						<!-- Select Input / End -->

					</div>

				</div>
				<!-- Row With Forms / End -->


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
					<a href="single-property-page-1.html" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured">Featured</span>
							<span>{{ $property->status }}</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">${{ $property->price }} <i>${{ $property->area }} / sq ft</i></span>
							<span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
							<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
						</div>
                        <div class="listing-carousel">
                            @foreach ($property->images as $image)
                                <div><img src="{{ asset('../public/images/' . $image->image) }}" alt=""></div>
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

							<a href="single-property-page-1.html" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>{{ $property->area }} sq ft</li>
							<li>{{ $property->bedrooms }} Bedroom</li>
							<li>{{ $property->rooms }} Rooms</li>
							<li>{{ $property->bathrooms }} Bathroom</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> David Strozier</a>
							<span><i class="fa fa-calendar-o"></i> 1 day ago</span>
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
				<div class="copyrights">© 2016 Findeo. All Rights Reserved.</div>
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





</div>
<!-- Wrapper / End -->


</body>
</html>
