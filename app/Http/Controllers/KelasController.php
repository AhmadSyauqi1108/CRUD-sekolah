<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;

class KelasController extends Controller
{
    public function index(){
        $dataKelas = kelas::get();
        return view('dataKelas',[
            'dataKelas' => $dataKelas
        ]); 
    }
}
