<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_paket',
        'deskripsi',
        'gambar',
        'harga',
    ];
    /**
     * Get the total count of packages.
     *
     * @return int
     */
    public static function getTotalCount()
    {
        return self::count();
    }

}
