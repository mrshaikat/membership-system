@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a class=" btn btn-primary float-right" href="{{ url('users') }}">All Users</a> </div>

                <div class="card-body">
                   
                    

                    <div class="profile">
                        <img src="media/users_photo/{{ Auth::user() -> photo }}" alt="">
                        <h2 class="text-center">{{ Auth::user() -> uname }}</h2>

                        <table class=" table table-striped">
                            <tr>
                                <td>Name</td>
                                <td>{{ Auth::user() -> name }}</td>
                            </tr>

                            <tr>
                                <td>Cell</td>
                                <td>{{ Auth::user() -> cell }}</td>
                            </tr>

                            <tr>
                                <td>E-mail</td>
                                <td>{{ Auth::user() -> email }}</td>
                            </tr>

                            
                        </table>
                    </div>


                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection
