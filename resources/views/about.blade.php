@extends('index')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-8 d-flex flex-column align-items-center">
                <div class="mt-5 text-center">
                    <div class="fs-3 fw-bold" style="font-family: 'Libre Franklin', sans-serif">TENTANG KAMI</div>
                    <hr class="my-4" style="border-top: 3px solid black; width: 50%; margin:auto ;">
                    <div class="mt-4 fs-6" style="text-align: justify;">
                        Dibangun dengan visi untuk membawa kemudahan ke dalam kehidupan sehari-hari, Laundryen memiliki komitmen untuk memberikan layanan terbaik dalam industri laundry. Melalui kombinasi teknologi canggih dan tenaga kerja profesional, kami bertekad untuk memberikan pengalaman laundry yang tak tertandingi bagi pelanggan kami.<br> <br>
                        Dengan fokus pada kualitas, keandalan, dan kemudahan, Laundryen menawarkan berbagai layanan laundry yang mencakup pencucian, pengeringan, setrika, hingga dry cleaning. Kami memahami betapa berharganya waktu Anda, itulah mengapa kami menyediakan layanan pengambilan dan pengantaran pakaian tepat di depan pintu Anda, sehingga Anda dapat fokus pada hal-hal yang lebih penting dalam hidup Anda.<br> <br>
                        Terima kasih telah memilih Laundryen sebagai mitra laundry anda. Kami berkomitmen untuk terus memberikan layanan terbaik dan memenuhi harapan pelanggan.
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center" style="display: flex; justify-content: center; align-items: center;">
                <div >
                    <img src="{{ asset('images/tentang.png') }}" alt="Logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
