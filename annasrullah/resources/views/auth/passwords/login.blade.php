@extends('layouts.app')
@section('content')
<div class="header-wrapper md-padding bg-grey">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Login</li>
            </ul>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('LOGIN AKUN SANTRI BARU TAHUN 2019') }}</div>

                <div class="panel-body center">
                        <div style="color:#000;" class="uk-container-center uk-margin-top">
                    </div>
Silakan login menggunakan akun (<i>username dan password</i>) yang telah dikirimkan ke email Anda untuk dapat melanjutkan proses berikutnya, yaitu pengisian data diri, pencetakan bukti registrasi, dan pembayaran.

                <hr>
                <form action="{{ route('login') }}" method="post" class="AVAST_PAM_loginform">
                        <table align="center" width="70%">
                          <tbody><tr>
                            <td>
                              <label for="username">{{ __('Username') }}</label>
                              <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1 bg-grey">
                              <i class="fa fa-user fa-fw"></i>
                              </span>
                                <input type="text" name="username" class="form-control" aria-describedby="basic-addon1">
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td height="10"></td>
                          </tr>
                          <tr>
                            <td>
                            <label for="password">{{ __('Password') }}</label>
                              <div class="input-group">
                              <span class="input-group-addon bg-grey" id="basic-addon2"> <i class="fa fa-lock fa-fw"></i> </span>
                              <input type="password" name="password" class="form-control" aria-describedby="basic-addon2">
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td height="10"></td>
                          </tr>
                          <tr>
                            <td align="right">
                              <input type="submit" style="background-color: rgb(46, 184, 115);" name="login" value={{ __('Login') }} class="btn btn-success">
                              <a href="/" class="btn btn-danger">{{ __('Batal') }}</a>
                          </td>
                          </tr>
                        </tbody></table>
                        </form>
                        <hr>
                        <a style="background-color: rgb(46, 184, 115);" href="{{ route('register') }}" class="btn btn-outline btn-success"> <i class="fa fa-registered"></i>{{ __('Registrasi') }}</a>
                        <a onclick="alert('Silahkan kirim email ke admin@sippannasrullah.dx.am dengan mencantumkan Nama, NIK, dan Email Anda sesuai dengan data Akun yang Anda daftarkan.')" class="btn btn-outline btn-warning"> <i class="fa fa-question-circle"></i> Lupa Password </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
