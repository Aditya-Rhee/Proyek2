@extends('index')
@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="card" style="width: 25rem; margin: auto;">
        <div class="card-body">
            <p class="text-center fs-3 fw-bold">BUAT AKUN</p>
            <div>
                <form action="" class="">
                    <div class="mb-3">
                        <Input type="text" class="form-control" placeholder="Nomor Ponsel Atau Buat Username" />
                    </div>
                    <div class="mb-3">
                        <Input type="password" class="form-control" placeholder="Buat Password" />
                    </div>
                    <div class="mb-3">
                        <Input type="text" class="form-control" placeholder="Konfirmasi Password" />
                    </div>
                    <div class="mb-3">
                        <Input type="text" class="form-control" placeholder="Masukan Email" />
                    </div>
                    <div>
                        <button class="btn btn-primary w-100">Buat Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection