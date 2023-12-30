<?php

namespace App\Http\Controllers;

use App\Models\aves;
use Illuminate\Http\Request;

class avesController extends Controller
{
    public function getAllAves()
    {
        $aves = aves::orderBy('nama', 'asc')->get();
        return response()->json([
            'message' => 'Animal Information',
            'data' => $aves
        ], 200);
    }

    public function getAvesId($id)
    {
        $aves = aves::find($id);

        if (!$aves) {
            return response()->json([
                'massage' => 'data tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'success',
                'data' => $aves
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

        $aves = aves::create($request->all());

        return response()->json([
            'massage' => 'data berhasil ditambahkan',
            'data' => $aves
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

        $aves = aves::find($id);
        $aves->update($request->all());

        if (!$aves) {
            return response()->json([
                'massage' => 'data tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'data berhasil diubah',
                'data' => $aves
            ], 200);
        }
    }

    public function destroy($id)
    {
        $aves = aves::find($id);
        $aves->delete();

        if (!$aves) {
            return response()->json([
                'massage' => 'data tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'data berhasil dihapus',
                'data' => $aves
            ], 200);
        }
    }
}
