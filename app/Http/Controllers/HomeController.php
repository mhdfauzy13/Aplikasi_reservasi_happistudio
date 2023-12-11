<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\user;

class HomeController extends Controller
{
   public function login()
   {

    if(Auth::id())
    {
        $role=Auth()->user()->role;

        if($role=='customer'){
            return view('welcome');
        }

        else if($role=='admin'){
            return view('/admin/dashboard');
        }

        else{
            return redirect()->back();
        }
    }
   }
}
