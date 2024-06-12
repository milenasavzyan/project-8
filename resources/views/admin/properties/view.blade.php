@extends('admin.layout.app')
@section('title', 'Properties View')


@section('content')
    @if($property)
        @section('name', $property->title)
        <!-- Breadcrumbs -->
        <nav id="breadcrumbs">
            <ul>
                <li>Home</li>
                <li><a href="{{ route('admin.properties.index') }}">Properties</a></li>
                <li>{{ $property->title }}</li>
            </ul>
        </nav>
    @endif

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

                                </div>

                                <ul class="listing-details">
                                    <li>{{ $property->area }} sq ft</li>
                                    <li>{{ $property->bedrooms }} Bedroom</li>
                                    <li>{{ $property->rooms }} Rooms</li>
                                    <li>{{ $property->bathrooms }} Bathroom</li>
                                </ul>

                                <div class="listing-footer">
                                    <span><i class="fa fa-calendar-o"></i> 1 day ago</span>
                                </div>

                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>


    </div>
@endsection


