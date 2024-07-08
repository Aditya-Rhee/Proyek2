<style>
    .navbar-client {
        margin-left: 220px;
        display: flex;
        flex-basis: row;
        gap: 15px;
    }

    .navbar-client a {
        color: white;
        background-color: #ABD6D2;
        padding: 10px 20px; 
        border-radius: 10px;
        text-align: center; 
        display: block; 
        white-space: nowrap; 
        text-decoration: none;
    }

    .navbar-client a.disabled {
        background-color: gray; /* Warna tombol yang dinonaktifkan */
        pointer-events: none; /* Menonaktifkan klik */
    }
</style>

@php
    $user = Auth::user();
    $profileComplete = $user->name && $user->email && $user->phone && $user->alamat;
@endphp

<div class="navbar-client">
    <div>
        <a href="{{ route('profilepelanggan') }}">Data Profile Pelanggan Laundry</a>
    </div>
    @if ($profileComplete)
        <div>
            <a href="{{ route('pemesanan_pelanggan') }}">Pesan Jasa Laundry</a>
        </div>
        <div>
            <a href="{{ route('status_pemesanan') }}">Status Pemesanan Jasa Laundry</a>
        </div>
    @else
        <div>
            <a href="#" class="disabled">Pesan Jasa Laundry</a>
        </div>
        <div>
            <a href="#" class="disabled">Status Pemesanan Jasa Laundry</a>
        </div>
    @endif
</div>
