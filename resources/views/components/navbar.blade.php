<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
        <li><a class="nav-link scrollto" href="{{ request()->is('/') ? '#testimonials' : route('index') . '#testimonials' }}">Visi Misi</a>
        </li>
        <li class="dropdown"><a
                class="nav-link scrollto {{ request()->is('kegiatan', 'rencana', 'pengaduan') ? 'active' : '' }}"
                href="#"><span>Layanan Publik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                {{-- <li><a href="#">Drop Down 1</a></li> --}}
                <li class="dropdown"><a href="#"><span>Layanan Informasi</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="{{ route('landing.kegiatan') }}">Data Kegiatan</a></li>
                        <li><a href="{{ route('landing.rencana') }}">Data Kegiatan yang direncanakan</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('landing.pengaduan') }}">Layanan Pengaduan</a></li>
               
            </ul>
        </li>
        <li><a class="nav-link scrollto" href="{{ request()->is('/') ? '#contact' : route('index') . '#contact' }}">Contact</a>
    
        <li><a class="nav-link scrollto {{ request()->is('admin.formlogin') ? 'active' : '' }}" href="{{ route('admin.formlogin') }}"><i class="bi bi-people"></i></a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
