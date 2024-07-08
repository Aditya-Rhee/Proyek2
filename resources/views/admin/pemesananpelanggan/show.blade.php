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
                        <h1>Detail Pemesanan Pelanggan Laundry</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Form Detail Pemesanan Pelanggan Laundry</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>ID Pesanan</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->id }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama User</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->user->name }}" disabled>
                                                </div>

                                                <div class="form-group">
                                                    <label>Jenis Paket</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->jenis_paket == 'paket_kiloan' ? 'Paket Kiloan' : 'Paket Satuan' }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kategori Paket Kiloan</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->kategoriPaketKiloan->jenis_kategori_paket_kiloans ?? '-' }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Pembayaran</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->jenis_pembayaran }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status Pesanan</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->status_pesanan == 'boking_pemesanan_cucian_dulu' ? ' Boking Pemesanan Cucian Dulu' : 'Tidak Boking Pemesanan Cucian' }}" disabled>
                                                </div>
                                              
                                               
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Status Pembayaran</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->status_pembayaran == 'belum_bayar' ? 'Belum Bayar' : 'Sudah Bayar' }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status Pesanan Laundry</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->status_pesanan_laundry == 'sedang_dikerjakan' ? 'Sedang Dikerjakan' : 'Selesai' }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Pengambilan</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->jenis_pengambilan_cucian }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Total Pembayaran</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->total_pembayaran }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Timbang Berat</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->timbang_berat }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Keterangan Pemesanan</label>
                                                    <input type="text" class="form-control" value="{{ $pemesanan->keterangan_pemesanan  }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a href="{{ route('pelanggan.datapemesananpelanggan') }}" class="btn btn-primary">Kembali</a>
                                    </div>
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
        // Custom scripts if necessary
    </script>
@endsection
