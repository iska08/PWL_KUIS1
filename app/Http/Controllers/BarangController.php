<?php

namespace App\Http\Controllers;

use DB;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function index(){
        $barang = DB::table('barangs')->get();
        return view('barang', compact('barang'));
    }
}
