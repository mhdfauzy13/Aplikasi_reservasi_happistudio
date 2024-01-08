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
        $bookings = Booking::with('user')->get();
        // dd($bookings);

        // Mengirimkan data Booking ke view
        return view('admin.daftar_reservasi.daftar_reservasi', compact('bookings'));
    }
}
