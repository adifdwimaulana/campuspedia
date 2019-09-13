<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\Auth;

class LoginRegisterController extends Controller
{
    // public function login_company(Request $r)
    // {
    //     $usr=Company::where('email',$r->email)->first();
    //     if($usr!=null)
    //     {   
    //         if (Auth::attempt(['email' => $r->email, 'password' => $r->password]) ) 
    //         {
    //         	echo "string"; return;
    //             return redirect('/company/home');
    //         }
    //         echo "wkwk"; return;
    //     }
    //     return redirect('/company/login')->withInput()->withErrors('Email atau password yang Anda masukkan tidak sesuai');
    // }
}
