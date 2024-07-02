@extends('index')
@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="card" style="width: 25rem; margin: auto;">
        <div class="card-body">
            <p class="text-center fs-3 fw-bold">LOGIN</p>
            <div>
                <form method="POST" action="{{ route('login') }}" class="">
                    @csrf
                    <div class="mb-3 input-group">
                        <span class="input-group-text"><i class="bi bi-people"></i></span>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Username" />
                    </div>
                    <div class="mb-3 input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" name="password" id="password"  class="form-control" placeholder="Password" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
                <div class="d-flex justify-content-center gap-1 mt-3">
                    <div>
                        <span>Belum Punya Akun?</span>
                    </div>
                    <div>
                        <a class="nav-link p-0 text-primary" href="{{url('/register')}}">Bikin Akun Yuk!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection