<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class PricelistController extends Controller
{
    public function pricelist()
    {
        $paket = Paket::all();
        return view('pricelist', compact('paket'));
    }
}
