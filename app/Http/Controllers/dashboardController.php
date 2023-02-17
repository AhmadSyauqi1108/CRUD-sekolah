<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\siswa;
use App\kelas;
use App\jurusan;

class dashboardController extends Controller
{
   public function index(){
    $dataSiswa = siswa::get();
    $dataKelas = kelas::get();
    $dataJurusan = jurusan::get();
    $menu = 'dashboard';
    return view('dashboard', [
        'dataSiswa' => $dataSiswa, 'dataKelas' => $dataKelas, 'dataJurusan' => $dataJurusan, 'menu' => $menu
    ]);
   }
}
