@extends('admin.layout.app')
@section('title', 'Users Edit')


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

    <div class="container">
        <div class="row fullwidth-layout">

            <div class="col-md-12">
                <div class="listings-container list-layout">

                    @if($user)
                        <form action="{{ route('users.update', $user->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <label>User Name</label>
                            <input name="name" type="text" value="{{ $user->name }}"><br>
                            <label>Email</label>
                            <input name="email" type="email" value="{{ $user->email }}"><br>
                            <label>Created At</label>
                            <input name="created_at" type="text" value="{{ $user->created_at }}"><br>
                            <label>Updated At</label>
                            <input name="updated_at" type="text" value="{{ $user->updated_at }}"><br>
                            <button class="button margin-top-20 margin-bottom-20">Save Changes</button>

                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
