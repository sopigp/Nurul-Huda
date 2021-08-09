<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\support\Facades\Redirect;

use Auth;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\User;
 
use DB;
use Response;
use SweetAlert;

class LoginController extends Controller
{
    //
    

      public function index()
    {
   
      return view ('admin.login');
    }

    public function postLogin(Request $request){
      if(Auth::attempt ([
        'email' => $request->email,
        'password' => $request->password
      ]))
      {
        return redirect('/administratorx_dashboard')->with('alert','Login berhasil');
      }
      else{
        alert()->error('E-mail atau kata sandi yang Anda masukkan salah. Silahkan periksa dan coba lagi', 'Login Gagal')->autoclose(3500);
        return redirect('/administratorx_login')->with('alert','E-mail atau kata sandi yang Anda masukkan salah. Silahkan periksa dan coba lagi');
      }
   
    }
   


    public function logout(Request $request){
        Auth::logout();
        return redirect('login')->with('alert','Logout berhasil!');
    }


    public function error(){
      return view ('admin.page_404');
    }
}
