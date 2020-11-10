@extends('head')
@extends('admin.headerhome')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    @foreach($daftar as $s)
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Detail Data {{($s->nama_lengkap)}}</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            {!! Form::model($daftar, ['url' => route('home', $s->id_santri),
            'method' => 'put', 'class'=>'form-horizontal']) !!}
             @include('admin._detail')
             {!! Form::close() !!}
        </div>
    </section>
    @endforeach
</div>
@endsection

@section('scripts')
@endsection
