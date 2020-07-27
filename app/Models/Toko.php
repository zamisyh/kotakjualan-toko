<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Toko extends Model
{
    protected $collection = 'toko';
    protected $connection = 'mongodb';

    protected $fillable = [
        'idAnggota', 'nama', 'link_foto', 'deskripsi', 'status',
    ];
}
