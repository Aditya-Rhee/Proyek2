@extends('index')

@section('content')
    <div class="container">
        <div class="mt-4 et_pb_text_inner fw-bold text-left poppins-thin">
            <h3>LAYANAN JASA ANTAR & JEMPUT LAUNDRYEN</h3>
        </div>
        <div class="mb-4" style="width:100%; flex-grow: 1; height: 3px; background-color: rgb(123, 127, 177);"></div>
        <div class="row">
            <div class="col-4">
                <img src="images/motor.png" alt="motor" class="mt-4" style="width:100%;">
                <small>
                    Hanya perlu siapkan cuciannya,  
                    kami akan segera datang dalam waktu cepat
                </small>
            </div>
            <div class="col-8">
                <h4> Ongkos Antar & Jemput Laundry</h4>
                <p> Harga yang tercantum pada tabel adalah harga Antar & Jemput untuk pakaian per kg</p>
                <div class="mt-4">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th rowspan="2">Jarak (km)</th>
                                <th colspan="4">Harga (Rp)</th>
                            </tr>
                            <tr>
                                <th>2kg</th>
                                <th>3kg</th>
                                <th>4kg</th>
                                <th>5kg</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1-5 km</td>
                                <td>Rp 20,000</td>
                                <td>Rp 30,000</td>
                                <td>Rp 40,000</td>
                                <td>Rp 50,000</td>
                            </tr>
                            <tr>
                                <td>6-10 km</td>
                                <td>Rp 30,000</td>
                                <td>Rp 45,000</td>
                                <td>Rp 60,000</td>
                                <td>Rp 75,000</td>
                            </tr>
                            <tr>
                                <td>11-15 km</td>
                                <td>Rp 40,000</td>
                                <td>Rp 60,000</td>
                                <td>Rp 80,000</td>
                                <td>Rp 100,000</td>
                            </tr>
                            <tr>
                                <td>16-20 km</td>
                                <td>Rp 50,000</td>
                                <td>Rp 75,000</td>
                                <td>Rp 100,000</td>
                                <td>Rp 125,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-4 mb-5" style="width:100%; flex-grow: 1; height: 3px; background-color: rgb(123, 127, 177);"></div>
        </div>
    </div>
@endsection
