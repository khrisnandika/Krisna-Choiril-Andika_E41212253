<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{

    //fungsi tampil frontend
    public function tampilUbah(){
        return view('ubahdata');
    }

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

    //fungsi menampilkan data yang ingin diupdate
    public function tampilUbahData($id){
        $data = Nasabah::find($id);
        return view('ubahdata', compact('data'));
    }
    public function ubahData(Request $request, $id){
        $data = Nasabah::find($id);
        $data -> update($request->all());
        return redirect()->route('read_data');
    }
    
    
}
