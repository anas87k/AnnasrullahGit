<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="form-group">
            <div class="col-sm-8">
                {!! Form::text('id_santri', null, ['class'=>'form-control','placeholder'=>'ID Santri']) !!}
                {!! $errors->first('id_santri', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group">
           <div class="col-sm-8">
                {!! Form::text('id_syahriyah', null, ['class'=>'form-control','placeholder'=>'ID Syahriyah']) !!}
                {!! $errors->first('id_syahriyah', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        
        <div class="form-group">
           <div class="col-sm-8">
                {!! Form::text('bulan', null, ['class'=>'form-control','placeholder'=>'Bulan']) !!}
                {!! $errors->first('bulan', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group">
           <div class="col-sm-8">
                {!! Form::text('jumlah', null, ['class'=>'form-control','placeholder'=>'Jumlah']) !!}
                {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <br>
</div>

 <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}    
            <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
        </div>
    </div>
