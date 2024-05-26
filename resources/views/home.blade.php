@extends('index')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-7 d-flex flex-column align-items-center">
                <div class="mt-5 text-center">
                    <h1 class="display-1" style="font-family: 'Libre Franklin', sans-serif">LAUNDRY</h1>
                    <div class="mt-2 display-3" style="font-family: 'Libre Franklin', sans-serif">
                        <p>E N T R Y</p>
                    </div>
                    <div class="mt-4">
                        <h5>MELAYANI LAUNDRY KILOAN, SEPATU, TAS, KARPET DAN LAINNYA. <br>
                            Website laundryen juga menyediakan antar jemput pesanan</h5>
                    </div>
                    <div class="d-grid gap-3 col-6 mx-auto mt-3">
                        <button class="btn btn-outline-primary btn-lg" type="button">Pesan Disini</button>
                        <button class="btn btn-outline-primary btn-lg" type="button">Lihat Antrian</button>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-column align-items-center">
                <div>
                    <img src="{{ asset('images/logo-home.png') }}" alt="Logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Row baru untuk garis putih kecil -->
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <hr style="width: 100%; border: 50px solid rgb(0, 92, 116);">
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <div style="flex-grow: 1; height: 1px; background-color: black;"></div>
                <div class="mx-3">
                    <img src="{{ asset('images/bintang.png') }}" alt="Bintang" class="img-fluid">
                </div>
                <div style="flex-grow: 1; height: 1px; background-color: black;"></div>
            </div>
        </div>

        <div class="row mt-10">
            <div class="col-md-12 d-flex flex-column align-items-center">
                <div class="mt-3 text-center">
                    <div class="mt-2 display-3" style="font-family: 'Libre Franklin', sans-serif">
                    </div>
                    <div class="mt-4">
                        <h6>Laundryen merupakan jasa laundry kiloan Lohbener & jasa cuci karpet kantor yang memiliki workshop di Jl.Lohbener Lama - Indramayu. 
                            <br>
                            <br>
                            Kami menyediakan berbagai layanan laundry untuk meringankan rutinitas kegiatan mencuci, setrika pakaian setiap harinya. Untuk anda yang sibuk tidak sempat datang untuk mengantarkan cucian kotor ke workshop kami, tidak perlu khawatir kami memberikan layanan antar-jemput untuk laundry kiloan, cuci sepatu dll. 
                            <br>
                            <br>
                            Anda bisa langsung pesan sekarang atau hubungi kontak kami, lalu tim kami akan melakukan pick up kerumah anda, ketika laundry selesai kami akan mengantarkan kembali kerumah anda.</h6>
                            <br>
                            <br>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
