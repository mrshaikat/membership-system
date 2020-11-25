@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <h2>Add New User</h2>
            <hr>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input name="name" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="">Username</label>
                    <input name="uname" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="">E-mail</label>
                    <input name="email" class="form-control" type="text">
                </div>


                <div class="form-group">
                    <label for="">Cell</label>
                    <input name="cell" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="">Role</label>
                   <select class=" form-control" name="role" id="">
                       @foreach($roles as $role)
                           <option value="{{ $role -> id  }}">{{ $role -> name  }}</option>
                       @endforeach
                   </select>
                </div>

               
                
                

                <div class="form-group">
                    <button name="" class=" btn btn-primary">Add New User</button>
                </div>

            </form>
        </div>
       
    </div>
</div>
@endsection
