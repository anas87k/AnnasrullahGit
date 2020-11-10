@extends('layouts.app')
@section('content')
<div class="header-wrapper md-padding bg-grey">
        <div class="col-md-10 container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Login</li>
            </ul>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('LOGIN AKUN SANTRI BARU TAHUN 2019') }}</div>

                <div class="panel-body center">
                        <div style="color:#000;" class="uk-container-center uk-margin-top">
                    </div>
Silakan login menggunakan akun (<i>username dan password</i>) yang telah dikirimkan ke email Anda untuk dapat melanjutkan proses berikutnya, yaitu pengisian data diri, dan pembayaran.

                <hr>
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                        <hr>
                        <a style="background-color: rgb(46, 184, 115);" href="{{ route('register') }}" class="btn btn-outline btn-success"> <i class="fa fa-registered"></i>{{ __('Registrasi') }}</a>
                        <a onclick="alert('Silahkan kirim email ke khoirul.anas.id@gmail.com dengan mencantumkan Nama, NIK, dan Email Anda sesuai dengan data Akun yang Anda daftarkan.')" class="btn btn-outline btn-warning"> <i class="fa fa-question-circle"></i> Lupa Password </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
