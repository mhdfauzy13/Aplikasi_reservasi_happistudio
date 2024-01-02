<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Paket;
use App\Models\pembayarans;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    /**
     * index
     */
    public function index(): View
    {
        //get posts
        $bookings = booking::latest()->paginate(5);
        // dd($pakets);

        //render view with posts
        return view('customer.self_photo.form_booking', compact('bookings'));
    }

    public function store(Request $request)
    {
        // Log::info($request->all()); // Log data
        // dd($request->all());
        // Validasi data dari form
        // $this->validate($request, [
        //     'no_whatsaap' => 'required|max:12|min:11',
        //     'tanggal_booking' => 'required|date_format:l M d',
        //     'waktu_booking' => 'required|max:5',
        //     'jumlah_hewan_peliharaan' => 'required|numeric|min:0',
        //     'warna_backdrop' => 'required',
        //     'upload_sosial_media' => 'required|boolean',
        //     'kategori' => 'required|in:single,double,group', // Validasi untuk kategori yang harus menjadi salah satu dari 'single', 'double', atau 'group'
        //     'tambahan_orang' => 'required_if:kategori,group|numeric|min:5|max:10', // Validasi untuk tambahan orang hanya jika kategori adalah 'group'
        // ]);

        $booking = Booking::create([
            'user_id'=> Auth::user()->id,
            'pakets_id'=> 1,
            'no_whatsaap' => $request->no_whatsaap,
            'tanggal_booking' => $request->tanggal_booking,
            'waktu_booking' => $request->waktu_booking,
            'jumlah_hewan_peliharaan' => $request->jumlah_hewan_peliharaan,
            'warna_backdrop' => $request->warna_backdrop,
            'upload_sosial_media' => $request->upload_sosial_media,
            'kategori' => $request->kategori,
            'tambahan_orang' => $request->tambahan_orang,
        ]);
        $paket = Paket::find(1);
        Pembayarans::create([
            'booking_id'=> $booking->id,
            'total'=> $paket->harga + ($request->tambahan_orang * 20000),
        ]);

        // // Simpan data booking
        // Booking::create($request->all());

        // Redirect ke halaman yang sesuai, misalnya, indeks booking
        //redirect to index
        return redirect()
            ->route('booking_detail',['id'=>$booking->id])
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
