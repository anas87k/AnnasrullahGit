<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="form-group">
        <strong>
        {!! Form::label('title', 'Data Diri', ['class'=>'col-sm-2 control-label']) !!}
        </strong>
        <div class="col-sm-8">
            {!! Form::text('id_santri', $s->id_santri, ['class'=>'form-control','placeholder'=>'ID Santri','readonly'=>'true']) !!}
            {!! $errors->first('id_santri', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-8">
            {!! Form::text('id_syahriyah', $s->id_syahriyah, ['class'=>'form-control','placeholder'=>'ID Syahriyah','readonly'=>'true']) !!}
            {!! $errors->first('id_syahriyah', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-8">
            {!! Form::text('bulan', $s->bulan, ['class'=>'form-control','placeholder'=>'Bulan','readonly'=>'true']) !!}
            {!! $errors->first('bulan', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-8">
            {!! Form::text('jumlah', $s->jumlah, ['class'=>'form-control','placeholder'=>'Jumlah','readonly'=>'true']) !!}
            {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-8">
            {!! Form::date('tgl', $s->tgl, ['class'=>'form-control','placeholder'=>'Tanggal','readonly'=>'true']) !!}
            {!! $errors->first('tgl', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-8">
            {!! Form::select('status', ['Belum Dibayar','Dalam Proses', 'Sudah Dibayar'], $s->status, ['class'=>'form-control']) !!}
            {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="col-sm-8">
            <img src="{{url('thumbs')}}/{{$s->bukti}}" class="img-responsive imgthumbnail" alt="{{$s->bukti}}">
    </div>
    <br>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
        <a href="{{ url()->previous() }}" class="btn btn-warning">Batal</a>
    </div>
</div>
