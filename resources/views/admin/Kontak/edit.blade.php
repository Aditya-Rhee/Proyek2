@extends('admin.layout.main')

@section('styles')
@endsection

@section('content')
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Edit Kontak</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-12">
                                <div class="card">
                                    <form action="{{ route('datakontak.update', $kontak->id) }}" method="POST">
                                        @csrf
                                        <div class="card-header">
                                            <h4>Form Edit Kontak</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Telepon</label>
                                                <input type="text" name="telepon" class="form-control" value="{{ $kontak->telepon }}" required>
                                                @error('telepon')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>WhatsApp</label>
                                                <input type="text" name="wa" class="form-control" value="{{ $kontak->wa }}" required>
                                                @error('wa')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Jam Kerja</label>
                                                <input type="text" name="jam_kerja" class="form-control" value="{{ $kontak->jam_kerja }}" required>
                                                @error('jam_kerja')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Hari Kerja</label>
                                                <input type="text" name="hari_kerja" class="form-control" value="{{ $kontak->hari_kerja }}" required>
                                                @error('hari_kerja')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Update</button>
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
