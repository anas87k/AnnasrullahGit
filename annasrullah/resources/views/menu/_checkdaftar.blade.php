{!! Form::hidden('id_santri',Auth::user()->id_santri) !!}
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
        <button name="lengkapi" class="btn btn-primary" style="background-color: rgb(46, 184, 115);" type="submit">
            {{ __('Lengkapi Data') }}
        </button>

        <a href="{{ route('checkbayar') }}" style="color: #fff" class="btn btn-warning">{{ __('Bayar') }}</a>
    </div>
</div>