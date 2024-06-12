@extends('admin.layout.app')
@section('title', 'Users View')


@section('content')
    @if($user)
        @section('name', $user->name)
        <!-- Breadcrumbs -->
        <nav id="breadcrumbs">
            <ul>
                <li>Home</li>
                <li><a href="{{ route('admin.users.index') }}">Users</a></li>
                <li>{{ $user->name }}</li>
            </ul>
        </nav>
    @endif

    @if($user)
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <td>{{ $user->id }}</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">User Name</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th scope="row">Created At</th>
                <td>{{ $user->created_at }}</td>
            </tr>
            <tr>
                <th scope="row">Updated At</th>
                <td>{{ $user->updated_at }}</td>
            </tr>
            </tbody>
        </table>
    @endif
@endsection
