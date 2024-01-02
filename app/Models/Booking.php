<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    public $primaryKey = "id_booking";
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['no_whatsaap', 'user_id', 'pakets_id', 'kategori', 'tambahan_orang', 'tanggal_booking', 'waktu_booking', 'jumlah_hewan_peliharaan', 'warna_backdrop', 'upload_sosial_media'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pakets()
    {
        return $this->belongsTo(Paket::class);
    }
}
