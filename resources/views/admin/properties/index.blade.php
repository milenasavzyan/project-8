@extends('admin.layout.app')
@section('title', 'Properties')


@section('content')
    @section('name', 'Properties')

    <!-- Content
================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <table class="table table-striped">
                    <thead class="thead-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Price</th>
                        <th scope="col">Area</th>
                        <th scope="col">Rooms</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Zip Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Building Age</th>
                        <th scope="col">Bedrooms</th>
                        <th scope="col">Bathrooms</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                    </tr>
                    <div class="compare-list-container">
                        <ul id="compare-list">
                            @php $counter = 1 @endphp

                            @foreach($properties as $property)
                                <tbody>
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $property->id }}</td>
                                    <td>{{ $property->title }}</td>
                                    <td>{{ $property->statusName }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>{{ $property->area }}</td>
                                    <td>{{ $property->rooms }}</td>
                                    <td>{{ $property->address }}</td>
                                    <td>{{ $property->city }}</td>
                                    <td>{{ $property->state }}</td>
                                    <td>{{ $property->zip_code }}</td>
                                    <td>{{ $property->description }}</td>
                                    <td>{{ $property->building_age }}</td>
                                    <td>{{ $property->bedrooms }}</td>
                                    <td>{{ $property->bathrooms }}</td>
                                    <td>{{ $property->created_at }}</td>
                                    <td>{{ $property->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('properties.edit', $property->id) }}"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="{{ route('properties.show', $property->id) }}"><i
                                                class="fa  fa-eye-slash"></i></a>
                                        <a href="{{ route('properties.destroy', $property->id) }}"
                                           onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this property?')) { document.getElementById('delete-form-{{ $property->id }}').submit(); }"><i
                                                class="fa fa-remove"></i></a>

                                        <form id="delete-form-{{ $property->id }}"
                                              action="{{ route('properties.destroy', $property->id) }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                    @endforeach

                </table>

            </div>
        </div>
    </div>

@endsection
