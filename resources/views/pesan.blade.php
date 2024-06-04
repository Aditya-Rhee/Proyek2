@extends('index')

@section('content')
<div class="bg-blue">
    <div class="container mt-1">
        {{-- baris kesatu --}}
        <div class="row mt-1">
            <div class="mt-5 col-4 d-flex flex-column align-items-center">
                <div class="box montserrat"><h4>PAKET SETRIKA</h4>
                <div><h6 class="text-merah">SETRIKA DENGAN <br> PELICIN PAKAIAN</h6></div> <br>
                <h6 class="text-biru mb-1">RP.4.000/KG</h6>
                <button class="btn btn-primary">Pesan Sekarang</button>
                </div>
            </div>
            <div class="mt-5 col-4 d-flex flex-column align-items-center">
                <div class="box montserrat"><h4>Paket Cuci Kering</h4></div>
            </div>
            <div class="mt-5 col-4 d-flex flex-column align-items-center">
                <div class="box montserrat"><h4>Paket Cuci & Setrika</h4></div>
            </div>
        </div>

        {{-- baris kedua --}}
        <div class="row mt-5 mb-1">
            <div class="col-6 d-flex flex-column align-items-center">
                <div class="box"><h4>Lihat Antrian</h4></div>
            </div>
            <div class="col-6 d-flex flex-column align-items-center">
                <div class="box"><h4>Paket Lainnya</h4></div>
            </div>
        </div>
    </div>
</div>
@endsection
