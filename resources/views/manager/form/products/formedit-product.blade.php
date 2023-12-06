@extends('manager/layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">form Update Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">form Update Produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {{-- this content --}}
            <div class="container mt-3">
                <form action="{{ route('update-produk', $produks) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $produks->id_produks }}">

                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">kode Produk</label>
                        <div class="col-sm-10">
                            <input name="kode_produks" type="text" class="form-control" id="produk"
                                value="{{ $produks->kode_produks }}">
                            @error('kode_produks')
                            <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input name="nama_produks" type="text" class="form-control" id="produk"
                                value="{{ $produks->nama_produks }}">
                            @error('nama_produks')
                            <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">kategori Produk</label>
                        <div class="col-sm-10">
                            <select name="kategori_produks" id="">
                                $@foreach ($kategories as $item)
                                <option value="{{ $item->id_produk_kategories }}">{{ $item->id_produk_kategories }} . {{
                                    $item->nama_kategori }}
                                </option>
                                @endforeach
                            </select>
                            @error('kategori_produks')
                            <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">Harga Produk</label>
                        <div class="col-sm-10">
                            <input name="harga_produks" type="text" class="form-control" id="produk"
                                value="{{ $produks->harga_produks }}">
                            @error('harga_produks')
                            <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">Stok Produk</label>
                        <div class="col-sm-10">
                            <input name="stok_produks" type="text" class="form-control" id="produk"
                                value="{{ $produks->stok_produks }}">
                            @error('stok_produks')
                            <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">Gambar Produk</label>
                        <div class="col-sm-10">
                            <input name="gambar_produks" type="file" class="form-control" id="produk"
                                value="{{ $produks->gambar_produks }}">
                            @if($produks->gambar_produks)
                            <img src="{{ asset('uploads/' . $produks->gambar_produks) }}" width="50px"
                                alt="Gambar Produk">
                            @endif

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">Deskripsi Produk</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi_produks" type="text" class="form-control" id="produk"
                                value="{{ $produks->deskripsi_produks }}">{{ $produks->deskripsi_produks }}</textarea>
                            @error('deskripsi_produks')
                            <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <button type="submit" class="btn btn-success text-center">Simpan</button>
                        <button class="btn btn-danger text-center ml-3"><a class="text-light"
                                href="{{ route('data.products') }}">kembali</i></a></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection