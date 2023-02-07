<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    
    public function jurusan()
    {
        return $this->belongsTo('App\jurusan', 'id_jurusan');
    }
}