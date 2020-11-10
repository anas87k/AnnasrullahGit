@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item" ><a href="{{ url('/home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" >Syahriyah</li>
            </ul>
            <div class="card mb-3">
                    <div class="card-header">
                        <div class="panel-title">Data Syahriyah {{ Auth::user()->nama_lengkap }}
                            <span class="btn-group float-right">
                                <a style="background-color:rgb(46, 184, 115); width: 60px" class="btn btn-primary" href="{{ route('showbayar') }}">Bayar</a>

                            </span>
                        </div>
                    </div>
                    <div>
                        <br>
                            {!! $html->table(['class'=>'table table-striped table-bordered']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection

