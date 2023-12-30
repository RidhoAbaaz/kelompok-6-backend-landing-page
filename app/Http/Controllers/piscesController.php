<?php

namespace App\Http\Controllers;

use App\Models\pisces;
use Illuminate\Http\Request;

class piscesController extends Controller
{
    public function getAllPisces()
    {
        $pisces = pisces::orderBy('nama', 'asc')->get();

        if ($pisces == null) {
            return response()->json([
                'message' => 'belum ada data',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Animal Information',
                'data' => $pisces
            ], 200);
        }
    }

    public function getPiscesId($id)
    {
        $pisces = pisces::find($id);

        if (!$pisces) {
            return response()->json([
                'massage' => 'data tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'success',
                'data' => $pisces
            ], 200);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|active_url',
            'nama' => 'required',
            'nama_ilmiah' => 'required',
            'jenis' => 'required',
            'habitat' => 'required',
        ]);

        $pisces = pisces::create($request->all());

        return response()->json([
            'massage' => 'data berhasil ditambahkan',
            'data' => $pisces
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|active_url',
            'nama' => 'required',
            'nama_ilmiah' => 'required',
            'jenis' => 'required',
            'habitat' => 'required',
        ]);

        $pisces = pisces::find($id);
        $pisces->update($request->all());

        if (!$pisces) {
            return response()->json([
                'massage' => 'data tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'data berhasil diubah',
                'data' => $pisces
            ], 200);
        }
    }

    public function destroy($id)
    {
        $pisces = pisces::find($id);
        $pisces->delete();

        if (!$pisces) {
            return response()->json([
                'massage' => 'data tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'data berhasil dihapus',
                'data' => $pisces
            ], 200);
        }
    }
}
