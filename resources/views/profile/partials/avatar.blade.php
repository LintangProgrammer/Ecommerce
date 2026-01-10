@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Avatar</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Avatar Saat Ini -->
                        <div class="text-center mb-4">
                            <img src="{{ auth()->user()->avatar ?? asset('images/default-avatar.png') }}" alt="Avatar"
                                class="rounded-circle" width="150" height="150">
                        </div>

                        <!-- Form Upload Avatar -->
                        <form action="{{ route('profile.avatar.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="avatar" class="form-label">Pilih Avatar Baru</label>
                                <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar"
                                    name="avatar" accept="image/*">
                                @error('avatar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Upload Avatar</button>
                            <a href="{{ route('profile.edit') }}" class="btn btn-secondary">Kembali</a>
                        </form>

                        <!-- Form Hapus Avatar -->
                        @if(auth()->user()->avatar)
                            <form action="{{ route('profile.avatar.destroy') }}" method="POST" class="mt-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus avatar?')">
                                    Hapus Avatar
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection