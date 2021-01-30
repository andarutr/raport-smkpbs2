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
                                            @if($rap->status == 'Sudah Bayar')
                                            <td style="color: green;"><b>{{ $rap->status }}</b></td>
                                            @else
                                            <td style="color: red;"><b>{{ $rap->status }}</b></td>
                                            @endif
                                            <td>
                                                @if(isset($rap->raport))
                                                    Sudah Upload
                                                @else
                                                    Belum Upload
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-primary block"
                                                data-bs-toggle="modal" data-bs-target="#uploadModal"">Upload</button>
                                                
                                                {{-- Modal --}}
                                                <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog"
                                                aria-labelledby="uploadModalTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="uploadModalTitle">Upload Raport {{ $rap->name }}</h5>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.upload.raport', $rap->id) }}" method="POST" enctype="multipart/form-data">@csrf
                                                                <div class="form-group">
                                                                    <label for="upload">UPLOAD</label>
                                                                    <input type="file" id="upload" class="form-control mt-4" name="raport">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary mt-4 ml-1">Upload</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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