@extends('index')

@section('style')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    h2 {
        margin-top: 20px;
        text-align: center;
        font-size: 30px;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f9f9f9;
    }

    .btn-cetak {
        background-color: #ABD6D2;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;
    }
</style>
@endsection

@section('content')
<div class="container mt-5">
    @include('user.components.navbar_pelanggan')
    <h2>Status Pemesanan Laundry</h2>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pesanan</th>
                        <th>Jenis Paket</th>
                        <th>Kategori Paket Kiloan</th>
                        <th>Status Pemesanan</th>
                        <th>Jenis Pengambilan</th>
                        <th>Jenis Pembayaran</th>
                        <th>Status Pembayaran</th>
                        <th>Status Laundry</th>
                        <th>Total Pembayaran</th>
                        <th>Total Timbang Berat</th>
                        <th>Cetak Struk</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($pemesanans->isNotEmpty())
                        @foreach ($pemesanans as $index => $pemesanan)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $pemesanan->created_at->format('Y-m-d') }}</td>
                                <td>{{ ucfirst($pemesanan->jenis_paket) }}</td>
                                <td>{{ $pemesanan->jenis_paket == 'paket_satuan' ? '-' : optional($pemesanan->kategoriPaketKiloan)->jenis_kategori_paket_kiloans }}</td>
                                <td>{{ ucfirst($pemesanan->status_pesanan) }}</td>
                                <td>{{ ucfirst($pemesanan->jenis_pengambilan_cucian) }}</td>
                                <td>{{ ucfirst($pemesanan->jenis_pembayaran) }}</td>
                                <td>{{ ucfirst($pemesanan->status_pembayaran ?? 'belum bayar') }}</td>
                                <td>{{ ucfirst($pemesanan->status_pesanan_laundry) }}</td>
                                <td>{{ $pemesanan->total_pembayaran ?? '-' }}</td>
                                <td>{{ $pemesanan->timbang_berat }}</td>
                                <td><a href="{{ route('cetak.struk', $pemesanan->id) }}" class="btn-cetak">Cetak</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12">Data pemesanan tidak ditemukan.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
