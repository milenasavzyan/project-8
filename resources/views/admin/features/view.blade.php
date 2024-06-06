<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Feature View</title>
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


<div id="titlebar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if($feature)
                    <h2>{{ $feature->name }}</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li>Home</li>
                            <li><a href="{{ route('admin.features.index') }}">Features</a></li>
                            <li>{{ $feature->name }}</li>
                        </ul>
                    </nav>
                @endif
            </div>
        </div>
    </div>
</div>

@if($feature)
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <td>{{ $feature->id }}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">User Name</th>
            <td>{{ $feature->name }}</td>
        </tr>
        <tr>
            <th scope="row">Created At</th>
            <td>{{ $feature->created_at }}</td>
        </tr>
        <tr>
            <th scope="row">Updated At</th>
            <td>{{ $feature->updated_at }}</td>
        </tr>
        </tbody>
    </table>
@endif
