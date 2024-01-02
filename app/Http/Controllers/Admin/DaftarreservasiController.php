<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class DaftarreservasiController extends Controller
{
    public function index()
    {
        // Mengambil semua data Booking dari database
        $bookings = Booking::all();
        
        // Mengirimkan data Booking ke view
        return view('admin.daftar_reservasi.daftar_reservasi', compact('bookings'));
    }
}
