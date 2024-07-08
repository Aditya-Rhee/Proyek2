<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admindashboard') }}">LaundryEn</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">LE</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="{{ route('admindashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Manage Data</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Manage User</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.pengguna.index') }}"><i class="fas fa-user-shield"></i> Admin</a></li>
                    <li><a class="nav-link" href="{{ route('pelanggan.listdatapelanggan') }}"><i class="fas fa-user"></i> Pelanggan </a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="{{ route('pelanggan.datapemesananpelanggan') }}"><i class="fas fa-shopping-cart"></i> <span>Pemesanan Laundry</span></a></li>
            <li><a class="nav-link" href="{{ route('datatentang') }}"><i class="fas fa-info-circle"></i> <span>Tentang Laundry</span></a></li>
            {{-- <li><a class="nav-link" href="#"><i class="fas fa-concierge-bell"></i> <span>Layanan Laundry</span></a></li> --}}
            <li><a class="nav-link" href="{{ route('datakontak') }}"><i class="fas fa-address-book"></i> <span>Kontak Laundry</span></a></li>
            <li><a class="nav-link" href="{{ route('datasettings') }}"><i class="fas fa-cogs"></i> <span>General Settings</span></a></li>
            {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>News</span></a></li> --}}
            {{-- <li class="menu-header">Starter</li> --}}
            {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Application Config</span></a></li> --}}
        </ul>
    </aside>
</div>
