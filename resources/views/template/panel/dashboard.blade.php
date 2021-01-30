@extends('layouts.panel')

@section('title', 'Admin - Dashboard')

@section('content')
@if(session('welcome'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
Swal.fire(
  'Selamat Datang',
  '{{ session('welcome') }}',
  'success'
)
</script>
@endif
<div id="app">
@include('partials/panel/sidebar')
<div id="main">
    @include('partials/panel/navbar')

    <div class="main-content container-fluid">
        <div class="page-title mb-4">
            <h3>Dashboard</h3>
        </div>
        <section class="section">
            <div class="row mb-2">
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>PESERTA DIDIK</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{ $siswa_total }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>SUDAH BAYAR</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{ $siswa_payment }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>BELUM BAYAR</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{ $siswa_not_payment }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>TRANSAKSI</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{ $siswa_total }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Data Terbaru</h4>
                            <div class="d-flex ">
                                <a href="#" class="btn btn-sm btn-primary">see all</a>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <table class='table mb-0' id="table1">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Nisn</th>
                                            <th>Kelas</th>
                                            <th>Status</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($siswa as $sw)
                                        <tr>
                                            <td>{{ $sw->name }}</td>
                                            <td>{{ $sw->nisn }}</td>
                                            <td>{{ $sw->classroom }}</td>
                                            @if($sw->status == 'Sudah Bayar')
                                            <td style="color: green;"><b>{{ $sw->status }}</b></td>
                                            @else
                                            <td style="color: red;"><b>{{ $sw->status }}</b></td>
                                            @endif
                                            <td>{{ $sw->updated_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection