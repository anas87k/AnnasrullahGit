@extends('layouts.app')
@section('content')
<div class="header-wrapper md-padding bg-grey">
        <div class="col-md-10 container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Register</li>
            </ul>
        </div>
    </div>
<!-- /header wrapper -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('PENDAFTARAN AKUN SANTRI BARU PONDOK PESANTREN ANNASRULLAH 2019') }}</div>

                <div class="panel-body">
                        <ul>
                            <li>Daftarkan Akun Anda dengan masukan Nama, NIK, dan email.</li>
                            <li>Pastikan email yang Anda masukan masih aktif dan dapat Anda akses, karena username dan password akan dikirimkan ke email Anda.</li>
                            <li>Anda hanya dapat mempunyai satu akun dengan NIK dan email yang sama</li>
                            <li>Username dan password tersebut digunakan untuk login ke sistem untuk dapat melanjutkan proses berikutnya, yaitu input data diri, dan Pembayaran. </li>
                        </ul>
                        <hr>
                        <div class="container center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_lengkap" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-4">
                                <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}"  autofocus>

                                @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Induk Kependudukan (NIK)') }}</label>

                            <div class="col-md-4">
                                <input minlength="16" maxlength="16" id="nik" type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik">

                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button name="register" class="btn btn-success" style="background-color: rgb(46, 184, 115);" onclick="return clicked();" type="submit">
                                    {{ __('Register') }}
                                </button>
                                <a class="btn btn-danger" href="/">{{ __('Batal') }}</a>
                            </div>
                        </div>
                    </form>
                    </div>
                    <script type="text/javascript">
                        function clicked() {
                            var name = document.getElementById('nama_lengkap').value;
                            var nik = document.getElementById('nik').value;
                            var email = document.getElementById('email').value;
                            return confirm('Nama : '+name+' \nNIK : '+nik+'\nEmail : '+email+'\n\nPastikan email yang Anda masukan masih aktif dan dapat Anda akses, sebab notifikasi Akun (aktifasi akun, username dan password) akan dikirimkan ke email Anda. \n\nApakah Anda yakin data yang Anda isikan sudah benar?');
                            }
                            </script>
                            <hr>
                            <div align="left">
                                <i class="fa fa-check-square-o"></i> Saya telah mempunyai Akun pendaftaran, <a class="btn btn-info" href={{ route('login') }}> Login </a> sekarang.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
