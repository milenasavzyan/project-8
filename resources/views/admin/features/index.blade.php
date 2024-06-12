@extends('admin.layout.app')
@section('title', 'Features')


@section('content')
    @section('name', 'Features')



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
                        <th scope="col">Name</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Updated_at</th>
                    </tr>
                    </thead>
                    @php $counter = 1 @endphp
                    @foreach($features as $feature)
                        <tbody>
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td>{{ $feature->id }}</td>
                            <td>{{ $feature->name }}</td>
                            <td>{{ $feature->created_at }}</td>
                            <td>{{ $feature->updated_at }}</td>
                            <td>
                                <a href="{{ route('features.edit', $feature->id) }}"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('features.show', $feature->id) }}"><i class="fa  fa-eye-slash"></i></a>
                                <a href="{{ route('features.destroy', $feature->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $feature->id }}').submit();"><i class="fa fa-remove"></i></a>
                                <form id="delete-form-{{ $feature->id }}" action="{{ route('features.destroy', $feature->id) }}" method="POST" style="display: none;">
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
