@extends('index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mt-4 bg-lightcoral text-center py-3">
                <div class="fs-3 fw-bold" style="font-family: 'Libre Franklin', sans-serif">KONTAK</div>
                <div class="mt-4 fs-6">
                    Laundry Entry Lohbener <br><br>
                    Operasional <br>
                    {{ $kontak->hari_kerja }} <br>
                    {{ $kontak->jam_kerja }} <br><br>
                    Telpon : {{ $kontak->telepon }} <br>
                    WhatsApp : {{ $kontak->wa }}
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4 bg-lightcoral text-center py-3 align-items-center">
                <br><br>
                <div class="card bg-info" style="width: 18rem; margin: auto; align-items: center;">
                    <img src="{{ asset('images/image-24.png') }}" class="card-img-top" alt="..."
                        style="width: 10rem; height: 10rem;">
                </div> <br>
                <div class="card body" style="width: 18rem; margin: auto; align-items: center;">
                    6 Hari Operasional
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4 bg-lightcoral text-center py-3">
                <br><br>
                <div class="card bg-secondary" style="width: 18rem; margin: auto; align-items: center;">
                    <img src="{{ asset('images/image-25.png') }}" class="card-img-top" alt="..."
                        style="width: 10rem; height: 10rem;">
                </div><br>
                <div class="card body mb-5" style="width: 18rem; margin: auto; align-items: center;">
                    Pagi Sampai Sore Hari
                </div>
            </div>
        </div>
    </div>
@endsection
