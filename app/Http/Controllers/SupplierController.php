<?php

namespace App\Http\Controllers;

use DB;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    public function index(){
        $supplier = DB::table('suppliers')->get();
        return view('supplier', compact('supplier'));
    }
}
