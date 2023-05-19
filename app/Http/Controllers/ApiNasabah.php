<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class ApiNasabah extends Controller
{
    public function getAll(){
        $nasabah = Nasabah::all();
        return response()->json($nasabah, 200);
    }
}
