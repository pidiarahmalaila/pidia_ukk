@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Ekstrakulikuler</h2>
        <a href="{{ route('ekskul.create') }}" class="btn btn-primary">
            + Tambah Ekskul
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @forelse($ekskuls as $ekskul)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($ekskul->foto)
                        <img src="{{ asset('storage/ekskul/' . $ekskul->foto) }}" 
                             class="card-img-top" 
                             alt="{{ $ekskul->nama }}" 
                             style="height: 180px; object-fit: cover;">
                    @else
                        <img src="https://via.placeholder.com/300x180?text=No+Image" 
                             class="card-img-top" 
                             alt="No image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $ekskul->nama }}</h5>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted">Belum ada data data ekskul.</p>
        @endforelse
    </div>
</div>
@endsection