@extends('head')
@extends('admin.headerijin')
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
                <li class="breadcrumb-item">Perijinan</li>
                <li class="breadcrumb-item active">Data Ijin Keluar Area</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            {!! $html->table(['class'=>'table table-striped table-bordered']) !!}
        </div>
    </section>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection

