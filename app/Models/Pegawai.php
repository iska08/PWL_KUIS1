<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'my_pegawais';
    protected $primaryKey = 'my_id';
    protected $keyType = 'string';
    public $incrementing = false;
}
