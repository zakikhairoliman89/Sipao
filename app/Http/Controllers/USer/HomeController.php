<?php

namespace App\Http\Controllers\USer;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.Home', [
            'list_produk' => Produk::all()
        ]);
    }
    public function shop()
    {
        return view('user.Shop', [
            'list_produk' => Produk::all()
        ]);
    }

    public function detail(Produk $produk)
    {
        return view('user.Detail-shop', [
            'produk' => $produk,
            'gambar' => json_decode($produk->gambar_produk)
        ]);
    }
}
