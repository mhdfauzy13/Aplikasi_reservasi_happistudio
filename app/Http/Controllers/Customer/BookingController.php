<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'no_whatsaap' => 'required|max:12|min:11',
            'tanggal_booking' => 'required|date',
            'jam_booking' => 'required|max:5',
            'jumlah_hewan_peliharaan' => 'required|max:2',
            'warna_backdrop' => 'required',
            'upload_sosial_media' => 'required|boolean',
        ]);

        // Membuat instansiasi baru dari model Booking
    $booking = new Booking();

    // Mengisi instansiasi dengan data dari form
    $booking->no_whatsaap = $request->input('no_whatsaap');
    $booking->user_id = auth()->id(); // Mengasumsikan Anda telah mengimplementasikan autentikasi
    $booking->tanggal_booking = $request->input('tanggal_booking');
    $booking->jam_booking = $request->input('waktu_booking'); // Mengasumsikan ada field bernama waktu_booking
    $booking->jumlah_hewan_peliharaan = $request->input('jumlah_hewan');
    $booking->warna_backdrop = $request->input('warna');
    $booking->upload_sosial_media = $request->input('upload_sosmed');
    
    // Menyimpan data booking ke dalam database
    $booking->save();

    // Anda dapat menambahkan logika tambahan di sini, seperti pengiriman email atau notifikasi

    // Mengarahkan pengguna ke halaman terima kasih atau halaman yang diinginkan
    return redirect()->route('thankyou.page');
    }

}
