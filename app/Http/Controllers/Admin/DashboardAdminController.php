<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'customer')->get();
        $jumlah_register = User::where('role', 'customer')->count();
        $jumlah_priceList = Paket::count();


        return view('admin.dashboard', compact('user', 'jumlah_register','jumlah_priceList'));
    }
}