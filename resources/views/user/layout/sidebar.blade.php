<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('user.dashboard') }}">LaundryEn</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">LE</a>
        </div>

        <ul class="sidebar-menu">
            {{-- <li class="menu-header">Dashboard</li> --}}
            {{-- <li><a class="nav-link" href="{{ route('dashboard') }}"><i class="far fa-square"></i> <span>Dashboard</span></a></li> --}}
            <li class="menu-header">Manage Data</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Manage User</span></a>
                <ul class="dropdown-menu">
                    <li ><a class="nav-link" href="#">Admin</a></li>
                    <li><a class="nav-link" href="index.html">Pengguna</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Property</span></a></li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>News</span></a></li>
            <li class="menu-header">Starter</li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Application Config</span></a></li>
        </ul>
    </aside>
</div>
