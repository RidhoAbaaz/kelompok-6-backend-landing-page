<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;

class penggunaControler extends Controller
{
    public function getAllUser()
    {
        $users = pengguna::orderBy('username', 'asc')->get();
        return response()->json([
            'message' => 'user information',
            'data' => $users
        ], 200);
    }

    public function getUsersId($id)
    {
        $users = pengguna::find($id);
        if (!$users) {
            return response()->json([
                'message' => 'users tidak ditemukan'
            ]);
        } else {
            return response()->json([
                'message' => 'success',
                'data' => $users,
            ], 200);
        }
    }

    public function getUsersName($username)
    {
        $users = pengguna::where('username', $username)->get();
        if (!$users) {
            return response()->json([
                'message' => 'users tidak ditemukan',
            ]);
        } else {
            return response()->json([
                'message' => 'success',
                'data' => $users,
            ], 200);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            'region' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $users = pengguna::create($request->all());

        return response()->json([
            'massage' => 'users berhasil ditambahkan',
            'data' => $users
        ], 200);
    }
    public function delete($id)
    {
        $users = pengguna::findOrFail($id);
        $users->delete();

        return response()->json([
            'massage' => 'user berhasil dihapus',
            'data' => $users
        ]);
    }
}
