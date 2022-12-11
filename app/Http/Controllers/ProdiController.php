<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProdiController extends Controller
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

    public function prodi(){
        $prodi = Prodi::all();

        if(!$prodi){
            return response()->json([
                'success' => 'error',
                'message' => 'no data'
            ],500);
        }

        return response()->json([
        'prodi' => $prodi
        ],200);
    }
}
