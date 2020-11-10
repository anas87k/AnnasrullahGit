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
    <div class="card mb-3">
                    <div class="card-header">
                        <div class="panel-title">
                            <span class="btn-group">
                                <a style="background-color:rgb(46, 184, 115); width: 140px" class="btn btn-primary fa fa-plus" href="{{ route('syahriyahshow') }}">Tambah Data</a>
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
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection

