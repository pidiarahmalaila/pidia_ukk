<x-header/>
<div class="container">
    <h2>Profil Sekolah</h2>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div> @endif

    <p><strong>Judul</strong><br>{{ $berita->judul ?? '-' }}</p>
    <p><strong>Gambar</strong><br>{{ $berita->gambar ?? '-' }}</p>
    <p><strong>Isi</strong><br>{{ $berita->isi ?? '-' }}</p>

    <a href="{{ route('berita.edit') }}" class="btn btn-warning">Edit Berita</a>
</div>