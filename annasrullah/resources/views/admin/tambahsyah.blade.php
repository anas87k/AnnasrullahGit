@extends('head')
@extends('admin.headersyah')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Syahriyah</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Syahriyah</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    
    <section class="content">
        <div class="container-fluid">
                    {!! Form::open(['url' => route('syahriyahadd'), 'method' => 'post', 'class'=>'formhorizontal'])!!}
                    @include('admin._tambah')
                    {!! Form::close()!!}
        </div>
    </section>
</div>
@endsection

