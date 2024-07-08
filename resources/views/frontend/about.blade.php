@extends('index')

@section('content')
    <div class="container mt-2 mb-5">
        <div class="row">
            <div class="col-md-8 d-flex flex-column align-items-center">
                <div class="mt-5 text-center">
                    <div class="fs-3 fw-bold" style="font-family: 'Libre Franklin', sans-serif">{{ $tentang->title }}</div>
                    <hr class="my-2" style="border-top: 3px solid black; width: 50%; margin:auto ;">
                    <div class="mt-4 fs-6" style="text-align: justify;">
                        {{ $tentang->description }}
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4 d-flex flex-column align-items-center" style="display: flex; justify-content: center; align-items: center;">
                <div>
                    @if ($tentang->image)
                        <img src="{{ asset('images/' . $tentang->image) }}" alt="Tentang Image" class="img-fluid">
                    @else
                        <img src="{{ asset('images/default.jpg') }}" alt="Default Image" class="img-fluid">
                    @endif
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
