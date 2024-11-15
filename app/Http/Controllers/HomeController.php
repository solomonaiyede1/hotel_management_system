<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\URL;
use Session;

class HomeController extends Controller
{
     public function redirect(){
        
        
        if(Auth::user()->role_user=='admin'){
            return redirect('/dashboard');
        }
        else{
            return view('welcome');
        }

    }
}

// if (Auth::guard($guard)->check()) {
//                 return $request->session()->get('url.intended')?? '/dashboard';
//             }