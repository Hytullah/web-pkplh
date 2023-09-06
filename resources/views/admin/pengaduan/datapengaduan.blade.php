<!DOCTYPE html>
<html lang="en">

@include('admin.table.header')

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layout.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.layout.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Tabel Pengaduan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Tabel Pengaduan</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                {{-- <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                    </div> --}}
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class=""
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                            <form action="{{ route('datapengaduan') }}" method="get">
                                                @csrf
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-light btn-flat btn-sm dropdown-toggle dropdown-icon"
                                                        data-toggle="dropdown">
                                                        <i class="fas fa-filter nav-icon"></i>
                                                        <span class="sr-only">Bagian</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <button
                                                            class="dropdown-item {{ $bagian === '1' ? 'active' : '' }}"
                                                            type="submit" name="bagian" value="1">
                                                            Kepala Bidang Perumahan
                                                        </button>
                                                        <button
                                                            class="dropdown-item {{ $bagian === '2' ? 'active' : '' }}"
                                                            type="submit" name="bagian" value="2">
                                                            Kepala Bidang Kawasan Pemukiman
                                                        </button>
                                                        <button
                                                            class="dropdown-item {{ $bagian === '3' ? 'active' : '' }}"
                                                            type="submit" name="bagian" value="3">
                                                            Kepala Bidang Kelembagaan Lingkungan Hidup
                                                        </button>
                                                        <button
                                                            class="dropdown-item {{ $bagian === '4' ? 'active' : '' }}"
                                                            type="submit" name="bagian" value="4">
                                                            Kepala Bidang Pengelolaan Lingkungan Hidup
                                                        </button>
                                                        <div class="dropdown-divider"></div>
                                                        <button class="dropdown-item" type="submit" name="bagian"
                                                            value="">
                                                            <i class="fas fa-eye mr-3"></i> Lihat Semua
                                                        </button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div class=""
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                            @if ($dtPengaduan->isEmpty())
                                                <a href="{{ route('pengaduanpdf') }}"
                                                    class="btn btn-outline-danger disabled btn-flat mb-2">
                                                    <i class="fas fa-download nav-icon"></i>
                                                    PDF
                                                </a>
                                            @else
                                                <a href="{{ route('pengaduanpdf') }}"
                                                    class="btn btn-outline-danger btn-flat mb-2">
                                                    <i class="fas fa-download nav-icon"></i>
                                                    PDF
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <table id="" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Kontak</th>
                                                <th>Bagian</th>
                                                <th>Isi</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @if ($dtPengaduan->isEmpty())
                                            <tbody>
                                                <tr>
                                                    <td colspan="7" class="text-center">Tidak ada data</td>
                                                </tr>

                                            </tbody>
                                        @else
                                            @foreach ($dtPengaduan as $no => $item)
                                                @php
                                                    if ($item->bagian == '1') {
                                                        $val = 'Kepala Bidang Perumahan';
                                                    } elseif ($item->bagian == '2') {
                                                        $val = 'Kepala Bidang Kawasan Pemukiman';
                                                    } elseif ($item->bagian == '3') {
                                                        $val = 'Kepala Bidang Kelembagaan Lingkungan hidup';
                                                    } elseif ($item->bagian == '4') {
                                                        $val = 'Kepala Bidang Pengelolaan Lingkungan Hidup';
                                                    }
                                                @endphp
                                                <tbody>
                                                    <td>{{ $no + $dtPengaduan->firstItem() }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->kontak }}</td>
                                                    <td>{{ $val }}</td>
                                                    <td>{{ $item->isi }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
                                                    {{-- <td>{{ $item->status }}</td> --}}
                                                    <td>
                                                        <a href="#" class="deleteP" data-id="{{ $item->id }}"
                                                            data-no="{{ $no + $dtPengaduan->firstItem() }}">
                                                            {{-- <a href="{{ url('deletepengaduan', $item->id) }}"> --}}
                                                            <i class="fas fa-trash nav-icon"
                                                                style="color: rgb(182, 4, 4);"></i></a>
                                                    </td>
                                                </tbody>
                                            @endforeach
                                        @endif
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="float-right mr-2">
                    {{ $dtPengaduan->links() }}
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('admin.layout.footer')

        {{-- </div> --}}
        <!-- ./wrapper -->

        @include('admin.table.script')

        @include('sweetalert::alert')
</body>

</html>
