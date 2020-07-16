<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Toko extends Model
{
    protected $collection = 'toko';
    protected $connection = 'mongodb';

    protected $fillable = [
        'id_anggota', 'nama_toko', 'url_foto', 'deskripsi', 'hastag', 'cover'
    ];
}
