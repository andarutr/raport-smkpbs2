@extends('layouts.auth')

@section('title', 'Login Admin')

@section('content')
@if(session('failed'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
Swal.fire(
  'Gagal Login',
  '{{ session('failed') }}',
  'error'
)
</script>
@endif
<div id="auth">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 mx-auto">
                <div class="card pt-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <img src="{{ asset('assets/images/favicon.svg') }}" height="48" class='mb-4'>
                            <h3>Login Admin</h3>
                        </div>
                        <form action="{{ route('login.process') }}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" class="form-control"
                                            name="username">
                                    </div>
                                    <p class="text-danger">@error('username'){{ $message }}@enderror</p>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control"
                                            name="password">
                                    </div>
                                    <p class="text-danger">@error('password'){{ $message }}@enderror</p>
                                </div>
                            </diV>
                            <div class="clearfix mt-4">
                                <center>
                                    <button class="btn btn-primary">Login</button>
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