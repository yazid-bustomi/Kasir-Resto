@extends('manager/layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">form Tambah Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">form Tambah Produk</li>
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
                <form action="{{ route('produk-store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">kode Produk</label>
                        <div class="col-sm-10">
                            <input name="kode_produks" type="text" class="form-control" id="produk">
                            @error('kode_produks')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input name="nama_produks" type="text" class="form-control" id="produk">

                            @error('nama_produks')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">kategori Produk</label>
                        <div class="col-sm-10">
                            <select name="kategori_produks" id="">
                                <option class="disable" value="">Pilih Kategori</option>
                                $@foreach ($kategori as $item)
                                <option value="{{ $item->id_produk_kategories }}">{{ $item->id_produk_kategories }} . {{
                                    $item->nama_kategori }}
                                </option>
                                @endforeach
                            </select>
                            @error('kategori_produks')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">Harga Produk</label>
                        <div class="col-sm-10">
                            <input name="harga_produks" type="text" class="form-control" id="produk">
                            @error('harga_produks')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">Stok Produk</label>
                        <div class="col-sm-10">
                            <input name="stok_produks" type="text" class="form-control" id="produk">
                            @error('stok_produks')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">Gambar Produk</label>
                        <div class="col-sm-10">
                            <input name="gambar_produks" type="file" class="form-control" id="produk">
                            @error('gambar_produks')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">Deskripsi Produk</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi_produks" type="text" class="form-control" id="produk"></textarea>
                            @error('deskripsi_produks')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <button type="submit" class="btn btn-success text-center">Tambah</button>
                        <button class="btn btn-danger text-center ml-3"><a class="text-light"
                                href="{{ route('data.products') }}">kembali</i></a></button>
                    </div>
                </form>
            </div>
        </div>
</div>


</div>
</section>
</div>
@endsection