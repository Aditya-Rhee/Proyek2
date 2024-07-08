@extends('admin.layout.main')

@section('styles')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <style type="text/css">
        .ck-editor__editable_inline {
            height: 300px;
        }
    </style>
@endsection

@section('content')
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Edit Pengguna Pelanggan</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-12">
                                <div class="card">
                                    <form action="{{ route('pelanggan.pengguna.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-header">
                                            <h4>Form Edit Pengguna Pelanggan</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                                                        @error('name')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                                                        @error('email')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" name="password" class="form-control">
                                                        <small>Kosongkan jika tidak ingin mengubah password</small>
                                                        @error('password')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                                                        @error('phone')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Profile Photo</label>
                                                        <input type="file" name="image" class="form-control">
                                                        @error('image')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                        @if($user->image)
                                                            <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" width="100">
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea name="alamat" id="address" class="form-control">{{ $user->alamat }}</textarea>
                                                        @error('alamat')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select name="status_user" class="form-control">
                                                            <option value="active" {{ $user->status_user == 'active' ? 'selected' : '' }}>Active</option>
                                                            <option value="nonactive" {{ $user->status_user == 'nonactive' ? 'selected' : '' }}>Nonactive</option>
                                                        </select>
                                                        @error('status_user')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="role_id" value="{{ \App\Models\Role::where('role_name', 'pelanggan_users')->first()->id }}">
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

@section('scripts')
    <script>
        $(document).ready(function() {
            // Initialize CKEditor
            ClassicEditor
                .create(document.querySelector('#address'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
