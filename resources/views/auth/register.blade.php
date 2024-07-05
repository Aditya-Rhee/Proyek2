@extends('index')
@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="card" style="width: 25rem; margin: auto;">
        <div class="card-body">
            <p class="text-center fs-3 fw-bold">BUAT AKUN</p>
            <div>
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Nomor Ponsel Atau Buat Username" required />
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Buat Password" required />
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required />
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email" required />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary w-100 mb-2">Buat Akun</button>
                    </div>
                    <div>
                        <a href="{{ route('login') }}" class="btn btn-secondary w-100">Kembali ke Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
