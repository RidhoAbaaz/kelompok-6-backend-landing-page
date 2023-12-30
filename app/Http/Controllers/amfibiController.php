<?php

namespace App\Http\Controllers;

use App\Models\amfibi;
use Illuminate\Http\Request;

class amfibiController extends Controller
{
    public function getAllAmfibi()
    {
        $amfibi = amfibi::orderBy('nama', 'asc')->get();
        return response()->json([
            'message' => 'Animal Information',
            'data' => $amfibi
        ], 200);
    }

    public function getAmfibiId($id)
    {
        $amfibi = amfibi::find($id);

        if (!$amfibi) {
            return response()->json([
                'massage' => 'data tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'success',
                'data' => $amfibi
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

        $amfibi = amfibi::create($request->all());

        return response()->json([
            'massage' => 'data berhasil ditambahkan',
            'data' => $amfibi
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

        $amfibi = amfibi::find($id);
        $amfibi->update($request->all());

        return response()->json([
            'massage' => 'data berhasil ditambahkan',
            'data' => $amfibi
        ], 200);
    }

    public function destroy($id)
    {
        $amfibi = amfibi::find($id);
        $amfibi->delete();

        return response()->json([
            'massage' => 'data berhasil dihapus',
            'data' => $amfibi
        ], 200);
    }
}
