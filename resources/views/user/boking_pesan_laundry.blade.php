@extends('index')

@section('style')
<style>
    #imageProfilePreview {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
        margin: 0 auto 10px;
    }
</style>
@endsection

@section('content')
<div class="container mt-5">
    @include('user.components.navbar_pelanggan')
    <div class="row mt-2">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Form Pemesanan Laundry</h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('pemesananprosesspelanggan') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="user_name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Handphone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $user->alamat }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="status_pesanan" class="form-label">Status Pemesanan</label>
                            <select class="form-select" id="status_pesanan" name="status_pesanan" required>
                                <option value="" selected disabled>Pilih Status Pesanan</option>
                                <option value="boking_pemesanan_cucian_dulu">Boking Pemesanan Cucian Dulu</option>
                                <option value="tidak_boking_pemesanan_cucian">Tidak Boking Pemesanan Cucian</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_paket" class="form-label">Jenis Paket</label>
                            <select class="form-select" id="jenis_paket" name="jenis_paket" required>
                                <option value="" selected disabled>Pilih Jenis Paket</option>
                                <option value="paket_kiloan">Paket Kiloan</option>
                                <option value="paket_satuan">Paket Satuan</option>
                            </select>
                        </div>
                        <div class="mb-3" id="kategori_paket_kiloan_container" style="display: none;">
                            <label for="kategori_paket_kiloans_id" class="form-label">Kategori Paket Kiloan</label>
                            <select class="form-select" id="kategori_paket_kiloans_id" name="kategori_paket_kiloans_id">
                                <option value="" selected disabled>Pilih Kategori Paket Kiloan</option>
                                @foreach($kategori_paket_kiloans as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->jenis_kategori_paket_kiloans }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_pengambilan_cucian" class="form-label">Jenis Pengambilan</label>
                            <select class="form-select" id="jenis_pengambilan_cucian" name="jenis_pengambilan_cucian" required>
                                <option value="" selected disabled>Pilih Jenis Pengambilan</option>
                                <option value="ditempat">Di Tempat</option>
                                <option value="diantar">Diantar</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_pembayaran" class="form-label">Jenis Pembayaran</label>
                            <select class="form-select" id="jenis_pembayaran" name="jenis_pembayaran" required>
                                <option value="" selected disabled>Pilih Jenis Pembayaran</option>
                                <option value="cash">Cash</option>
                                <option value="transfer">Transfer</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </form>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    function previewImage(inputId, previewId) {
        var input = document.getElementById(inputId);
        var preview = document.getElementById(previewId);
        var reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }

    document.getElementById('jenis_paket').addEventListener('change', function() {
        var jenisPaket = this.value;
        var kategoriPaketKiloanContainer = document.getElementById('kategori_paket_kiloan_container');

        if (jenisPaket === 'paket_kiloan') {
            kategoriPaketKiloanContainer.style.display = 'block';
        } else {
            kategoriPaketKiloanContainer.style.display = 'none';
        }
    });
</script>
@endsection
