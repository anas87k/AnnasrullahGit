<div class="form-group">
    <strong>
        {!! Form::label('title', 'Data Diri', ['class'=>'col-sm-2 control-label']) !!}
    </strong>
    <div class="col-md-8">
        <input id="id_santri" class="form-control @error('id_santri') is-invalid @enderror" placeholder="ID Santri" name="id_santri" value="{{ $s->id_santri }}" readonly=true required autocomplete="id_santri" autofocus>
    </div>
</div>

<div class="form-group">
    <div class="col-md-8">
        <input id="nama_lengkap" class="form-control @error('id_santri') is-invalid @enderror" placeholder="Nama Lengkap" name="nama_lengkap" value="{{  $s->nama_lengkap }}" readonly=true required autocomplete="nama_lengkap" autofocus>
    </div>
</div>

    <div class="form-group">
        {!! Form::label('jk', 'Jenis Kelamin', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-8" readonly=true>
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
        <input value="{{  $s->tempat }}" id="tempat" class="form-control @error('tempat') is-invalid @enderror" placeholder="Tempat Lahir" name="tempat"  required autocomplete="tempat" readonly=true autofocus>
    </div>
</div>


<div class="form-group">
    <div class="col-md-8">
        <input value="{{  $s->tgl }}" id="tgl" type="date" class="form-control @error('tgl') is-invalid @enderror" name="tgl" required autocomplete="tgl" readonly=true autofocus>
    </div>
</div>

    <div class="form-group">
       <div class="col-sm-8">
           <input value="{{  $s->pendidikan }}" id="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" placeholder="Pendidikan Terakhir" name="pendidikan"  required autocomplete="pendidikan" readonly=true autofocus>
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-8">
           <input value="{{  $s->nama_pendidikan }}" id="nama_pendidikan" class="form-control @error('nama_pendidikan') is-invalid @enderror" placeholder="Nama Pendidikan" name="nama_pendidikan"  required autocomplete="nama_pendidikan" readonly=true autofocus>
        </div>
    </div>

    <div class="form-group">
        <strong>
        {!! Form::label('labelortu', 'Data Orang Tua', ['class'=>'col-sm-2 control-label']) !!}
        </strong>
        <div class="col-sm-8">
           <input value="{{  $s->nama_ortu }}" id="nama_ortu" class="form-control @error('nama_ortu') is-invalid @enderror" placeholder="Nama Orang Tua" name="nama_ortu"  required autocomplete="nama_ortu" readonly=true autofocus>
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-8">
           <input value="{{  $s->pkrjn_ortu }}" id="pkrjn_ortu" class="form-control @error('pkrjn_ortu') is-invalid @enderror" placeholder="Pekerjaan Orang Tua" name="pkrjn_ortu"  required autocomplete="pkrjn_ortu" readonly=true autofocus>
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-8">
           <input value="{{  $s->alamat_ortu }}" id="alamat_ortu" class="form-control @error('alamat_ortu') is-invalid @enderror" placeholder="Alamat Orang Tua" name="alamat_ortu"  required autocomplete="alamat_ortu" readonly=true autofocus>
        </div>
    </div>

    
    <div class="form-group">
       <div class="col-sm-8">
           <input value="{{  $s->telp_ortu }}" id="telp_ortu" type="text" class="form-control @error('telp_ortu') is-invalid @enderror" placeholder="Telepon Orang Tua" name="telp_ortu"  required autocomplete="telp_ortu" readonly=true autofocus>
        </div>
    </div>

    <div class="form-group">
        <strong>
        {!! Form::label('labelwali', 'Data Wali', ['class'=>'col-sm control-label']) !!}
        </strong>
        {!! Form::label('labelwali', '*Jika tidak ada wali, diisi data orangtua', ['class'=>'col-sm-8 control-label']) !!}
        <div class="col-sm-8">
           <input value="{{  $s->nama_wali }}" id="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" placeholder="Nama Wali" name="nama_wali"  required autocomplete="nama_wali" readonly=true autofocus>
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-8">
           <input value="{{  $s->pkrjn_wali }}" id="pkrjn_wali" class="form-control @error('pkrjn_wali') is-invalid @enderror" placeholder="Pekerjaan Wali" name="pkrjn_wali"  required autocomplete="pkrjn_wali" readonly=true autofocus>
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-8">
           <input value="{{  $s->alamat_wali }}" id="alamat_wali" class="form-control @error('alamat_wali') is-invalid @enderror" placeholder="Alamat Wali" name="alamat_wali"  required autocomplete="alamat_wali" readonly=true autofocus>
        </div>
    </div>

    
    <div class="form-group">
       <div class="col-sm-8">
           <input value="{{  $s->telp_wali }}" id="telp_wali" type="text" class="form-control @error('telp_wali') is-invalid @enderror" placeholder="Telepon Wali" name="telp_wali"  required autocomplete="telp_wali" readonly=true autofocus>
        </div>
    </div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
    </div>
</div>
