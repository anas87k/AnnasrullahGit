<div class="wrapper">
    <!-- Navbar -->
    <nav style="background-color:rgb(46, 184, 115);" class="main-header navbar navbar-expand border-bottom navbar-dark navbar-success">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('/admin/home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('/') }}" class="nav-link">{{ config('app.name', 'Annasrullah') }}</a>
                </li>
        </ul>
    </nav>
        <!-- /.navbar -->

    <aside style="color:rgb(46, 184, 115);" class="main-sidebar elevation-4 sidebar-dark-success">
        <!-- Brand Logo -->
        <a href="{{ url('/admin/daftar') }}" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">SIPP Annasrullah</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    Pendaftaran
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="{{ route('admin.home') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Data Pendaftaran') }}</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('bayar.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Data Pembayaran') }}</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview">
                <a href="{{ route('syahriyahs.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Syahriyah') }}
                    </p>
                </a>
                </li>
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        {{ __('Ijin') }}
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="{{ route('ijinpulang') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Ijin Pulang') }}</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('ijinkeluar') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Ijin Keluar') }}</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    <p class="text">
                        {{ __('Logout') }}</p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </a>
                </li>
                {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-warning"></i>
                    <p>Warning</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Informational</p>
                </a>
                </li> --}}
            </ul>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
        @yield('content')

</div>
