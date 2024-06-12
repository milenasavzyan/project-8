@extends('layouts.app')
@section('title', 'Properties Listing')


@section('content')
    <!-- Wrapper -->
    <div id="wrapper">

        <div class="clearfix"></div>
        <!-- Header Container / End -->


        <!-- Titlebar
        ================================================== -->
        <div class="parallax titlebar"
             data-background="images/listings-parallax.jpg"
             data-color="#333333"
             data-color-opacity="0.7"
             data-img-width="800"
             data-img-height="505">

            <div id="titlebar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h2>Listings</h2>
                            <span>Grid Layout With Sidebar</span>

                            <!-- Breadcrumbs -->
                            <nav id="breadcrumbs">
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li>Listings</li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Content
        ================================================== -->
        <div class="container">
            <div class="row sticky-wrapper">

                <div class="col-md-8">


                    <!-- Sorting / Layout Switcher -->
                    <div class="row margin-bottom-15">

                        <div class="col-md-6">
                            <!-- Sort by -->
                            <div class="sort-by">
                                <label>Sort by:</label>

                                <div class="sort-by-select">
                                    <select data-placeholder="Default order" class="chosen-select-no-single">
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
                            </div>
                        </div>
                    </div>


                    <!-- Listings -->
                    @foreach($properties as $property)
                        <div class="listings-container list-layout">

                            <!-- Listing Item -->
                            <div class="listing-item">

                                <a href="{{ route('property.show', ['property' => $property->id]) }}"
                                   class="listing-img-container">

                                    <div class="listing-badges">
                                        <span>{{ $property->statusName }}</span>
                                    </div>

                                    <div class="listing-img-content">
                                        <span class="listing-price">${{ $property->price }}<i>${{ $property->area }} / sq ft</i></span>
                                        <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                    </div>
                                    <div class="listing-carousel">

                                        @foreach ($property->images as $image)
                                            <div><img src="{{ asset($image->image) }}" alt=""></div>
                                        @endforeach

                                        {{--                            @foreach ($searchResults as $property)--}}
                                        {{--                                @foreach ($property->images as $image)--}}
                                        {{--                                    <div><img src="{{ asset($image->image) }}" alt=""></div>--}}
                                        {{--                                @endforeach--}}
                                        {{--                            @endforeach--}}

                                        {{--                            {{ $searchResults->links() }}--}}

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

                                    </div>

                                    <ul class="listing-details">
                                        <li>{{ $property->area }} sq ft</li>
                                        <li>{{ $property->bedrooms }}Bedroom</li>
                                        <li>{{ $property->rooms }}Room</li>
                                        <li>{{ $property->bathrooms }} Bathroom</li>
                                    </ul>

                                    <div class="listing-footer">
                                        @if(Auth::check())
                                            <a href="#"><i class="fa fa-user"></i>{{ Auth::user()->name }} </a>
                                        @endif
                                    </div>

                                </div>

                            </div>
                            <!-- Listing Item / End -->


                        </div>
                    @endforeach
                    <!-- Listings Container / End -->


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


                <!-- Sidebar
                ================================================== -->
                <div class="col-md-4">
                    <div class="sidebar sticky right">

                        <!-- Widget -->
                        <div class="widget margin-bottom-40">
                            <form method="get" action="{{ route('property.search') }}">

                                <h3 class="margin-top-0 margin-bottom-35">Find New Home</h3>

                                <!-- Row -->
                                <div class="row with-forms">
                                    <!-- Status -->
                                    <div class="col-md-12">
                                        <select name="status" data-placeholder="Any Status"
                                                class="chosen-select-no-single">
                                            <option>Any Status</option>
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Row / End -->


                                <!-- Row -->
                                <div class="row with-forms">
                                    <!-- Type -->
                                    <div class="col-md-12">
                                        <select name="type" data-placeholder="Any Type" class="chosen-select-no-single">
                                            <option>Any Type</option>
                                            <option>Apartment</option>
                                            <option>House</option>
                                            <option>Commercial</option>
                                            <option>Garage</option>
                                            <option>Lot</option>
                                        </select>

                                    </div>
                                </div>
                                <!-- Row / End -->


                                <!-- Row -->
                                <div class="row with-forms">
                                    <!-- States -->
                                    <div class="col-md-12">
                                        <select name="state" data-placeholder="All States" class="chosen-select">
                                            <option>All States</option>
                                            <option>Florida</option>
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>Arizona</option>
                                            <option>Arkansas</option>
                                            <option>California</option>
                                            <option>Colorado</option>
                                            <option>Connecticut</option>
                                            <option>Delaware</option>
                                            <option>Florida</option>
                                            <option>Georgia</option>
                                            <option>Hawaii</option>
                                            <option>Idaho</option>
                                            <option>Illinois</option>
                                            <option>Indiana</option>
                                            <option>Iowa</option>
                                            <option>Kansas</option>
                                            <option>Kentucky</option>
                                            <option>Louisiana</option>
                                            <option>Maine</option>
                                            <option>Maryland</option>
                                            <option>Massachusetts</option>
                                            <option>Michigan</option>
                                            <option>Minnesota</option>
                                            <option>Mississippi</option>
                                            <option>Missouri</option>
                                            <option>Montana</option>
                                            <option>Nebraska</option>
                                            <option>Nevada</option>
                                            <option>New Hampshire</option>
                                            <option>New Jersey</option>
                                            <option>New Mexico</option>
                                            <option>New York</option>
                                            <option>North Carolina</option>
                                            <option>North Dakota</option>
                                            <option>Ohio</option>
                                            <option>Oklahoma</option>
                                            <option>Oregon</option>
                                            <option>Pennsylvania</option>
                                            <option>Rhode Island</option>
                                            <option>South Carolina</option>
                                            <option>South Dakota</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Utah</option>
                                            <option>Vermont</option>
                                            <option>Virginia</option>
                                            <option>Washington</option>
                                            <option>West Virginia</option>
                                            <option>Wisconsin</option>
                                            <option>Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Row / End -->


                                <!-- Row -->
                                <div class="row with-forms">
                                    <!-- Cities -->
                                    <div class="col-md-12">
                                        <select name="city" data-placeholder="All Cities" class="chosen-select">
                                            <option>All Cities</option>
                                            <option>Miami</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Brooklyn</option>
                                            <option>Queens</option>
                                            <option>Houston</option>
                                            <option>Manhattan</option>
                                            <option>Philadelphia</option>
                                            <option>Phoenix</option>
                                            <option>San Antonio</option>
                                            <option>Bronx</option>
                                            <option>San Diego</option>
                                            <option>Dallas</option>
                                            <option>San Jose</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Row / End -->


                                <!-- Row -->
                                <div class="row with-forms">

                                    <!-- Min Area -->
                                    <div class="col-md-6">
                                        <select name="bedrooms" data-placeholder="Beds" class="chosen-select-no-single">
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
                                        <select name="bathrooms" data-placeholder="Baths"
                                                class="chosen-select-no-single">
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

                                <br>


                                <button class="button fullwidth margin-top-30">Search</button>

                            </form>
                        </div>
                        <!-- Widget / End -->

                    </div>
                </div>
                <!-- Sidebar / End -->
            </div>
        </div>


    </div>
    <!-- Wrapper / End -->

@endsection
