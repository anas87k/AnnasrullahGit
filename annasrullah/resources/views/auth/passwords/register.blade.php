@extends('layouts.app')
@section('content')
<div class="header-wrapper md-padding bg-grey">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Login</li>
            </ul>
        </div>
    </div>
<!-- /header wrapper -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('PENDAFTARAN AKUN SANTRI BARU PONDOK PESANTREN ANNASRULLAH 2019') }}</div>

                <div class="panel-body">
                        <ul>
                            <li>Daftarkan Akun Anda dengan masukan Nama, NIK, dan email.</li>
                            <li>Pastikan email yang Anda masukan masih aktif dan dapat Anda akses, karena username dan password akan dikirimkan ke email Anda.</li>
                            <li>Anda hanya dapat mempunyai satu akun dengan NIK dan email yang sama</li>
                            <li>Username dan password tersebut digunakan untuk login ke sistem untuk dapat melanjutkan proses berikutnya, yaitu input data diri, pencetakan bukti registrasi, dan Pembayaran. </li>
                        </ul>
                        <hr>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <table width="70%" align="center">
                                <tbody><tr>
                                    <td width="75" height="70">
                                        <label for="nama_lengkap">{{ __('Nama') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-user fa-fw"></i> </span>
                                            <input name="nama_lengkap" class="form-control" id="nama_lengkap" aria-describedby="basic-addon1" autofocus="" required="" onkeyup="this.value=this.value.toUpperCase()" onblur="this.value=this.value.toUpperCase()" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukan nama Anda terlebih dahulu.')" type="text">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="70">
                                        <label for="nik">{{ __('Nomor Induk Kependudukan (NIK)') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2"> <i class="fa fa-list fa-fw"></i> </span>
                                            <input name="nik" class="form-control" id="nik" aria-describedby="basic-addon2" required="" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Masukan NISN Anda terlebih dahulu.')" type="number" maxlength="16" minlength="16">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="70">
                                        <label for="email">{{ __('Email') }}</label>
                                        <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon3"> <i class="fa fa-at fa-fw"></i> </span>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td height="40" colspan="2"><input name="agree" required="" type="checkbox" value="1"> Data Nama, NIK, dan Email yang saya isikan di atas adalah benar.</td>
                            </tr>
                            <tr>
                                <td height="40" align="right">
                                    <input name="register" class="btn btn-success" style="background-color: rgb(46, 184, 115);" onclick="return clicked();" type="submit" value="Simpan">
                                    <a class="btn btn-danger" href="/">{{ __('Batal') }}</a>
                                </td>
                            </tr>
                        </tbody></table>
                    </form>
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
