@extends('user.layout.app')

@section('content')
    <div class="site-section bg-primary py-5 page-title-wrap mt-5">
        <div class="container">
            <h1>{{ $produk->kategori_produk }}</h4>
        </div>
    </div>
    <div class="site-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="owl-carousel hero-slide owl-style">
                        @foreach ($gambar as $produks)
                            <img src="{{ url('gambar', $produks) }}" alt="Image" class="img-fluid">
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="text-primary">{{ $produk->nama_produk }}</h2>
                    <h5 class="text-primary">Rp. {{ number_format($produk->harga_produk, 2, ',', '.') }}</h5>
                    <p>{!! $produk->deskripsi_produk !!}</p>
                    <div class="mb-5">
                        <p>Stok : {{ $produk->stok_produk }}</p>
                        <p>Size : {{ $produk->size_produk }}</p>
                    </div>
                    <p>
                        @if (!Auth::check())
                            <a href="{{ url('login') }}" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary"
                                onclick="return alert('login dahulu')">Add To Cart</a>
                        @else
                            <form action="{{ url('cart') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                <button class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To
                                    Cart</button>
                            </form>
                        @endif

                </div>
            </div>
        </div>
    </div>
    <div class="hero-2"
        style="background-image: url('https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');">
        <div class="container">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-md-8">
                    <span class="sub-title">Welcome</span>
                    <h2>SIPAO</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
