<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SingleSelfPhotoController extends Controller
{
    //createBooking

    public function createBooking($id)
    {

        $paket = Paket::find($id);
        if(!$paket){
            dd('gada');
        }
        $datenow = Carbon::now();
        $date7hari = [];
        $waktu = [
           (object)['id' => 1, 'waktu' => '10.00'],
            (object)['id' => 2, 'waktu' => '10.30'],
            (object)['id' => 3, 'waktu' => '11.00'],
            (object)['id' => 4, 'waktu' => '13.00'],
            (object)['id' => 5, 'waktu' => '13.30'],
            (object)['id' => 6, 'waktu' => '14.00'],
            (object)['id' => 7, 'waktu' => '14.30'],
            (object)['id' => 8, 'waktu' => '15.00'],
            (object)['id' => 9, 'waktu' => '15.30'],
            (object)['id' => 10, 'waktu' => '16.00'],
            (object)['id' => 11, 'waktu' => '16.30'],
            (object)['id' => 12, 'waktu' => '17.00'],
            (object)['id' => 13, 'waktu' => '17.30'],
            (object)['id' => 14, 'waktu' => '18.00'],
            (object)['id' => 15, 'waktu' => '18.30'],
            (object)['id' => 16, 'waktu' => '19.00'],
            (object)['id' => 17, 'waktu' => '19.30'],

        ];

        for ($i = 0; $i < 7; $i++) {
            $date7hari[] = (object) [
                'hari' => $datenow->isoFormat('dddd'),
                'tanggal' => $datenow->format('d'),
                'bulan' => $datenow->isoFormat('MMM'),
                'tahun' => $datenow->format('Y'),

                // 'datenow' => $datenow->format('Y-M-D'),
                'datenow' => $datenow->format('Y').'-'. $datenow->format('m').'-'.$datenow->format('d'),

            ];

            $datenow->addDays(1);
        }
        // dd($date7hari);
        return view('customer.self_photo.form_booking', compact('date7hari', 'waktu', 'paket'));
    }
}