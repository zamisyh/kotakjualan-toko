<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;
use App\Models\Toko;

class UserController extends Controller
{

    public function getAnggota()
    {
        return response()->json(User::all());
    }

    public function getIdAnggota($id)
    {
        $user = User::find($id);
        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
            'address' => $user->address
        ]);
    }

    public function getIdToko($id)
    {
        $toko = Toko::find($id);
        return response()->json([
            'id' => $toko->id,
            'id_anggota' => $toko->id_anggota,
            'nama_toko' => $toko->nama_toko,
            'url_foto' => $toko->url_foto,
            'deskripsi' => $toko->deskripsi,
            'hastag' => $toko->hastag,
            'cover' => $toko->cover,
        ]);
    }

    public function getAllToko()
    {
        $toko = Toko::all();
        return response()->json($toko);
    }
}
