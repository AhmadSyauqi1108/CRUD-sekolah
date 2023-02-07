<?php

namespace App\Http\Controllers;
use App\siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $dataSiswa = siswa::get();
        return view('dataSiswa',[
            'dataSiswa' => $dataSiswa
        ]); 
    }
}
