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
                        <h1>Pengguna Pelanggan</h1>
                    </div>
                    <div class="section-body mt-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>List Data Pengguna Pelanggan</h4>
                                        {{-- <div class="card-header-action" style="margin-right: 10px">
                                            <a href="{{ route('pelanggan.pengguna.create') }}" class="btn btn-primary">Tambah User</a>
                                        </div> --}}
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
                                                        <th class="text-center" style="min-width: 50px;">No</th>
                                                        <th class="text-center" style="min-width: 170px;">Name</th>
                                                        <th class="text-center" style="min-width: 150px;">Phone</th>
                                                        <th class="text-center">Email</th>
                                                        <th class="text-center" style="min-width: 170px;">Address</th>
                                                        <th class="text-center">Image</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $index => $user)
                                                        <tr>
                                                            <td class="text-center">{{ $index + 1 }}</td>
                                                            <td class="text-center">{{ $user->name }}</td>
                                                            <td class="text-center">{{ $user->phone }}</td>
                                                            <td class="text-center">{{ $user->email }}</td>
                                                            <td class="text-center">{{ $user->alamat }}</td>
                                                            <td class="text-center">
                                                                @if ($user->image)
                                                                    <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" class="rounded-circle" width="35">
                                                                @else
                                                                    <img src="{{ asset('images/profile.jpg') }}" alt="Default Profile Image" class="rounded-circle" width="35">
                                                                @endif
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="badge {{ $user->status_user == 'active' ? 'badge-success' : 'badge-danger' }}">
                                                                    {{ $user->status_user }}
                                                                </div>
                                                            </td>
                                                            <td class="text-center" style="display: flex; align-items: center; gap:10px;">
                                                                <a href="{{ route('pelanggan.pengguna.edit', $user->id) }}" class="btn btn-warning" title="Edit">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                {{-- <button type="button" class="btn btn-danger text-white btn-delete" data-id="{{ $user->id }}" title="Menghapus Data">
                                                                    <i class="fas fa-trash-alt text-white"></i>
                                                                </button>
                                                                <form id="deleteForm-{{ $user->id }}" action="{{ route('pelanggan.pengguna.delete', ['id' => $user->id]) }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form> --}}
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

    <!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmModalLabel">Konfirmasi Penghapusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus item ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Hapus</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        var deleteFormId = null;
        var myModal = $('#deleteConfirmModal');

        $('.btn-delete').click(function() {
            deleteFormId = $(this).data('id');
            myModal.modal('show');
        });

        $('#confirmDeleteButton').click(function() {
            if (deleteFormId) {
                $('#deleteForm-' + deleteFormId).submit();
            }
        });

        // Ensure modal is hidden when 'Batal' button is clicked
        myModal.on('hidden.bs.modal', function () {
            deleteFormId = null;
        });
    });
</script>
@endsection
