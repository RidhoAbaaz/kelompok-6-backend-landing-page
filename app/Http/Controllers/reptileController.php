<?php

namespace App\Http\Controllers;

use App\Models\reptile;
use Illuminate\Http\Request;

class reptileController extends Controller
{
    public function getAllReptile()
    {
        $reptile = reptile::orderBy('nama', 'asc')->get();
        return response()->json([
            'message' => 'Animal Information',
            'data' => $reptile
        ], 200);
    }

    public function getReptileId($id)
    {
        $reptile = reptile::find($id);

        if (!$reptile) {
            return response()->json([
                'massage' => 'data tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'success',
                'data' => $reptile
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

        $reptile = reptile::create($request->all());

        return response()->json([
            'massage' => 'data berhasil ditambahkan',
            'data' => $reptile
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

        $reptile = reptile::find($id);
        $reptile->update($request->all());

        return response()->json([
            'massage' => 'data berhasil ditambahkan',
            'data' => $reptile
        ], 200);
    }

    public function destroy($id)
    {
        $reptile = reptile::find($id);
        $reptile->delete();

        return response()->json([
            'massage' => 'data berhasil dihapus',
            'data' => $reptile
        ], 200);
    }
}
