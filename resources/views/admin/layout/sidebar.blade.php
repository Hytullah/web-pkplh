<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route ('dashboard') }}" class="brand-link">
      <img src="{{asset('Admin/dist')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin PKPLH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('Admin/dist')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Axel</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route ('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
        </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link {{ request()->is('datarencana', 'datakegiatan', 'datapengaduan') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('datarencana') }}" class="nav-link {{ request()->is('datarencana') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rencana Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{  route('datakegiatan')  }}" class="nav-link {{ request()->is('datakegiatan') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Realisasi Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('datapengaduan') }}" class="nav-link {{ request()->is('datapengaduan') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengaduan</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>