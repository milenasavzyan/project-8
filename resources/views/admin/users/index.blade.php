@extends('admin.layout.app')
@section('title', 'Users')


@section('content')
    @section('name', 'Users')



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
                        <th scope="col">User name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                    </tr>
                    </thead>
                    @php $counter = 1 @endphp

                    @foreach($users as $user)
                        <tbody>
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('users.show', $user->id) }}"><i class="fa  fa-eye-slash"></i></a>
                                <a href="{{ route('users.destroy', $user->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();"><i class="fa fa-remove"></i></a>
                                <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>

                {{ $users->links() }}


                <!-- Compare List -->


                <!-- Compare List / End -->

            </div>
        </div>
    </div>


@endsection
