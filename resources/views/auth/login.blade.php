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
                        <input type="text" name="name" id="name" class="form-control" placeholder="Username" required />
                    </div>
                    <div class="mb-3 input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required />
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="mb-3 text-end">
                        <a href="#" class="text-decoration-none">Forgot Password?</a>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>

                <!-- Social Media Login Buttons -->
                <div class="text-center mt-4 mb-3">
                    <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                    <div class="col-6">
                        <a class="btn btn-block btn-social btn-facebook">
                            <span class="fab fa-facebook"></span> Facebook
                        </a>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-block btn-social btn-twitter">
                            <span class="fab fa-twitter"></span> Twitter
                        </a>
                    </div>
                </div>

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
