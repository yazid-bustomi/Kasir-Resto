@extends('layouts.master')

@section('addCss')
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('addJavascript')
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#data-table").DataTable();
        })

    </script>

    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        confirmDelete = function(button){
            var url = $(button).data('url');
            swal({
                'title': 'konfirmasi hapus',
                'text' : 'Yakin Untuk Menghapus Data Ini',
                'dangermode' : true,
                'buttons' : true
            }).then(function(value){
                if(value){
                    window.location = url;
                }
            })
        }
    </script>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">MataPelajaran</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Mata Pelajaran</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		{{-- main content here --}}

        <div class="card">
            <div class="card-header text-right">
		<a href="{{ route('createMapel') }}" class="btn btn-primary" role="button">Tambah Mata Pelajaran + </a>
		</div>
            <div class="card-body">
                <table class="table table-hover mb-0 table-bordered" id="data-table">
		<thead>
		<tr>
			<th>No.</th>
			<th>Nama Mata Pelajaran</th>
			<th>Nama Jurusan</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
		@foreach ($mata_pelajarans as $mapel )	
		<tr>
			<td>{{ $loop->index + 1}}</td>
			<td>{{ $mapel->nama}}</td>
			<td>{{ $mapel->jurusan ? $mapel->jurusan->nama : 'Tidak ada'}}</td>
			<td>{{ $mapel->deskripsi}}</td>
			<td>
				<a href="{{ route('editMapel', ['id' => $mapel->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
				<a onclick="confirmDelete(this)" data-url="{{ route('deleteMapel', ['id' => $mapel->id]) }}" 
				class="btn btn-danger btn-sm" role="button" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>	
</div>
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection