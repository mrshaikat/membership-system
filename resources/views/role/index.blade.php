@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>All Roles</h2>
            <a class=" btn btn-info" href="{{ route('role.create') }}">Add New Role</a>
            <br><br>    
            <table class=" table table-striped table-hover">
               
                  <thead>
                    <th>#</th>
                    <th>Role Name</th>
                    <th>Permission</th>
                    <th>Action</th>
                  </thead>    
                  
                  <tbody>

                    @foreach($allroles as $role)
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td>{{ $role -> name }}</td>
                            <td> 
                                @if(count(json_decode( $role -> permission)) > 0 )
                                    
                                
                                @foreach( json_decode( $role -> permission) as $per )
                                    {{ $per }} |
                                @endforeach

                                @endif

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
