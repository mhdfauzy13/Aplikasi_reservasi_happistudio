<?php

namespace App\Http\Controllers;

use App\Models\Paket;
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
            $data = [
                "jumlah_register" => User::count(),
                'jumlah_priceList' => Paket::count(),
            ];
            return view('admin.dashboard',$data);
        }

        else{
            return redirect()->back();
        }
    }
   }
}
