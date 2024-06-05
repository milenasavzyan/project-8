<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Findeo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/color.css">

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
<!-- Titlebar
================================================== -->
<div id="titlebar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>User</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>User</li>
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

                @if($user)
                    <form action="{{ route('users.update', $user->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <input name="name" type="text" value="{{ $user->name }}"><br>
                        <input name="email" type="email" value="{{ $user->email }}"><br>
                        <input name="created_at" type="text" value="{{ $user->created_at }}"><br>
                        <input name="updated_at" type="text" value="{{ $user->updated_at }}"><br>
                        <button class="button margin-top-20 margin-bottom-20">Save Changes</button>

                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
</body>

