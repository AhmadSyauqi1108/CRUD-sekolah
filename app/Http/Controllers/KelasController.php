<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;

class KelasController extends Controller
{
    public function index(){
        $dataKelas = kelas::get();
        $menu = 'kelas';
        return view('dataKelas',[
            'dataKelas' => $dataKelas, 'menu' => $menu
        ]); 
    }

    public function getKelas(Request $requset){
        $cari = $requset->kelas;
        $tingkat = $requset->tingkat;
        $dataKelas = kelas::where([['nama_kelas','like','%'.$cari.'%'],['tingkat', 'like', '%' .$tingkat. '%']])->get();
        $kelas = [];
        foreach($dataKelas as $item){
            $kelas[] = [
                'id' => $item->id_kelas,
                'text' => $item->nama_kelas,
            ];
        }
        return response()->json(['kelas' => $kelas]);
    }
}
