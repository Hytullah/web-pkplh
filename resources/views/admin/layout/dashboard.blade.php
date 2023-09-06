<!DOCTYPE html>
<html lang="en">

@include('admin.layout.header')

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('Admin/dist')}}/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

        @include('admin.layout.navbar')

        @include('admin.layout.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6 ml-4">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $totalRen }}</h3>

                                    <p>Rencana</p>
                                </div>
                                <div class="icon">
                                    {{-- <i class="ion ion-bag"></i> --}}
                                    <i class="far fa-calendar-day nav-icon"></i>
                                </div>
                                <a href="{{ url('datarencana') }}" class="small-box-footer">
                                    <i class="fas fa-eye"></i>
                                    Lihat Data </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $totalKeg }}<sup style="font-size: 20px"></sup></h3>

                                    <p>Kegiatan</p>
                                </div>
                                <div class="icon">
                                    {{-- <i class="ion ion-stats-bars"></i> --}}
                                    <i class="far fa-list-ul nav-icon"></i>
                                </div>
                                <a href="{{ url('datakegiatan') }}" class="small-box-footer">
                                    <i class="fas fa-eye"></i>
                                    Lihat Data </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ $totalP }}</h3>

                                    <p>Pengaduan</p>
                                </div>
                                <div class="icon">
                                    <i class="far fa-envelope nav-icon"></i>
                                </div>
                                <a href="{{ url('datapengaduan') }}" class="small-box-footer">
                                    <i class="fas fa-eye"></i>
                                    Lihat Data </a>
                            </div>
                        </div>
                        <!-- ./col -->

                    </div>
                    <!-- /.row -->

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('admin.layout.footer')

    </div>

    <!-- ./wrapper -->

    @include('admin.layout.script')
</body>

</html>
