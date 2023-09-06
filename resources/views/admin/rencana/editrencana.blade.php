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
                            <h1>Ubah Data</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="{{ route('dashboard') }}">Dashboard</a></li>
                                {{-- <li class="breadcrumb-item "><a
                                        href="{{ route('datarencana') }}">Table Rencana</a></li> --}}
                                <li class="breadcrumb-item ">Ubah Data</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"></h3>

                                {{-- <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                        </div> --}}
                            </div>
                            <div class="card-body">
                                <form action="{{ url('updaterencana',$ren->id) }}" method="post" class="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="namaKegiatan">Nama Kegiatan</label>
                                        <input type="text" id="namaKegiatan" name="nama_rencana" class="form-control" value="{{ $ren->nama_rencana }}" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="kategoriKegiatan">Kategori Kegiatan</label>
                                        <input type="text" id="kategoriKegiatan" name="kategori_rencana" class="form-control" value="{{ $ren->kategori_rencana }}" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="tglKegiatan">Tanggal Kegiatan</label>
                                        <input type="date" id="tglKegiatan" name="tanggal_rencana" class="form-control" value="{{ $ren->tanggal_rencana }}" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="isiKegiatan">isi</label>
                                        <textarea id="isiKegiatan" name="isi_rencana" class="form-control" rows="4" required>{{ $ren->isi_rencana }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">--Terproses--</label>
                                        <select class="form-control mb-3" id="prosesKegiatan" name="status">
                                            <option value="0" {{ $ren->status == '0' ? 'selected' : '' }}>Tidak</option>
                                            <option value="1" {{ $ren->status == '1' ? 'selected' : '' }}>Ya</option>
                                        </select>
                                    <div>
                                    <div>
                                        <input type="submit" value="Ubah" class="btn btn-primary float-right">
                                        <a href="{{ route('datarencana') }}" class="btn btn-secondary">Cancel</a>
                                        {{-- <button type="reset" class="btn btn-danger">Reset</button> --}}


                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                {{-- <div class="row">
                  <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create new Project" class="btn btn-success float-right">
                  </div>
                </div> --}}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('admin.layout.footer')

        {{-- </div> --}}
        <!-- ./wrapper -->

        @include('admin.table.script')
</body>

</html>
