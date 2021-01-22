<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'nama_barang', 'jenis', 'jumlah_barang','tanggal_masuk','diskon',
    ];

}
