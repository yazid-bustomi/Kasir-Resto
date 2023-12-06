@extends('manager/layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">form Update client</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">form Update client</li>
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
                <form action="{{ route('update-clients', $user) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="produk" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control" id="produk" value="{{ $user->name }}"
                                placeholder="masukan Nama">
                            @error('name')
                            <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control" id="email" value="{{ $user->email }}"
                                placeholder="example@gmail.com">
                            @error('email')
                            <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pass" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                            <input name="password" type="password" class="form-control" id="pass"
                                placeholder="new password">
                            @error('password')
                            <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input name="phone" type="text" class="form-control" id="phone" value="{{ $user->phone}}"
                                placeholder="masukan nomor hp">
                            @error('phone')
                            <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="role" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <select name="role" id="">
                                <option value="{{ $user->role }}">{{ $user->role }}</option>
                                <option value="manajer">Manager</option>
                                <option value="kasir">kasir</option>
                                <option value="client">Client</option>
                            </select>
                            @error('role')
                            <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <button type="submit" class="btn btn-success text-center">Tambah</button>
                        <button class="btn btn-danger text-center ml-3"><a class="text-light"
                                href="{{ route('data.clients') }}">kembali</i></a></button>
                    </div>
                </form>
            </div>
        </div>
</div>


</div>
</section>
</div>
@endsection