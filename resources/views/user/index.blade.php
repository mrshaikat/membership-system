@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>All Users</h2>
            <a class=" btn btn-info" href="{{ route('user.create') }}">Add New User</a>
            <br><br>    
            <table class=" table table-striped table-hover">
               
                  <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Permission</th>
                    <th>Action</th>
                  </thead>    
                  
                  <tbody>
                      @foreach($all_users as $user)
                       <tr>
                        <td>1</td>
                        <td>{{ $user -> name }}</td>
                        <td>{{ $user -> role -> name }}</td>
                        <td>
                          
                          @foreach( json_decode( $user -> role -> permission) as $per )
                          {{ $per }} |
                           @endforeach
  
                      </td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="">Edit</a>
                            <a class="btn btn-danger btn-sm" href="">Delete</a>
                        </td>
                       </tr>
                      @endforeach
                       
                  </tbody>

            </table>
        </div>
       
    </div>
</div>
@endsection
