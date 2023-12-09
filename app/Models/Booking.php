<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_whatsaap',
        'user_id',
        'tanggal_booking',
        'jam_booking',
        'jumlah_hewan_peliharaan',
        'warna_backdrop',
        'upload_sosial_media',
    ];


    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
