@extends('admin.layout.main')

@section('styles')
    <style type="text/css">
        .form-control:disabled {
            background-color: #e9ecef;
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Tambah Pemesanan Laundry oleh Admin</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-12">
                                <div class="card">
                                    <form action="{{ route('pemesananpelanggan.pengguna.createproses') }}" method="POST">
                                        @csrf
                                        <div class="card-header">
                                            <h4>Form Tambah Pemesanan</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Nama</label>
                                                        <input type="text" name="name" class="form-control" id="name" required>
                                                        @error('name')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" class="form-control" id="email" required>
                                                        @error('email')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Nomor Handphone</label>
                                                        <input type="text" name="phone" class="form-control" id="phone" required>
                                                        @error('phone')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat</label>
                                                        <input type="text" name="alamat" class="form-control" id="alamat" required>
                                                        @error('alamat')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="status_pesanan">Status Pemesanan</label>
                                                        <select name="status_pesanan" id="status_pesanan" class="form-control" required>
                                                            <option value="" selected disabled>Pilih Status Pemesanan</option>
                                                            <option value="boking_pemesanan_cucian_dulu">Boking Pemesanan Cucian Dulu</option>
                                                            <option value="tidak_boking_pemesanan_cucian">Tidak Boking Pemesanan Cucian</option>
                                                        </select>
                                                        @error('status_pesanan')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jenis_paket">Jenis Paket</label>
                                                        <select name="jenis_paket" id="jenis_paket" class="form-control" required>
                                                            <option value="" selected disabled>Pilih Jenis Paket</option>
                                                            <option value="paket_kiloan">Paket Kiloan</option>
                                                            <option value="paket_satuan">Paket Satuan</option>
                                                        </select>
                                                        @error('jenis_paket')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group" id="kategori_paket_kiloan_container" style="display: none;">
                                                        <label for="kategori_paket_kiloans_id">Kategori Paket Kiloan</label>
                                                        <select name="kategori_paket_kiloans_id" id="kategori_paket_kiloans_id" class="form-control">
                                                            <option value="" selected disabled>Pilih Kategori Paket Kiloan</option>
                                                            @foreach($kategori_paket_kiloans as $kategori)
                                                                <option value="{{ $kategori->id }}">{{ $kategori->jenis_kategori_paket_kiloans }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('kategori_paket_kiloans_id')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jenis_pengambilan_cucian">Jenis Pengambilan</label>
                                                        <select name="jenis_pengambilan_cucian" id="jenis_pengambilan_cucian" class="form-control" required>
                                                            <option value="" selected disabled>Pilih Jenis Pengambilan</option>
                                                            <option value="ditempat">Di Tempat</option>
                                                            <option value="diantar">Diantar</option>
                                                        </select>
                                                        @error('jenis_pengambilan_cucian')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jenis_pembayaran">Jenis Pembayaran</label>
                                                        <select name="jenis_pembayaran" id="jenis_pembayaran" class="form-control" required>
                                                            <option value="" selected disabled>Pilih Jenis Pembayaran</option>
                                                            <option value="cash">Cash</option>
                                                            <option value="transfer">Transfer</option>
                                                        </select>
                                                        @error('jenis_pembayaran')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="status_pembayaran">Status Pembayaran</label>
                                                        <select name="status_pembayaran" id="status_pembayaran" class="form-control" required>
                                                            <option value="belum_bayar">Belum Bayar</option>
                                                            <option value="sudah_bayar">Sudah Bayar</option>
                                                        </select>
                                                        @error('status_pembayaran')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="status_pesanan_laundry">Status Pesanan Laundry</label>
                                                        <select name="status_pesanan_laundry" id="status_pesanan_laundry" class="form-control" required>
                                                            <option value="sedang_dikerjakan">Sedang Dikerjakan</option>
                                                            <option value="selesai">Selesai</option>
                                                        </select>
                                                        @error('status_pesanan_laundry')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="total_pembayaran">Total Pembayaran</label>
                                                        <input type="text" name="total_pembayaran" class="form-control" id="total_pembayaran" required>
                                                        @error('total_pembayaran')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="timbang_berat">Timbang Berat</label>
                                                        <input type="text" name="timbang_berat" class="form-control" id="timbang_berat" required>
                                                        @error('timbang_berat')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="keterangan_pemesanan">Keterangan Pemesanan</label>
                                                        <textarea name="keterangan_pemesanan" class="form-control" id="keterangan_pemesanan"></textarea>
                                                        @error('keterangan_pemesanan')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
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
