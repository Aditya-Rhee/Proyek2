@extends('index')

@section('content')
    <div class="container">
        <div class="row">
            {{-- <div class="col-4 bg-lightblue text-center py-3">
                <div class="fs-3 fw-bold" style="font-family: 'Libre Franklin', sans-serif">KONTAK</div>
                <hr class="my-2" style="border-top: 3px solid black; width: 50%; margin: auto ;">
            </div> --}}
            <div class="col-12 col-md-4 mt-4 bg-lightcoral text-center py-3">
                <div class="fs-3 fw-bold" style="font-family: 'Libre Franklin', sans-serif">KONTAK</div>
                <div class="mt-4 fs-6">
                    Laundry Entry Lohbener <br><br>
                    Operasional <br>
                    Libur Setiap Hari Minggu <br>
                    Jam 08.00 S.d 17.00 <br><br>
                    Telpon : 081223255635 <br>
                    WhatsApp : 081223255635
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4 bg-lightcoral text-center py-3 align-items-center">
                <br><br>
                <div class="card bg-info" style="width: 18rem; margin: auto; align-items: center;">
                    <img src="{{ asset('images/image-24.png') }}" class="card-img-top" alt="..."
                        style="width: 10rem; height: 10rem;">
                    {{-- <div class="card-body">
                        <p class="card-text"></p>
                    </div> --}}
                </div> <br>
                <div class="card body" style="width: 18rem; margin: auto; align-items: center;">
                    6 Hari Opersional
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4 bg-lightcoral text-center py-3">
                <br><br>
                <div class="card bg-secondary" style="width: 18rem; margin: auto; align-items: center;">
                    <img src="{{ asset('images/image-25.png') }}" class="card-img-top" alt="..."
                        style="width: 10rem; height: 10rem;">
                    {{-- <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div> --}}
                </div><br>
                <div class="card body" style="width: 18rem; margin: auto; align-items: center;">
                    Pagi Sampai Sore Hari
                </div>
            </div>
        </div>
    </div>
@endsection
