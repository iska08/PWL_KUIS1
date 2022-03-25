<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'my_suppliers';
    protected $primaryKey = 'my_id';
    protected $keyType = 'string';
    public $incrementing = false;
}
