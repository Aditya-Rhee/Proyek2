@extends('admin.layout.main')

@section('styles')
@endsection

@section('content')
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Edit Setting</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-12">
                                <div class="card">
                                    <form action="{{ route('datasettings.update', $setting->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="card-header">
                                            <h4>Form Edit Setting</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Telepon</label>
                                                <input type="text" name="telephone" class="form-control" value="{{ $setting->telephone }}" required>
                                                @error('telephone')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>WhatsApp</label>
                                                <input type="text" name="wa" class="form-control" value="{{ $setting->wa }}" required>
                                                @error('wa')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Caption</label>
                                                <input type="text" name="caption" class="form-control" value="{{ $setting->caption }}" required>
                                                @error('caption')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Copyright</label>
                                                <input type="text" name="coppyright" class="form-control" value="{{ $setting->coppyright }}" required>
                                                @error('coppyright')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
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
