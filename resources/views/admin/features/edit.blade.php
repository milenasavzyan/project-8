@extends('admin.layout.app')
@section('title', 'Feature Edit')


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

    <div class="container">
        <div class="row fullwidth-layout">

            <div class="col-md-12">
                <div class="listings-container list-layout">

                    @if($feature)
                        <form action="{{ route('features.update', $feature->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <label>Name</label>
                            <input name="name" type="text" value="{{ $feature->name }}"><br>
                            <label>Created At</label>
                            <input name="created_at" type="text" value="{{ $feature->created_at }}"><br>
                            <label>Updated At</label>
                            <input name="updated_at" type="text" value="{{ $feature->updated_at }}"><br>
                            <button class="button margin-top-20 margin-bottom-20">Save Changes</button>

                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
