@extends('manager/layouts.master')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script>
    $(function() {
            $('#data-tabel').DataTable();
        });

            function confirmDelete() {
                var result =confirm("Are you sure you want to delete this item?");
                if (result) {
                    // User clicked "OK," submit the form
                    document.getElementById('deleteForm').submit();
                }else{
                    return false;
                }
            }
</script>


@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Product's</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Product's</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content mt-4 ml-3">

        <div class="container-fluid">
            {{-- this content --}}
            <a class="btn btn-info mb-3" href="{{ route('manager.index') }}"><i class="fa fa-arrow-left"></i></a>
            <a class="btn btn-info mb-3" href="{{ route('formTambah-produk') }}">+
                Data Product's</a>

            <table class="table table-hover border" id="data-tabel">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Kode produk </th>
                        <th>Gambar</th>
                        <th>Nama Product</th>
                        <th>Kategori Produk</th>
                        <th>Harga Product</th>
                        <th>Stok Product</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produks as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $row->kode_produks }}</td>
                        <td><img src="{{ asset('storage/img/uploads/' . $row->gambar_produks) }}" alt="gambar"
                                width="100px"></td>

                        <td>{{ $row->nama_produks }}</td>
                        <td>{{ $row->kategori_produks }}</td>
                        <td>{{ $row->harga_produks }}</td>
                        <td>{{ $row->stok_produks }}</td>
                        <td>{{ $row->deskripsi_produks }}</td>

                        <td class="text-center">
                            <a class="btn btn-outline-success btn-sm mb-1 "
                                href="{{ route('formEdit-produk', $row->id_produks) }}"><i class="fa fa-edit small"></i>
                            </a>

                            <form id="deleteForm" action="{{ route('delete-produk', $row->id_produks) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm mb-1"
                                    onclick="return confirm('Are you sure?')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="small">
                <i>
                    Keterangan kategori produk:
                    <span>
                        @foreach ($kategori as $item)
                        <small class="small text-bold">{{ $item->id_produk_kategories }}. {{
                            $item->nama_kategori }}
                        </small>
                        @endforeach
                    </span>
                </i>
            </div>
    </section>
</div>
@endsection