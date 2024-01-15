<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\MidtransHistory;
use App\Models\Paket;
use App\Models\pembayarans;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        $booking = Booking::create([
            'user_id' => Auth::user()->id,
            'pakets_id' =>  $request->paket_id,
            'no_whatsaap' => $request->no_whatsaap,
            'tanggal_booking' => $request->tanggal_booking,
            'waktu_booking' => $request->waktu_booking,
            'jumlah_hewan_peliharaan' => $request->jumlah_hewan_peliharaan,
            'warna_backdrop' => $request->warna_backdrop,
            'upload_sosial_media' => $request->upload_sosial_media,
            'kategori' => $request->kategori,
            'tambahan_orang' => $request->tambahan_orang,
            // 'payment_status' => 'unpaid',
        ]);
        $paket = Paket::find($request->paket_id);
        $bayar = Pembayarans::create([
            'booking_id' => "HP-" . date("YmdHis"),
            'total' => $paket->harga + ($request->tambahan_orang * 20000),'payment_status' => 'unpaid'
        ]);

        // // Simpan data booking
        // Booking::create($request->all());

        // Redirect ke halaman yang sesuai, misalnya, indeks booking
        //redirect to index
        // return redirect()
        //     ->route('booking_detail', ['id' => $booking->id])
        //     ->with(['success' => 'Data Berhasil Disimpan!']);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = ('SB-Mid-server-AkcKJNjU9s0YhBG6w0YdIebg');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $bayar->booking_id,
                'gross_amount' => $bayar->total,
            ),
            'customer_details' => array(
                'Nama' => $request->name,
                'phone' => $booking->no_whatsaap,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        return view('customer.booking_detail', compact('snapToken', 'booking'));
    }

    public function callback (Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $bayar = pembayarans::find($request->booking_id);
                $bayar->update(['payment_status'=>'paid']);
            }
        }
    }
    public function invoice($id){
        $booking=booking::find($id);
        return view('invoice',compact('booking'));
    }
}
