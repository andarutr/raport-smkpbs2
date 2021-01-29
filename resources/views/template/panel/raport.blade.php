@extends('layouts.panel')

@section('title', 'E-Raport')

@section('content')
<div id="app">
@include('partials/panel/sidebar')
<div id="main">
    @include('partials/panel/navbar')

    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>E-Raport</h3>
            <p class="text-subtitle text-muted">Semoga hasilnya memuaskan! Keep learning guys...</p>
        </div>
        <section class="section">
            <div class="row mb-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class='card-heading p-1 pl-3'>Download Data</h3>
                        </div>
                        <div class="card-body">
                            <center>
                                <img class="img-fluid" src="{{ asset('assets/images/data.png') }}" width="150"><br>
                                <a class="btn btn-primary" href="{{ asset('assets/doc/raport') }}/{{ $raport->raport }}">download</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-header">
                            <h4>Status Pembayaran</h4>
                        </div>
                        <div class="card-body">
                            <div id="radialBars"></div>
                            <div class="text-center mb-5">
                                <img class="img-fluid" src="{{ asset('assets/images/verified.png') }}" width="100">
                                <h1 class='text-green'>{{ $raport->status }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection