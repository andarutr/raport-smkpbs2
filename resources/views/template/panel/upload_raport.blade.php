@extends('layouts.panel')

@section('title', 'Admin - Upload Raport '.$raport->name)

@section('content')
<div id="app">
@include('partials/panel/sidebar')
<div id="main">
    @include('partials/panel/navbar')

    <div class="main-content container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 mx-auto">
                    <a href="{{ route('admin.kirim.raport') }}">> kembali</a>
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <h3>Upload Raport</h3>
                            </div>
                            <form action="{{ route('admin.upload.raport', $raport->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-md-3 col-12"></div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="raport">
                                        </div>
                                        <p class="text-danger">@error('raport'){{ $message }}@enderror</p>
                                    </div>
                                    <div class="col-md-3 col-12"></div>
                                </diV>
                                <div class="clearfix mt-4">
                                    <center>
                                        <button class="btn btn-primary">Upload</button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection