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
                        <h1>Data Kontak</h1>
                    </div>
                    <div class="section-body mt-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Detail Kontak</h4>
                                        <div class="card-header-action" style="margin-right: 10px">
                                            <a href="{{ route('datakontak.create') }}" class="btn btn-primary">Tambah Kontak</a>
                                        </div>
                                    </div>
                                    <div class="card-body p-2 g-5">
                                        @if($kontaks->count() > 0)
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Telepon</th>
                                                            <th class="text-center">WhatsApp</th>
                                                            <th class="text-center">Jam Kerja</th>
                                                            <th class="text-center">Hari Kerja</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($kontaks as $kontak)
                                                            <tr>
                                                                <td class="text-center">{{ $kontak->telepon }}</td>
                                                                <td class="text-center">{{ $kontak->wa }}</td>
                                                                <td class="text-center">{{ $kontak->jam_kerja }}</td>
                                                                <td class="text-center">{{ $kontak->hari_kerja }}</td>
                                                                <td class="text-center" style="display: flex; align-items: center; gap:10px;">
                                                                    <a href="{{ route('datakontak.edit', $kontak->id) }}" class="btn btn-warning" title="Edit">
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                    <button type="button" class="btn btn-danger text-white btn-delete" data-id="{{ $kontak->id }}" title="Menghapus Data">
                                                                        <i class="fas fa-trash-alt text-white"></i>
                                                                    </button>
                                                                    <form id="deleteForm-{{ $kontak->id }}" action="{{ route('datakontak.delete', $kontak->id) }}" method="POST" style="display: none;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <p class="text-center">Data kontak belum tersedia.</p>
                                        @endif
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
                $('#deleteConfirmModal').modal('show');
            });

            $('#confirmDeleteButton').click(function() {
                if (deleteFormId) {
                    $('#deleteForm-' + deleteFormId).submit();
                }
            });

            myModal.on('hidden.bs.modal', function () {
                deleteFormId = null;
            });
        });
    </script>
@endsection
