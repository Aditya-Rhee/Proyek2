@extends('index')

@section('style')
<style>
    body {
        font-family: 'Libre Franklin', sans-serif;
    }
    .header-text {
        font-weight: bold;
        text-align: center;
        margin-top: 40px;
    }
    .header-divider {
        width: 35%;
        height: 1px;
        background-color: black;
        margin: 20px auto;
    }
    .package-box {
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        background-color: #fff;
    }
    .package-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .package-content {
        font-size: 16px;
    }
    .package-content ul {
        padding-left: 20px;
    }
    .package-content li {
        margin-bottom: 5px;
    }
</style>
@endsection

@section('content')
    <div class="container">
        <div class="header-text">
            <h4>DAFTAR PAKET UNTUK ANDA !</h4>
        </div>
        <div class="header-divider"></div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="package-box">
                    <div class="package-title">Paket Satuan</div>
                    <div class="package-content">
                        <p>Paket Satuan adalah layanan laundry per item yang cocok untuk pakaian atau barang-barang yang memerlukan perawatan khusus. Berikut adalah daftar harga untuk setiap item:</p>
                        <ul>
                            <li>Kemeja: Rp 8,000</li>
                            <li>Celana: Rp 10,000</li>
                            <li>Jaket: Rp 15,000</li>
                            <li>Gaun: Rp 20,000</li>
                            <li>Selimut: Rp 25,000</li>
                            <li>Sarung: Rp 5,000</li>
                            <li>Bed Cover: Rp 30,000</li>
                            <li>Sepatu: Rp 15,000</li>
                            <li>Handuk: Rp 7,000</li>
                            <li>Gorden: Rp 20,000</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="package-box">
                    <div class="package-title">Paket Kiloan</div>
                    <div class="package-content">
                        <p>Paket Kiloan adalah layanan laundry dengan sistem per kilogram yang lebih ekonomis untuk kebutuhan sehari-hari. Berikut adalah daftar harga untuk setiap kilogram:</p>
                        <ul>
                            <li>1 kg: Rp 10,000</li>
                            <li>2 kg: Rp 20,000</li>
                            <li>3 kg: Rp 30,000</li>
                            <li>4 kg: Rp 40,000</li>
                            <li>5 kg: Rp 50,000</li>
                            <li>6 kg: Rp 60,000</li>
                            <li>7 kg: Rp 70,000</li>
                            <li>8 kg: Rp 80,000</li>
                            <li>9 kg: Rp 90,000</li>
                            <li>10 kg: Rp 100,000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
