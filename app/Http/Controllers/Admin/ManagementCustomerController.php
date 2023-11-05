<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ManagementCustomerController extends Controller
{
    public  function index(){
        $user = User::where('role','customer')->get();
        return view('admin.data_customer.data_customer', compact('user'));
    }
}
