@extends('manager/layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Order</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
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
                <a class="btn btn-info mb-3" href="{{ route('manager') }}"><i class="fa fa-arrow-left"></i></a>
                <table class="table table-hover" id="data-tabel">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User ID</th>
                            <th>No Order</th>
                            <th>Bayar</th>
                            <th>Total Bayar</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $order->user_id }}</td>
                                <td>{{ $order->no_order }}</td>
                                <td>{{ $order->bayar }}</td>
                                <td>{{ $order->total_bayar }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    {{-- <a href="{{ route('order.edit', $order->id) }}">
                                        Edit</a>
                                    <a href="{{ route('order.delete', $order->id) }}">
                                        Delete</a> --}}
                                        Bayar
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

@endsection