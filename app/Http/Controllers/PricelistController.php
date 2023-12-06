<?php
namespace App\Http\Controllers;

use App\Models\Paket;
// use App\Models\Pricelist;

class PricelistController extends Controller
{
    public function showPricelist()
    {
        // Ambil pricelist dari model Pricelist
        $pricelist = Paket::all(); // Anda dapat menyesuaikan ini sesuai dengan logika bisnis Anda

        // Kirim data pricelist ke view
        return view('pricelist', compact('pricelist'));
    }
}
