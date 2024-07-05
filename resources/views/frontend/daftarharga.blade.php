@extends('index')

@section('content')
    <div class="container">
        <div class="mt-4 et_pb_text_inner fw-bold text-center" style="text-bold font-family: 'Libre Franklin', sans-serif">
            <h2>DAFTAR HARGA PAKET LAUNDRYEN</h2>
        </div>
        <div class="mb-4" style="width:50%; flex-grow: 1; height: 1px; background-color: black; margin: 0 auto;"></div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h3 class="text-left">
                    <img src="{{ asset('images/cuci_karpet.png') }}" style="width: 60px; height: 60px; margin-right: 10px;">
                    Cuci Karpet
                </h3>
                <table class="table table-bordered" style="border: 1px solid black;">
                    <thead style="border: 1px solid black;">
                        <tr>
                            <th style="border: 1px solid black;">Jenis Karpet</th>
                            <th style="border: 1px solid black;">Harga per M²</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Karpet Wol</td>
                            <td style="border: 1px solid black;">Rp 100,000</td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Karpet Sintetis</td>
                            <td style="border: 1px solid black;">Rp 150,000</td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Karpet Nilon</td>
                            <td style="border: 1px solid black;">Rp 150,000</td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Karpet Polypropylene</td>
                            <td style="border: 1px solid black;">Rp 150,000</td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Karpet Sisal</td>
                            <td style="border: 1px solid black;">Rp 150,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h3 class="text-left">
                    <img src="{{ asset('images/sepatu2.png') }}" style="width: 60px; height: 60px; margin-right: 10px;">
                    Sepatu
                </h3>
                <table class="table table-bordered" style="border: 1px solid black;">
                    <thead style="border: 1px solid black;">
                        <tr>
                            <th style="border: 1px solid black;">Jenis Sepatu</th>
                            <th style="border: 1px solid black;">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Sepatu Canvas</td>
                            <td style="border: 1px solid black;">Rp 50,000</td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Sepatu Kulit Asli</td>
                            <td style="border: 1px solid black;">Rp 75,000</td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Sepatu Kulit Suede</td>
                            <td style="border: 1px solid black;">Rp 75,000</td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Sepatu Lak</td>
                            <td style="border: 1px solid black;">Rp 75,000</td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Sepatu Denim</td>
                            <td style="border: 1px solid black;">Rp 75,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h3 class="text-left">
                    <img src="{{ asset('images/furniture2.png') }}" style="width: 60px; height: 60px; margin-right: 10px;">
                    Laundry Furniture
                </h3>
                <table class="table table-bordered" style="border: 1px solid black;">
                    <thead style="border: 1px solid black;">
                        <tr>
                            <th style="border: 1px solid black;">Jenis Furniture</th>
                            <th style="border: 1px solid black;">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Sofa</td>
                            <td style="border: 1px solid black;">Rp 200,000</td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Kursi</td>
                            <td style="border: 1px solid black;">Rp 100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h3 class="text-left">
                    <img src="{{ asset('images/satuan.png') }}" style="width: 60px; height: 60px; margin-right: 10px;">                   
                     Laundry Satuan
                </h3>
                <table class="table table-bordered" style="border: 1px solid black;">
                    <thead style="border: 1px solid black;">
                        <tr>
                            <th style="border: 1px solid black;">Item</th>
                            <th style="border: 1px solid black;">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Kemeja</td>
                            <td style="border: 1px solid black;">Rp 20,000</td>
                        </tr>
                        <tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">Celana</td>
                            <td style="border: 1px solid black;">Rp 25,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
