@extends('layout.app')

@section('konten')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    Tambah Produk
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/produk', $produk->id) }}/edit" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="control-label">Nama Produk</label>
                                    <input type="text"
                                        class="form-control @error('nama_produk')
                                        is-invalid
                                    @enderror"
                                        name="nama_produk" value="{{ $produk->nama_produk }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="control-label">Harga Produk</label>
                                    <input type="number"
                                        class="form-control @error('harga_produk')
                                        is-invalid
                                    @enderror"
                                        name="harga_produk" value="{{ $produk->harga_produk }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="control-label">Stok Produk</label>
                                    <input type="text"
                                        class="form-control @error('stok_produk')
                                        is-invalid
                                    @enderror"
                                        name="stok_produk" value="{{ $produk->stok_produk }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="control-label">Kategori Produk</label>
                                    <select name="kategori_produk" id="" class="form-control">
                                        <option value="sepatu">Sepatu</option>
                                        <option value="bola">Bola</option>
                                        <option value="baju">Baju</option>
                                        <option value="raket">Raket</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="control-label">Size Produk</label>
                                    <input type="text"
                                        class="form-control @error('size_produk')
                                    is-invalid
                                @enderror"
                                        name="size_produk" value="{{ $produk->size_produk }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="control-label">Foto Produk</label>
                                    <div class="input-group" id="inpt-grp">
                                        <input type="file" name="gambar_produk[]" accept=".pdf, .doc, .jpg, .jpeg, .png"
                                            class="form-control">
                                        <button type="button" class="btn btn-primary" id="btn-add"
                                            style="border-radius: 0 0"><i class="fas fa-plus"></i></button>
                                    </div>
                                    <div id="clone" hidden>
                                        <div class="input-group mt-2">
                                            <input type="file" name="gambar_produk[]"
                                                accept=".pdf, .doc, .jpg, .jpeg, .png" class="form-control">
                                            <button id="remv" type="button" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi_produk"
                                class="form-control  @error('deskripsi_produk')
                            is-invalid
                        @enderror"
                                id="" cols="30" rows="10">
                                {{ $produk->deskripsi_produk }}
                            </textarea>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-dark">Save Produk </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#btn-add").click(function() {
                var lsthtml = $("#clone").html();
                $("#inpt-grp").after(lsthtml);
            });


            $("body").on("click", "#remv", function() {
                $(this).closest(".input-group").remove();
            });
        });
    </script>
@endsection
