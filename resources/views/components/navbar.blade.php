<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-white fs-3" href="{{ route('index') }}">LaundryEn</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Kami
                    </a>
                    <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('antarjemput') }}">Laundry Antar Jemput</a></li>
                        <li><a class="dropdown-item" href="{{ route('daftarharga') }}">Pilih Paket</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
                
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @endguest
                
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            @if(Auth::user()->image)
                                <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="profile image" style="width: 30px; height: 30px; border-radius: 50%;">
                            @else
                                <i class="bi bi-person-circle"></i>
                            @endif
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->role->role_name === 'admin')
                                <li><a class="dropdown-item" href="{{ route('admindashboard') }}">Dashboard</a></li>
                            @elseif(Auth::user()->role->role_name === 'pelanggan_users')
                                <li><a class="dropdown-item" href="{{ route('profilepelanggan') }}">Profile</a></li>
                            @endif
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
