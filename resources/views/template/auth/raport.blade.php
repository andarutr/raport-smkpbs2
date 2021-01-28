@extends('layouts.auth')

@section('title', 'E-Raport')

@section('content')
<div id="auth">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card pt-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <img src="{{ asset('assets/images/favicon.svg') }}" height="48" class='mb-4'>
                            <h3>E-RAPORT</h3>
                        </div>
                        <form action="index.html">
                            <div class="form-group position-relative has-icon-left">
                                <label for="username">NISN</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="username" placeholder="Masukkan NISN">
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <button class="btn btn-primary mt-3">Check</button>
                            </center>
                        </form>
                        <div class="divider mt-4">
                            <div class="divider-text">Saugi X Andaru</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection