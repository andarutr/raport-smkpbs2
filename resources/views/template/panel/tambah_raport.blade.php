@extends('layouts.panel')

@section('title', 'Admin - Tambah Raport')

@section('content')
@if(session('success'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
Swal.fire(
  'Berhasil',
  '{{ session('success') }}',
  'success'
)
</script>
@endif
<div id="app">
@include('partials/panel/sidebar')
<div id="main">
    @include('partials/panel/navbar')

    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3 class="mb-5">Tambah Raport</h3>
                </div>
            </div>
        </div>
    
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Raport</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.tambah_raport') }}" class="form" method="POST">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                <input type="text" id="nama_lengkap" class="form-control" name="name" value="{{ old('name') }}">
                                            </div>
                                            <p class="text-danger">@error('name'){{ $message }}@enderror</p>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="nisn">NISN</label>
                                                <input type="number" id="nisn" class="form-control" name="nisn" value="{{ old('nisn') }}">
                                            </div>
                                            <p class="text-danger">@error('nisn'){{ $message }}@enderror</p>
                                        </div>
                                        <div class="col-md-6 col-12 mt-4">
                                            <div class="form-group">
                                                <label class="col-sm-12">Kelas</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line" name="classroom">
                                                        <option value=""></option>
                                                        <option value="X Animasi">X Animasi</option>
                                                        <option value="XI Animasi">XI Animasi</option>
                                                        <option value="XII Animasi">XII Animasi</option>
                                                        <option value="X Akuntansi">X Akuntansi</option>
                                                        <option value="XI Akuntansi">XI Akuntansi</option>
                                                        <option value="XII Akuntansi">XII Akuntansi</option>
                                                        <option value="X Perbankan Syariah">X Perbankan Syariah</option>
                                                        <option value="XI Perbankan Syariah">XI Perbankan Syariah</option>
                                                        <option value="XII Perbankan Syariah">XII Perbankan Syariah</option>
                                                        <option value="X OTKP1">X OTKP1</option>
                                                        <option value="XI OTKP1">XI OTKP1</option>
                                                        <option value="XII OTKP1">XII OTKP1</option>
                                                        <option value="X OTKP2">X OTKP2</option>
                                                        <option value="XI OTKP2">XI OTKP2</option>
                                                        <option value="XII OTKP2">XII OTKP2</option>
                                                    </select>
                                                </div>
                                                <p class="text-danger">@error('classroom'){{ $message }}@enderror</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-4">
                                            <div class="form-group">
                                                <label class="col-sm-12">Status Pembayaran</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line" name="status">
                                                        <option value=""></option>
                                                        <option value="Sudah Bayar">Sudah Bayar</option>
                                                        <option value="Belum Bayar">Belum Bayar</option>
                                                    </select>
                                                </div>
                                                <p class="text-danger">@error('status'){{ $message }}@enderror</p>
                                            </div>
                                        </div>
                                        <div class="col-12 justify-content-end">
                                            <div class="text-center mt-4">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection