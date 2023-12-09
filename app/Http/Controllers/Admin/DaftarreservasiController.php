<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarreservasiController extends Controller
{
    public  function index(){

        return view('admin.daftar_reservasi.daftar_reservasi');
    }
}
