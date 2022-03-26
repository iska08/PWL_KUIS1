<?php

namespace App\Http\Controllers;

use DB;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = DB::table('pegawais')->get();
        return view('pegawai', compact('pegawai'));
    }
}
