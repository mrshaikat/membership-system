<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::DASH;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest') -> except(['showAllUser', 'showDashboard']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create($data)
    {
        $unique_file_name  = 'avator.jpg';
        if( $data -> hasFile('photo') ){

            $img = $data -> file('photo');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();
            $img -> move(public_path('media/users_photo'), $unique_file_name);
        }
        return User::create([

            'name' => $data -> name,
            'uname' => $data -> uname,
            'cell' => $data -> cell,
            'email' => $data -> email,
            'photo' => $unique_file_name ,
            'password' => Hash::make($data -> password),
        ]);
    }

    //ALl User

    public function showAllUser(){
        $all_users = User::latest() -> paginate(5);
        return view('users', compact('all_users'));
    }

    //Show dashboard

    public function showDashboard(){
        return view('dashboard');
    }
}
