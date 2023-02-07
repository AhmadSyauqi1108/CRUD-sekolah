<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    public function kelas()
    {
        return $this->belongsTo('App\kelas', 'id_kelas');
    }
}
