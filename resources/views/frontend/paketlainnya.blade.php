@extends('index')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Lainnya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #a9c9c8;
            font-family: Arial, sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #a9c9c8;
        }

        .header a {
            color: #000;
            text-decoration: none;
            margin: 0 10px;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .package-box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 80%;
        }

        .package-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .package-box .table {
            margin-bottom: 20px;
        }

        .btn-primary {
            display: block;
            margin: 0 auto;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            background-color: #000;
            color: #fff;
        }
    </style>
</head>

<body>
    <header class="header">
        <div>
            <img src="logo.png" alt="Laundryen Logo">
        </div>
        <nav>
            <a href="#">HALAMAN UTAMA</a>
            <a href="#">TENTANG</a>
            <a href="#">KONTAK</a>
        </nav>
        <div>
            <a href="#"><i class="bi bi-person"></i></a>
        </div>
    </header>

    <div class="content">
        <div class="package-box">
            <h2>PAKET LAINNYA</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4><img src="path/to/your/karpet.png" alt="Cuci Karpet Icon"> CUCI KARPET</h4>
                    <table class="table table-bordered">
                        <tr>
                            <td>KARPET RUMAH/METER2</td>
                            <td>RP. 25.000</td>
                        </tr>
                        <tr>
                            <td>KARPET MASJID/METER2</td>
                            <td>RP. 25.000</td>
                        </tr>
                        <tr>
                            <td>GORDEN TEBAL/METER2</td>
                            <td>RP. 25.000</td>
                        </tr>
                        <tr>
                            <td>GORDEN TIPIS/METER2</td>
                            <td>RP. 25.000</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4><img src="path/to/your/sepatu.png" alt="Sepatu Icon"> SEPATU</h4>
                    <table class="table table-bordered">
                        <tr>
                            <td>KARPET RUMAH/METER2</td>
                            <td>RP. 25.000</td>
                        </tr>
                        <tr>
                            <td>KARPET MASJID/METER2</td>
                            <td>RP. 25.000</td>
                        </tr>
                        <tr>
                            <td>GORDEN TEBAL/METER2</td>
                            <td>RP. 25.000</td>
                        </tr>
                        <tr>
                            <td>GORDEN TIPIS/METER2</td>
                            <td>RP. 25.000</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4><img src="baju.png" alt="Laundry Satuan Icon"> LAUNDRY SATUAN</h4>
                    <table class="table table-bordered">
                        <tr>
                            <td>KARPET RUMAH/METER2</td>
                            <td>RP. 25.000</
 @endsection