<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;
use App\Models\Toko;

class UserController extends Controller
{

    public function getIdToko($id)
    {
        $toko = Toko::find($id);
        return response()->json([
            'data' => [
                'id' => $toko->id,
                'idAnggota' => $toko->idAnggota,
                'nama' => $toko->nama,
                'link_foto' => $toko->link_foto,
                'deskripsi' => $toko->deskripsi,
                'status' => $toko->status,
            ]
        ]);
    }

}
