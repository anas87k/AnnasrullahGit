@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item" ><a href="{{ url('/home') }}">Dashboard</a></li>
                <li class="breadcrumb-item" ><a href="{{ url('/member/syahriyah') }}">Syahriyah</a></li>
                <li class="breadcrumb-item active" >Pembayaran Syahriyah</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Data Pembayaran Syahriyah</div>
                <div class="panel-body center">
                    {!! Form::open(['url' => route('showbayar'), 'method' => 'post', 'class'=>'formhorizontal'])!!}
                    @include('menu._syahriyah')
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

