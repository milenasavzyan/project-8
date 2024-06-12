@extends('admin.layout.app')
@section('title', 'Properties Edit')


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
    <div class="clearfix"></div>


    <div class="container">
        <div class="row fullwidth-layout">

            <div class="col-md-12">
                <div class="listings-container list-layout">
                    @if($property)
                        <form action="{{ route('properties.update', $property->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <label>Title</label>
                            <input name="name" type="text" value="{{ $property->title }}"><br>
                            <label>Status</label>
                            <select>
                                <option>{{ $property->statusName }}</option>
                                <option>For Sale</option>
                                <option>For Rent</option>
                            </select>
                            <label>Price</label>
                            <input name="price" type="number" value="{{ $property->price }}"><br>
                            <label>Area</label>
                            <input name="area" type="number" value="{{ $property->area }}"><br>
                            <label>Rooms</label>
                            <input name="rooms" type="number" value="{{ $property->rooms }}"><br>
                            <label>Address</label>
                            <input name="address" type="text" value="{{ $property->address }}"><br>
                            <label>City</label>
                            <input name="city" type="text" value="{{ $property->city }}"><br>
                            <label>State</label>
                            <input name="state" type="text" value="{{ $property->state }}"><br>
                            <label>Zip_code</label>
                            <input name="zip_code" type="number" value="{{ $property->zip_code }}"><br>
                            <label>Description</label>
                            <textarea name="description">{{ $property->description }}</textarea><br>
                            <label>Building age</label>
                            <input name="building_age" type="text" value="{{ $property->building_age }}"><br>
                            <label>Bedrooms</label>
                            <input name="bedrooms" type="number" value="{{ $property->bedrooms }}"><br>
                            <label>Bathrooms</label>
                            <input name="bathrooms" type="number" value="{{ $property->bathrooms }}"><br>
                            <label>Created At</label>
                            <input name="created_at" type="text" value="{{ $property->created_at }}"><br>
                            <label>Updated At</label>
                            <input name="updated_at" type="text" value="{{ $property->updated_at }}"><br>
                            <button class="button margin-top-20 margin-bottom-20">Save Changes</button>

                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
