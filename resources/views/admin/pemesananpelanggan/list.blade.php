@extends('admin.layout.main')

@section('styles')
    <style>
        .table td,
        .table th {
            padding: 15px;
            vertical-align: middle;
        }

        .table tr {
            margin-bottom: 10px;
        }

        .table {
            border-spacing: 10px;
        }
    </style>
@endsection

@section('content')
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Data Pemesanan Pelanggan Laundry</h1>
                    </div>
                    <div class="section-body mt-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>List Data Pemesanan Pelanggan Laundry</h4>
                                        <div class="card-header-action" style="margin-right: 10px">
                                            <a href="{{ route('pemesananpelanggan.pengguna.create') }}" class="btn btn-primary">Tambah Pemesanan Laundry</a>
                                        </div>
                                        <div class="card-header-form">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body p-2 g-5">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Nama User</th>
                                                        <th class="text-center">Jenis Paket</th>
                                                        <th class="text-center">Status Pesanan</th>
                                                        <th class="text-center">Total Pembayaran</th>
                                                        <th class="text-center">Status Pesanan Laundry</th>
                                                        <th class="text-center">Status Pembayaran</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pemesanans as $index => $pemesanan)
                                                        <tr>
                                                            <td class="text-center">{{ $index + 1 }}</td>
                                                            <td class="text-center">{{ $pemesanan->user->name }}</td>
                                                            <td class="text-center">
                                                                @if($pemesanan->jenis_paket == 'paket_kiloan')
                                                                    Paket Kiloan
                                                                @else
                                                                    Paket Satuan
                                                                @endif
                                                            </td>
                                                            <td class="text-center">
                                                                @if($pemesanan->status_pesanan == 'boking_pemesanan_cucian_dulu')
                                                                    Boking Pemesanan Cucian Dulu
                                                                @else
                                                                    Tidak Boking Pemesanan Cucian
                                                                @endif
                                                            </td>
                                                            <td class="text-center">{{ $pemesanan->total_pembayaran }}</td>
                                                            <td class="text-center">
                                                                @if($pemesanan->status_pesanan_laundry == 'sedang_dikerjakan')
                                                                    Sedang Dikerjakan
                                                                @else
                                                                    Selesai
                                                                @endif
                                                            </td>
                                                            <td class="text-center">
                                                                @if($pemesanan->status_pembayaran == 'belum_bayar')
                                                                    Belum Bayar
                                                                @else
                                                                    Sudah Bayar
                                                                @endif
                                                            </td>
                                                            <td class="text-center" style="display: flex; align-items: center; gap:10px;">
                                                                <a href="{{ route('pelanggan.pemesanan.detail', $pemesanan->id) }}" class="btn btn-info" title="Show">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                                <button type="button" class="btn btn-warning" title="Edit" data-toggle="modal" data-target="#editModal" data-id="{{ $pemesanan->id }}" data-timbang_berat="{{ $pemesanan->timbang_berat }}" data-total_pembayaran="{{ $pemesanan->total_pembayaran }}" data-status_pesanan_laundry="{{ $pemesanan->status_pesanan_laundry }}" data-status_pembayaran="{{ $pemesanan->status_pembayaran }}" data-keterangan_pemesanan="{{ $pemesanan->keterangan_pemesanan }}">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                                <a href="{{ route('admincetak.struk', $pemesanan->id) }}" class="btn btn-primary" title="Cetak Struk">
                                                                    <i class="fas fa-print"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Modal Edit Data -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Pemesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm" method="POST" action="">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                        <input type="hidden" id="editId" name="id">
                        <div class="form-group">
                            <label for="timbang_berat">Timbang Berat</label>
                            <input type="text" class="form-control" id="editTimbangBerat" name="timbang_berat" required>
                        </div>
                        <div class="form-group">
                            <label for="total_pembayaran">Total Pembayaran</label>
                            <input type="text" class="form-control" id="editTotalPembayaran" name="total_pembayaran" required>
                        </div>
                        <div class="form-group">
                            <label for="status_pesanan_laundry">Status Pesanan Laundry</label>
                            <select class="form-control" id="editStatusPesananLaundry" name="status_pesanan_laundry" required>
                                <option value="sedang_dikerjakan">Sedang Dikerjakan</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status_pembayaran">Status Pembayaran</label>
                            <select class="form-control" id="editStatusPembayaran" name="status_pembayaran" required>
                                <option value="belum_bayar">Belum Bayar</option>
                                <option value="sudah_bayar">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan_pemesanan">Keterangan Pemesanan</label>
                            <textarea class="form-control" id="editKeteranganPemesanan" name="keterangan_pemesanan" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        var editModal = $('#editModal');
        var editForm = $('#editForm');

        // Edit button click event
        $('.btn-warning').click(function() {
            var id = $(this).data('id');
            var timbang_berat = $(this).data('timbang_berat');
            var total_pembayaran = $(this).data('total_pembayaran');
            var status_pesanan_laundry = $(this).data('status_pesanan_laundry');
            var status_pembayaran = $(this).data('status_pembayaran');
            var keterangan_pemesanan = $(this).data('keterangan_pemesanan');
            
            $('#editId').val(id);
            $('#editTimbangBerat').val(timbang_berat);
            $('#editTotalPembayaran').val(total_pembayaran);
            $('#editStatusPesananLaundry').val(status_pesanan_laundry);
            $('#editStatusPembayaran').val(status_pembayaran);
            $('#editKeteranganPemesanan').val(keterangan_pemesanan);

            editForm.attr('action', '/listdatapemesananpelanggan/update/' + id);
            editModal.modal('show');
        });
    });
</script>
@endsection
