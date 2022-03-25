<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'my_barangs';
    protected $primaryKey = 'my_id';
    protected $keyType = 'string';
    public $incrementing = false;
}
