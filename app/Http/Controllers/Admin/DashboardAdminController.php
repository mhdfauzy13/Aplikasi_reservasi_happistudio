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
        $totalRegisteredUsers = User::where('role', 'customer')->count();
        $totalPackages = Paket::count();


        return view('admin.dashboard', compact('user', 'totalRegisteredUsers','totalPackages'));
    }
}
