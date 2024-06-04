@extends('index')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-7 d-flex flex-column align-items-center">
                <div class="mt-5 text-center">
                    <div class="display-1" style="font-family: 'Libre Franklin', sans-serif">LAUNDRY</div>
                    <div class="mt-2 display-3" style="font-family: 'Libre Franklin', sans-serif">
                        <p>E N T R Y</p>
                    </div>
                    <div class="mt-4 fs-4" style="text-align: center;">
                        Melayani Laundry Kiloan, Sepatu, Tas, Karpet dan Lainnya. <br>
                            Website laundryen juga menyediakan antar jemput pesanan
                    </div>
                    <div class="d-grid gap-3 col-6 mx-auto mt-3">
                        <a href="{{ route('pesan') }}" class="btn btn-outline-primary btn-lg">Pesan Disini</a>
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
    <hr class="w-full" style="border: 50px solid rgb(0, 92, 116);">

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
                    <div class="mt-4 fs-5" style="text-align: center;">
                        Laundryen merupakan jasa laundry kiloan Lohbener & jasa cuci karpet kantor yang memiliki workshop di Jl.Lohbener Lama - Indramayu.
                            <br>
                            <br>
                            Kami menyediakan berbagai layanan laundry untuk meringankan rutinitas kegiatan mencuci, setrika pakaian setiap harinya. Untuk anda yang sibuk tidak sempat datang untuk mengantarkan cucian kotor ke workshop kami, tidak perlu khawatir kami memberikan layanan antar-jemput untuk laundry kiloan, cuci sepatu dll.
                            <br>
                            <br>
                            Anda bisa langsung pesan sekarang atau hubungi kontak kami, lalu tim kami akan melakukan pick up kerumah anda, ketika laundry selesai kami akan mengantarkan kembali kerumah anda.                         <br>
                            <br>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
