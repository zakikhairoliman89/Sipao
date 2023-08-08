<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('admin.produk.index', [
            'list_produk' => Produk::all()
        ]);
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
            'kategori_produk' => 'required',
            'size_produk' => 'required',
            'gambar_produk' => 'required',
            'deskripsi_produk' => 'required',
        ]);

        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->stok_produk = $request->stok_produk;
        $produk->kategori_produk = $request->kategori_produk;
        $produk->size_produk = $request->size_produk;
        $produk->deskripsi_produk = $request->deskripsi_produk;
        $files = [];
        if ($request->hasFile('gambar_produk')) {
            foreach ($request->file('gambar_produk') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->storeAs('gambar', $name);
                $files[] = $name;
            }
        }
        $produk->gambar_produk = json_encode($files);
        $produk->save();

        return redirect('admin/produk');
    }
}
