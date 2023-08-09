<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananBaruController extends Controller
{
    public function index(){
        return view('admin.pesanan-baru.index');
    }
}
