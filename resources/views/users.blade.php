@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a class=" btn btn-primary float-right" href="{{ url('home') }}">Profile</a> <a class=" btn btn-primary float-right" href="{{ route('user.dashboard') }}">Dashboard</a></div>
                

                <div class="card-body">

                    <h2>All Reagistered Users</h2>
                    <table class=" table table-striped ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Cell</th>
                                <th>E-mail</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($all_users as $users)
                            <tr>
                                <td>{{ $loop -> index + 1 }}</td>
                                <td>{{ $users -> name }}</td>
                                <td>{{ $users -> uname }}</td>
                                <td>{{ $users -> cell }}</td>
                                <td>{{ $users -> email }}</td>
                                <td>
                                    <img class=" img-thumbnail" style="width: 50px; height: 50px" src="media/users_photo/{{ $users -> photo }}" alt="">
                                </td>
                                <td>
                                    <a class=" btn btn-info btn-sm" href="">View</a>
                                    <a class=" btn btn-warning btn-sm" href="">Edit</a>
                                    <a class=" btn btn-danger btn-sm" href="">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                       
                        </tbody>
                    </table>
                   

                    



                    



                </div>
            </div>
            <div class="pagination">
                {{ $all_users -> links() }}
            </div>
        </div>
       
    </div>
   
</div>
@endsection
