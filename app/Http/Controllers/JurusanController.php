<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jurusan;

class JurusanController extends Controller
{
    public function index(){
        $dataJurusan = jurusan::get();
        return view('dataJurusan',[
            'dataJurusan' => $dataJurusan
        ]); 
    }
}
