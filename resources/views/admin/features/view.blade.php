@extends('admin.layout.app')
@section('title', 'Feature View')


@section('content')
    @if($feature)
        @section('name', $feature->name)
        <!-- Breadcrumbs -->
        <nav id="breadcrumbs">
            <ul>
                <li>Home</li>
                <li><a href="{{ route('admin.features.index') }}">Features</a></li>
                <li>{{ $feature->name }}</li>
            </ul>
        </nav>
    @endif

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
@endsection
