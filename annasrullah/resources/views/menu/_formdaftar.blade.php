<div class="form-group">
    <strong>
        {!! Form::label('title', 'Data Diri', ['class'=>'col-sm-2 control-label']) !!}
    </strong>
    <div class="col-md-8">
        <input id="id_santri" class="form-control @error('id_santri') is-invalid @enderror" placeholder="ID Santri" name="id_santri" value="{{ 'PPA'.date('m').Auth::user()->id }}" readonly=true required autocomplete="id_santri" autofocus>
            @error('id_santri')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
</div>

<div class="form-group">
    <div class="col-md-8">
        <input id="nama_lengkap" class="form-control @error('id_santri') is-invalid @enderror" placeholder="Nama Lengkap" name="nama_lengkap" value="{{  Auth::user()->nama_lengkap }}" readonly=true required autocomplete="nama_lengkap" autofocus>
            @error('nama_lengkap')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
</div>

    <div class="form-group">
        {!! Form::label('jk', 'Jenis Kelamin', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-8">
            <div class="radio">
                <label>
                    {!! Form::radio('jk', '1', true) !!} Laki-Laki
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio('jk', '2') !!} Perempuan
                </label>
            </div>
        </div>
    </div>

<div class="form-group">
    <div class="col-md-8">
        <input id="tempat" class="form-control @error('tempat') is-invalid @enderror" placeholder="Tempat Lahir" name="tempat"  required autocomplete="tempat" autofocus>
            @error('tempat')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
</div>


<div class="form-group">
    <div class="col-md-8">
        <input id="tgl" type="date" class="form-control @error('tgl') is-invalid @enderror" name="tgl" required autocomplete="tgl" autofocus>
            @error('tgl')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
</div>

    <div class="form-group">
       <div class="col-sm-8">
           <input id="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" placeholder="Pendidikan Terakhir" name="pendidikan"  required autocomplete="pendidikan" autofocus>
            @error('pendidikan')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-8">
           <input id="nama_pendidikan" class="form-control @error('nama_pendidikan') is-invalid @enderror" placeholder="Nama Pendidikan" name="nama_pendidikan"  required autocomplete="nama_pendidikan" autofocus>
            @error('nama_pendidikan')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <strong>
        {!! Form::label('labelortu', 'Data Orang Tua', ['class'=>'col-sm-2 control-label']) !!}
        </strong>
        <div class="col-sm-8">
           <input id="nama_ortu" class="form-control @error('nama_ortu') is-invalid @enderror" placeholder="Nama Orang Tua" name="nama_ortu"  required autocomplete="nama_ortu" autofocus>
            @error('nama_ortu')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-8">
           <input id="pkrjn_ortu" class="form-control @error('pkrjn_ortu') is-invalid @enderror" placeholder="Pekerjaan Orang Tua" name="pkrjn_ortu"  required autocomplete="pkrjn_ortu" autofocus>
            @error('pkrjn_ortu')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-8">
           <input id="alamat_ortu" class="form-control @error('alamat_ortu') is-invalid @enderror" placeholder="Alamat Orang Tua" name="alamat_ortu"  required autocomplete="alamat_ortu" autofocus>
            @error('alamat_ortu')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    
    <div class="form-group">
       <div class="col-sm-8">
           <input id="telp_ortu" type="number" class="form-control @error('telp_ortu') is-invalid @enderror" placeholder="Telepon Orang Tua" name="telp_ortu"  required autocomplete="telp_ortu" autofocus>
            @error('telp_ortu')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <strong>
        {!! Form::label('labelwali', 'Data Wali', ['class'=>'col-sm control-label']) !!}
        </strong>
        {!! Form::label('labelwali', '*Jika tidak ada wali, diisi data orangtua', ['class'=>'col-sm-8 control-label']) !!}
        <div class="col-sm-8">
           <input id="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" placeholder="Nama Wali" name="nama_wali"  required autocomplete="nama_wali" autofocus>
            @error('nama_wali')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-8">
           <input id="pkrjn_wali" class="form-control @error('pkrjn_wali') is-invalid @enderror" placeholder="Pekerjaan Wali" name="pkrjn_wali"  required autocomplete="pkrjn_wali" autofocus>
            @error('pkrjn_wali')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-8">
           <input id="alamat_wali" class="form-control @error('alamat_wali') is-invalid @enderror" placeholder="Alamat Wali" name="alamat_wali"  required autocomplete="alamat_wali" autofocus>
            @error('alamat_wali')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    
    <div class="form-group">
       <div class="col-sm-8">
           <input id="telp_wali" type="number" class="form-control @error('telp_wali') is-invalid @enderror" placeholder="Telepon Wali" name="telp_wali"  required autocomplete="telp_wali" autofocus>
            @error('telp_wali')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

{!! Form::hidden('author', Auth::user()->name) !!}
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        <button name="Simpan" class="btn btn-primary" style="background-color: rgb(46, 184, 115);" onclick="return clicked();" type="submit">
            {{ __('Simpan') }}
        </button>

        <a href="{{ url()->previous() }}" class="btn btn-warning">Batal</a>
    </div>
</div>

<script type="text/javascript">
    function clicked() {
        var name = document.getElementById('nama_lengkap').value;
        var nik = document.getElementById('nik').value;
        var email = document.getElementById('email').value;
        return confirm('Nama : '+name+' \nNIK : '+nik+'\nEmail : '+email+'\n\nPastikan email yang Anda masukan masih aktif dan dapat Anda akses, sebab notifikasi Akun (aktifasi akun, username dan password) akan dikirimkan ke email Anda. \n\nApakah Anda yakin data yang Anda isikan sudah benar?');
        }
</script>
