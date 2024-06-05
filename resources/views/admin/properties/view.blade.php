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

                        <li><a class="current" href="#">Features</a>
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
                                        <li><a href="my-profile.html">My Profile</a></li>
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

                                <li><a href="submit-property.html">Submit Property</a></li>
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



<!-- Titlebar
================================================== -->
<div id="titlebar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Property</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Property</li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row fullwidth-layout">

        <div class="col-md-12">
            <div class="listings-container list-layout">

                <!-- Listing Item -->
                @if($property)
                    <div class="listing-item">
                        <a href="single-property-page-1.html" class="listing-img-container">

                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                                <span>{{ $property->statusName }}</span>
                            </div>

                            <div class="listing-img-content">
                                <span
                                    class="listing-price">${{ $property->price }} <i>${{ $property->area }} / sq ft</i></span>
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
                                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                   class="listing-address popup-gmaps">
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
                @endif
            </div>
        </div>
    </div>


</div>
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



