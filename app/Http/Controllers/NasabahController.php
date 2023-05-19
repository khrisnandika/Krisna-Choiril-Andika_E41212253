<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{

    //fungsi tambah data
    public function tambahNasabah(Request $request){
        Nasabah::create($request->all());
        return redirect()->route('home');
    }

    //fungsi hapus data
    public function hapusData($id){
        $data = Nasabah::find($id);
        $data -> delete();
        return redirect()->route('home');
    }
    
    
}
