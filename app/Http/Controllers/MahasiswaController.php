<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MahasiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function getAllMahasiswa(){
        $mahasiswa = Mahasiswa::with("prodi")->get();

        return response()->json([
            'status' => 'Success',
            'message' => 'all users grabbed',
            'mahasiswa' => $mahasiswa,
        ],200);
    }

    public function getByToken(Request $request)
    {
        return response()->json([
            'success' => true,
            'message' => 'grabbed user by token',
            'mahasiswa' => $request->mahasiswa,
          ], 200);
    }
}
