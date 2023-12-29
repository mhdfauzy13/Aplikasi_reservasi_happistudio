<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class booking_detailController extends Controller
{
    public function show($id)
    {
        // Ambil data booking berdasarkan ID
        $booking = Booking::with('pakets')->find($id);
        // dd($booking);
        // Kirim data booking ke view
        return view('customer.booking_detail', ['booking' => $booking]);
    }
}