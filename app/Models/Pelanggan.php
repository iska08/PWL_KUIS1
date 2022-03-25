<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'my_pelanggans';
    protected $primaryKey = 'my_id';
    protected $keyType = 'string';
    public $incrementing = false;
}
