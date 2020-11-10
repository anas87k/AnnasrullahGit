@extends('head')
@extends('admin.headersyah')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
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
    
    @foreach($syahriyah as $s)
    <section class="content">
        <div class="container-fluid">
            {!! Form::model($syahriyah, ['url' => route('syahriyahs.update', $s->id_syahriyah),
            'method' => 'put', 'class'=>'form-horizontal']) !!}
             @include('admin._syahriyah')
             {!! Form::close() !!}
        </div>
    </section>
    @endforeach
</div>
@endsection

@section('scripts')
@endsection
