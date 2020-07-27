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
            'nama' => 'required|min:3|unique:toko',
            'link_foto' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
        ]);

        $toko->create([
            'idAnggota' => Auth::user()->id,
            'nama' => $request->nama,
            'link_foto' => $request->link_foto,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ]);

        return response()->json([
            "status" => true,
            "message" => "Data successfuly created",
            "data" => [
                'idAnggota' => Auth::user()->id,
                'nama' => $request->nama,
                'link_foto' => $request->link_foto,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status,
            ]
        ], 201);

    }

    public function updateToko(Request $request, $id)
    {
        $toko = Toko::find($id);
        $toko->nama = $request->nama;
        $toko->link_foto = $request->link_foto;
        $toko->deskripsi = $request->deskripsi;
        $toko->status = $request->status;

        $toko->save();

        return response()->json([
            "status" => true,
            "message" => "Data Successfully update",
            "data" => [
                "nama" => $request->nama,
                "link_foto" => $request->link_foto,
                "deskripsi" => $request->deskripsi,
                "status" => $request->status
            ]
        ], 201);

    }

}
