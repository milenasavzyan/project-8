@extends('layouts.app')
@if($property)
    @section('title', $property->title)
@endif

@section('content')

    <!-- Titlebar
================================================== -->
    <div id="titlebar" class="property-titlebar margin-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if($property)
                        <a href="listings-list-with-sidebar.html" class="back-to-listings"></a>
                        <div class="property-title">
                            <h2>{{ $property->title }} <span class="property-badge">{{ $property->statusName }}</span>
                            </h2>
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

    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>

    </div>
@endsection
