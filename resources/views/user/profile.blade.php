@extends('index')

@section('style')
<style>
    #imageProfilePreview {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
        margin: 0 auto 10px;
    }
</style>
@endsection

@section('content')
<div class="container mt-5">
    @include('user.components.navbar_pelanggan')
    <div class="row mt-2">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Data Profile Pelanggan Laundry</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('profilepelangganupdate', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 text-center">
                            <label for="image" class="form-label">Image Profile</label>
                            <div id="imageProfilePreviewContainer">
                                <img id="imageProfilePreview" src="{{ $user->image ? asset('storage/'.$user->image) : asset('images/profile.jpg') }}" alt="your image" />
                            </div>
                            <input class="form-control" type="file" id="image" name="image" onchange="previewImage('image', 'imageProfilePreview');">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Handphone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Your Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $user->alamat) }}" placeholder="Your Address">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your Password">
                        </div>

                        <button type="submit" class="btn " style="background-color: #ABD6D2; color:white;">Update Profile</button>
                    </form>
                    
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    function previewImage(inputId, previewId) {
        var input = document.getElementById(inputId);
        var preview = document.getElementById(previewId);
        var reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
</script>
@endsection
