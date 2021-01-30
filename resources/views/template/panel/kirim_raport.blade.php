@extends('layouts.panel')

@section('title', 'Admin - Kirim Raport')

@section('content')
@if(session('message'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
Swal.fire(
  'Berhasil',
  '{{ session('message') }}',
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
            <h3>Kirim Raport</h3>
        </div>
        <section class="section">
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Data Kirim Raport</h4>
                            <form action="{{ route('admin.search.kirim.raport') }}" method="GET">
                                <input type="text" class="form-control mr-sm-2" name="search" placeholder="Cari Data...">
                            </form>
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
                                            <th>Raport</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($raport as $rap)
                                        <tr>
                                            <td>{{ $rap->name }}</td>
                                            <td>{{ $rap->nisn }}</td>
                                            <td>{{ $rap->classroom }}</td>
                                            <td>
                                                @if($rap->status == 'Sudah Bayar')
                                                <b class="text-success">{{ $rap->status }}</b>
                                                @else
                                                <b class="text-danger">{{ $rap->status }}</b>
                                                @endif
                                            </td>
                                            <td>
                                                @if(isset($rap->raport))
                                                <b class="text-success">Sudah Upload</b>
                                                @else
                                                <b class="text-danger">Belum Upload</b>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.upload.raport', $rap->id) }}" class="btn btn-outline-primary block">Upload</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{ $raport->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection