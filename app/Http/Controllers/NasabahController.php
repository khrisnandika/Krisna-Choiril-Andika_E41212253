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
    
}
