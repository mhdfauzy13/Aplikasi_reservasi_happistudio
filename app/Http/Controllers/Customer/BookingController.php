<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function store(Request $request)
    {
        dd($request->all());
        $this->validate($request, [
            'no_whatsaap' => 'required|max:12|min:11',
            'tanggal_booking' => 'required|date',
            'jam_booking' => 'required|max:5',
            'jumlah_hewan_peliharaan' => 'required|max:2',
            'warna_backdrop' => 'required',
            'upload_sosial_media' => 'required|boolean',
        ]);
    }
}
