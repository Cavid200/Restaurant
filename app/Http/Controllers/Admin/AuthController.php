<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function post_login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('admin.index');
        }
        else
        {
            return redirect()->route('admin.login');
        }
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
