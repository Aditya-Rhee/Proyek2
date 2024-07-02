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
                    Layanan
                    </a>
                    <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('antarjemput') }}">Laundry Antar Jemput</a></li>
                        <li><a class="dropdown-item" href="{{ route('daftarharga') }}">Daftar Harga</a></li>
                    </ul>
                    {{-- <a class="nav-link" href="{{ route('service') }}">Layanan</a> --}}
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('login')}}">Log in</a></li>
                        <li><a class="dropdown-item" href="#">Register</a></li>
                        {{-- <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">m</a></li> --}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
