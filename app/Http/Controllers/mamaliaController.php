<?php

namespace App\Http\Controllers;

use App\Models\mamalia;
use Illuminate\Http\Request;

class mamaliaController extends Controller
{
    public function getAllMamalia()
    {
        $mamalia = mamalia::orderBy('nama', 'asc')->get();

        if ($mamalia == null) {
            return response()->json([
                'message' => 'belum ada data',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Animal Information',
                'data' => $mamalia
            ], 200);
        }
    }

    public function getMamaliaId($id)
    {
        $mamalia = mamalia::find($id);

        if (!$mamalia) {
            return response()->json([
                'massage' => 'data tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'success',
                'data' => $mamalia
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

        $mamalia = mamalia::create($request->all());

        return response()->json([
            'massage' => 'data berhasil ditambahkan',
            'data' => $mamalia
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

        $mamalia = mamalia::find($id);
        $mamalia->update($request->all());

        if (!$mamalia) {
            return response()->json([
                'massage' => 'data tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'data berhasil diubah',
                'data' => $mamalia
            ], 200);
        }
    }

    public function destroy($id)
    {
        $mamalia = mamalia::find($id);
        $mamalia->delete();

        if (!$mamalia) {
            return response()->json([
                'massage' => 'data tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'data berhasil dihapus',
                'data' => $mamalia
            ], 200);
        }
    }
}
