<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class users extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
}
