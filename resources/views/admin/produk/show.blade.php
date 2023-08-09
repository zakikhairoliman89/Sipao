@extends('layout.app')

@section('konten')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    Detail Produk
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="">
                                <img class="img-fluid" src="{{ url('gambar', $foto_produk[0]) }}" alt="..." />
                            </div>
                            <div class="row mt-2">
                                @foreach ($foto_produk as $foto)
                                    <div class="col-md-3">
                                        <img src="{{ url('gambar', $foto) }}" alt="" class="img-fluid"
                                            width="450px">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>{{ $produk->nama_produk }}</h2>
                            <hr>
                            <h5>Rp. {{ $produk->harga_produk }}</h5>
                            <h6> Size : {{ $produk->size_produk }} Stok : {{ $produk->stok_produk }} Kategori :
                                {{ $produk->kategori_produk }}</h6>
                            <p>
                                {{ $produk->deskripsi_produk }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
