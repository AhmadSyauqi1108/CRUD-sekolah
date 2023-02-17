<?php

namespace App\Http\Controllers;
use App\siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $dataSiswa = siswa::get();
        $menu = 'siswa';
        return view('dataSiswa',[
            'dataSiswa' => $dataSiswa, 'menu' => $menu
        ]); 
    }

    public function create(){
        $menu = 'siswa';
        return view('createSiswa',[
            'menu' => $menu
        ]);
    }

    public function store(Request $requset){
        $nis = $requset->nis;
        $nama = $requset->nama;
        $gender = $requset->jenis;
        $alamat = $requset->alamat;
        $kelas = $requset->kelas;
        $foto = $requset->foto;
    }
}
