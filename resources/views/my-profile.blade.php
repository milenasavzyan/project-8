@extends('layouts.app')
@section('title', 'My Profile')

@section('content')
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
                            <li><a href="{{ route('property.create') }}"><i class="sl sl-icon-action-redo"></i> Submit
                                    New Property</a></li>
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
                                <img src="{{ asset('images/' . $user->images->image) }}" alt="">
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

    <!-- Wrapper / End -->

@endsection
