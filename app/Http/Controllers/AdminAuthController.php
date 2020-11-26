<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class AdminAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::ADMIN_DASH;

    // Admin Login Page Show
    public function loginPage(){

        return view('admin.login');
    }

    public function registerPage(){
        return view('admin.register');
    }

    public function registerAdmin(Request $request){

        Admin::create([
            'name'  => $request -> name,
            'email' => $request -> email,
            'cell' => $request -> cell,
            'uname' => $request -> uname,
            'password' => Hash::make($request -> password),
        ]);

        return redirect() -> route('admin.login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }




    protected function guard()
        {
            return Auth::guard('admin');
        }
    
    

}
