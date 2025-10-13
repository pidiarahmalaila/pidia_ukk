@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h2 class="mb-4">Tambah Ekskul</h2>

    {{-- tampilkan error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ekskul.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Ekskul</label>
            <input type="text" name="nama" id="nama" class="form-control" 
                   value="{{ old('nama') }}" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Upload Foto</label>
            <input type="file" name="foto" id="foto" class="form-control" accept="image/*" required>
            <small class="text-muted">Format: JPG, PNG, maks 2MB</small>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control" 
                   value="{{ old('deskripsi') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('ekskul.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection