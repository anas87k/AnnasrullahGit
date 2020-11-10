<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="form-group">
        <strong>
        {!! Form::label('title', 'Data Diri', ['class'=>'col-sm-2 control-label']) !!}
        </strong>
        <div class="col-sm-8">
            {!! Form::text('id_santri', Auth::user()->id_santri, ['class'=>'form-control','placeholder'=>'ID Santri','readonly'=>'true']) !!}
            {!! $errors->first('id_santri', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group">
       <div class="col-sm-8">
            {!! Form::text('nama_lengkap', Auth::user()->nama_lengkap, ['class'=>'form-control','placeholder'=>'Nama Lengkap','readonly'=>'true']) !!}
            {!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    <div class="form-group">
       <div class="col-sm-8">
            {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Email']) !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-8">
            {!! Form::date('tglbayar', null, ['class'=>'form-control','placeholder'=>'Tanggal']) !!}
            {!! $errors->first('tglbayar', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Image', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-8">
        <div class="input-group">
           {!! Form::text('bukti', null, ['class'=>'form-control', 'id'=>'bukti']) !!}
           <span class="input-group-btn">
               <a data-fancybox data-type="iframe" href="{{
                asset('js/filemanager/dialog.php?type=1&field_id=fupload&relative_url=1') }}" class="btn btn-success">Pilih Gambar
                </a>
            </span>
        </div>
        </div>
    </div>
{!! Form::hidden('author', Auth::user()->name) !!}
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
        <a href="{{ url()->previous() }}" class="btn btn-warning">Batal</a>
    </div>
</div>
