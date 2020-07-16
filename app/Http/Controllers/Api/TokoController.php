<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Toko;
use Illuminate\Support\Facades\Auth;

class TokoController extends Controller
{
    public function create_toko(Request $request, Toko $toko)
    {
        // $user = $user->find(Auth::user()->id);
        // return response()->json([
        //     'name' => $user->name
        // ]);

        $request->validate([
            'nama_toko' => 'required|min:3|unique:toko',
            'url_foto' => 'required',
            'deskripsi' => 'required',
        ]);

        $toko->create([
            'id_anggota' => Auth::user()->id,
            'nama_toko' => $request->nama_toko,
            'url_foto' => $request->url_foto,
            'deskripsi' => $request->deskripsi,
            'hastag' => $request->hastag,
            'cover' => $request->cover,
        ]);

        return response()->json([
            'id_anggota' => Auth::user()->id,
            'nama_toko' => $request->nama_toko,
            'url_foto' => $request->url_foto,
            'deskripsi' => $request->deskripsi,
            'hastag' => $request->hastag,
            'cover' => $request->cover,
        ], 201);

    }

    public function updateToko(Request $request, $id)
    {
        $toko = Toko::find($id);
        $toko->url_foto = $request->url_foto;
        $toko->deskripsi = $request->deskripsi;
        $toko->hastag = $request->hastag;
        $toko->cover = $request->cover;

        $toko->save();

        return response()->json([
            'url_foto' => $toko->url_foto,
            'deskripsi' => $toko->deskripsi,
            'hastag' => $toko->hastag,
            'cover' => $toko->cover,
        ], 201);

    }

    public function deleteToko($id)
    {
        $toko = Toko::find($id);
        $toko->delete();

        return response()->json([
            'status' => 'Success',
            'messsage' => 'Successfully Delete'
        ], 201);
    }
}
