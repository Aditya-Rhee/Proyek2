@extends('index')
@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="card" style="width: 25rem; margin: auto;">
        <div class="card-body">
            <p class="text-center fs-3 fw-bold">LOGIN</p>
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div>
                <form action="{{ route('loginprosess') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email" required autocomplete="off"/>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Masukan Password" required />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary w-100 mb-2">Login</button>
                    </div>
                    <div>
                        <a href="{{ route('register') }}" class="btn btn-secondary w-100">Buat Akun</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
