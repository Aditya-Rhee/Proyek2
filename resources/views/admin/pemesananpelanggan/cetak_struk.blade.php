<!DOCTYPE html>
<html>
<head>
    <title>Struk Pemesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .center-text {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2 class="center-text">Struk Pemesanan Laundry</h2>
    <table>
        <tr>
            <th>No</th>
            <td>{{ $pemesanan->id }}</td>
        </tr>
        <tr>
            <th>Tanggal Pesanan</th>
            <td>{{ $pemesanan->created_at->format('Y-m-d') }}</td>
        </tr>
        <tr>
            <th>Jenis Paket</th>
            <td>{{ ucfirst(str_replace('_', ' ', $pemesanan->jenis_paket)) }}</td>
        </tr>
        <tr>
            <th>Kategori Paket Kiloan</th>
            <td>{{ $pemesanan->jenis_paket == 'paket_satuan' ? '-' : optional($pemesanan->kategoriPaketKiloan)->jenis_kategori_paket_kiloans }}</td>
        </tr>
        <tr>
            <th>Status Pemesanan</th>
            <td>{{ ucfirst(str_replace('_', ' ', $pemesanan->status_pesanan)) }}</td>
        </tr>
        <tr>
            <th>Jenis Pengambilan</th>
            <td>{{ ucfirst(str_replace('_', ' ', $pemesanan->jenis_pengambilan_cucian)) }}</td>
        </tr>
        <tr>
            <th>Jenis Pembayaran</th>
            <td>{{ ucfirst($pemesanan->jenis_pembayaran) }}</td>
        </tr>
        <tr>
            <th>Status Pembayaran</th>
            <td>{{ ucfirst(str_replace('_', ' ', $pemesanan->status_pembayaran ?? 'belum bayar')) }}</td>
        </tr>
        <tr>
            <th>Status Laundry</th>
            <td>{{ ucfirst(str_replace('_', ' ', $pemesanan->status_pesanan_laundry)) }}</td>
        </tr>
        <tr>
            <th>Total Pembayaran</th>
            <td>{{ $pemesanan->total_pembayaran ?? '-' }}</td>
        </tr>
        <tr>
            <th>Timbang Berat</th>
            <td>{{ $pemesanan->jenis_paket == 'paket_satuan' ? $pemesanan->timbang_berat : '-' }}</td>
        </tr>
        <tr>
            <th>Keterangan Pemesanan</th>
            <td>{{ ucfirst($pemesanan->keterangan_pemesanan) }}</td>
        </tr>
    </table>
</body>
</html>
