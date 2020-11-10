@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body center" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="uk-container-center uk-margin-top" align="center">
                    {!! Form::open(['url' => route('checkid'), 'method' => 'post', 'class'=>'formhorizontal'])!!}
                    @include('menu._checkdaftar')
                    {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
