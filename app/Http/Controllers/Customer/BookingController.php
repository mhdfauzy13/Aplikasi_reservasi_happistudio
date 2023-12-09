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
    // Validasi data dari form
    $validatedData = $request->validate([
        'no_whatsaap' => 'required|max:12|min:11',
        'tanggal_booking' => 'required|date',
        'jam_booking' => 'required|max:5',
        'jumlah_hewan_peliharaan' => 'required|max:2',
        'warna_backdrop' => 'required',
        'upload_sosial_media' => 'required|boolean',
        // tambahkan validasi lainnya sesuai kebutuhan
    ]);

    // Membuat instansiasi baru dari model Booking
    $booking = new Booking();

    // Mengisi instansiasi dengan data dari form
    $booking->no_whatsaap = $validatedData['no_whatsaap'];
    $booking->user_id = auth()->id(); // Mengasumsikan Anda telah mengimplementasikan autentikasi
    $booking->tanggal_booking = $validatedData['tanggal_booking'];
    $booking->jam_booking = $validatedData['jam_booking'];
    $booking->jumlah_hewan_peliharaan = $validatedData['jumlah_hewan_peliharaan'];
    $booking->warna_backdrop = $validatedData['warna_backdrop'];
    $booking->upload_sosial_media = $validatedData['upload_sosial_media'];

    // Menyimpan data booking ke dalam database
    $booking->save();

    // Anda dapat menambahkan logika tambahan di sini, seperti pengiriman email atau notifikasi

    // Mengarahkan pengguna ke halaman terima kasih atau halaman yang diinginkan
    return redirect()->route('daftar-reservasi.index')->with('success', 'Booking berhasil!');
}

}
