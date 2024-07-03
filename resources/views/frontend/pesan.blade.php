@extends('index')

@section('content')
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="box custom-box d-flex justify-content-between align-items-center">
                <span class="text-left">
                    <h4 class="text-bold">PAKET <br> SETRIKA</h4>
                    <h6 class="text-merah">SETRIKA DENGAN <br> PELICIN PAKAIAN</h6>
                    <h6 class="text-biru">Rp 4.000/KG</h6>
                    <button class="btn btn-primary" style="width: 130px" >Pesan</button>
                </span>
                <div style="max-width: 120px; height: 120px;">
                    <img src="{{ asset('images/box1.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box custom-box d-flex justify-content-between align-items-center">
                <span class="text-left">
                    <h4 class="text-bold">PAKET <br> CUCI KERING</h4>
                    <h6 class="text-merah">CUCI DAN JEMUR <br> SAMPAI KERING</h6>
                    <h6 class="text-biru">Rp 4.000/KG</h6>
                    <button class="btn btn-primary" style="width: 130px" >Pesan</button>
                </span>
                <div style="max-width: 120px; height: 120px;">
                    <img src="{{ asset('images/box2.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box custom-box d-flex justify-content-between align-items-center">
                <span class="text-left">
                    <h4 class="text-bold">PAKET <br> CUCI & SETRIKA</h4>
                    <h6 class="text-merah">PAKET KOMPLIT <br> CUCI DAN SETRIKA</h6>
                    <h6 class="text-biru">Rp 6.000/KG</h6>
                    <button class="btn btn-primary" style="width: 130px" >Pesan</button>
                </span>
                <div style="max-width: 120px; height: 120px;">
                    <img src="{{ asset('images/box3.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="box custom-box2 d-flex justify-content-between align-items-center">
                <span class="text-left">
                    <h4 class="text-bold">LIHAT ANTRIAN</h4>
                    <h6 class="text-merah">KAMU BISA LIHAT UPDATE TERKINI <br> TERKAIT ANTRIANNYA, MEMANTAU <br> KAPAN SELESAI BAJU KAMU DICUCI</h6>
                    <br>
                    <a class="text-biru text-bold" href="{{ route('paketlainnya') }}"> DETAIL PAKET LAINNYA >> </a>
                </span>
                <div style="max-width: 120px; height: 120px;">
                    <img src="{{ asset('images/box4.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box custom-box3 d-flex justify-content-between align-items-center">
                <span class="text-left">
                    <h4 class="text-bold">PAKET LAINNYA</h4>
                    <h6 class="text-putih">KAMI JUGA MENYEDIAKAN <br> JASA CUCI LAINNYA SEPERTI <br> SEPATU, KARPET DLL</h6>
                    <br>
                    <a class="text-putih text-bold" href="{{ route('paketlainnya') }}"> DETAIL PAKET LAINNYA >> </a>
                </span>
                <div style="max-width: 120px; height: 120px;">
                    <img src="{{ asset('images/box5.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
