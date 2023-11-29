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
                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="kode Produk" class="form-label">Kode Produk</label>
                        <input type="text" class="form-control" id="kode Produk" name="kode_produks"
                            placeholder="Kode Produk">
                    </div>
                    <div class="mb-3">
                        <label for="namaProduk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="namaProduk" name="nama_produks"
                            placeholder="Nama Produk">
                    </div>
                    <div class="mb-3">
                        <label for="kategoriProduk" class="form-label">Kategori Produk</label> <br>
                        <select class="form-select" id="kategoriProduk" name="kategori_produk">
                            <option selected disabled>Pilih Kategori</option>
                            @foreach($kategori as $row)
                            <option value="{{ $row->nama_kategori }}">{{ $row->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlahProduk" class="form-label">Jumlah Produk</label>
                        <input type="text" class="form-control" id="jumlahProduk" name="stok_produks"
                            placeholder="Jumlah Produk">
                    </div>
                    <div class="mb-3">
                        <label for="hargaProduk" class="form-label">Harga produk</label>
                        <input type="text" class="form-control" id="hargaProduk" name="harga_produks"
                            placeholder="Harga produk">
                    </div>

                    <div class="mb-3">
                        <label for="gambarProduk" class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" id="gambarProduk" name="gambar_produks"
                            placeholder="Gambar Produk">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi_produks"
                            placeholder="Deskripsi"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success text-center">Tambah</button>
                    <button class="btn btn-danger text-center"><a class="text-light"
                            href="{{ route('data.products') }}">Batal</a></button>
                </form>
            </div>
        </div>
</div>


</div>
</section>
</div>
@endsection