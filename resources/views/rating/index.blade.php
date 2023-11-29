@extends('manager/layouts.master')

@section('css')
{{--
<link rel="stylesheet" href="{{ asset('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}"> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script>
    $(function() {
    $('#data-tabel').DataTable();
    });
</script>
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Rating</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Rating</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content mt-4">
        <div class="container-fluid">
            <div class="container">
                {{-- this content --}}
                    <div class="card">
                        <div class="card-header text-left">
                            <a class="btn btn-info mb-3" href="{{ route('manager.index') }}" role="button">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-info mb-3" href="" role="button">
                                + RATING
                            </a>

                        </div>
                        
                            <div class="card-body">
                                <table class="table table-hover table-bordered text-center" id="data-tabel">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NAME</th>
                                            <th>RATING</th>
                                            <th>REVIEW</th>
                                            <th>TANGGAL</th>
                                            <th>AKTIVITAS</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($ratings as $rating)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $rating->user_name }}</td>
                                                <td>{{ $rating->user_rating }}</td>
                                                <td>{{ $rating->user_review }}</td>
                                                <td>{{ $rating->datetime }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a> 
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                         </div>
                    </div>
             </div>
        </div>
    </section>
</div>

@endsection