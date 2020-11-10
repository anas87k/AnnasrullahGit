<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="form-group">
        <div class="col-sm-8">
            {!! Form::hidden('perihal','Keluar Area', ['class'=>'form-control']) !!}
            {!! $errors->first('perihal', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    <div class="form-group">
        <strong>
        {!! Form::label('title', 'Tanggal dan Waktu Ijin', ['class'=>'col-sm-2 control-label']) !!}
        </strong>
       <div class="col-md-8">
        <input id="tglijin" type="date" class="form-control @error('tglijin') is-invalid @enderror" name="tglijin" required autocomplete="tglijin" autofocus>
            @error('tglijin')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8">
        <input id="jamijin" type="time" class="form-control @error('jamijin') is-invalid @enderror" name="jamijin" required autocomplete="jamijin" autofocus>
            @error('jamijin')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <strong>
        {!! Form::label('title', 'Tanggal dan Waktu Kembali', ['class'=>'col-sm-4 control-label']) !!}
        </strong>
        <div class="col-md-8">
        <input id="tglkmb" type="date" class="form-control @error('tglkmb') is-invalid @enderror" name="tglkmb" required autocomplete="tglkmb" autofocus>
            @error('tglkmb')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8">
        <input id="jamkmb" type="time" class="form-control @error('jamkmb') is-invalid @enderror" name="jamkmb" required autocomplete="jamkmb" autofocus>
            @error('jamkmb')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <br>
    <div class="form-group">
        <strong>
        {!! Form::label('title', 'Alasan', ['class'=>'col-sm-2 control-label']) !!}
        </strong>
        <div class="col-md-8">
        <input id="alasan" type="textarea" class="form-control @error('alasan') is-invalid @enderror" placeholder="Alasan" name="alasan"  required autocomplete="alasan" autofocus>
            @error('alasan')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
</div>

{!! Form::hidden('author', Auth::user()->name) !!}
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
        <a href="{{ url()->previous() }}" class="btn btn-warning">Batal</a>
    </div>
</div>
