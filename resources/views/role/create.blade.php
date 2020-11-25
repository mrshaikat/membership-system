@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <h2>Add New Role</h2>
            <hr>
            <form action="{{ route('role.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Role Name</label>
                    <input name="name" class="form-control" type="text">
                </div>

                <div class="form-group"> 
                    <label class="text-bold" for="">Permission</label> <br> <br>
                    <input name="permi[]" class="" type="checkbox" id="User" value="User"><label for="User"> User</label>
                    <input name="permi[]" class="" type="checkbox" id="Role" value="Role"><label for="Role"> Role</label>
                    <input name="permi[]" class="" type="checkbox" id="Setting" value="Setting"><label for="Setting"> Setting</label>
                    <input name="permi[]" class="" type="checkbox" id="SEO" value="SEO"><label for="SEO"> SEO</label>
                </div>

                <div class="form-group">
                    <button name="" class=" btn btn-primary">Add New Role</button>
                </div>

            </form>
        </div>
       
    </div>
</div>
@endsection
