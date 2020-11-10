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
                {!! Form::text('nama_lengkap', $s->nama_lengkap, ['class'=>'form-control','placeholder'=>'ID Syahriyah','readonly'=>'true']) !!}
                {!! $errors->first('id_syahriyah', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group">
           <div class="col-sm-8">
                {!! Form::text('tglbayar', $s->tglbayar, ['class'=>'form-control','readonly'=>'true']) !!}
                {!! $errors->first('tglbayar', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="col-sm-8">
                <img src="{{url('thumbs')}}/{{$s->bukti}}" class="img-responsive imgthumbnail" alt="{{$s->bukti}}">
        </div>
</div>

<div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
        </div>
    </div>
