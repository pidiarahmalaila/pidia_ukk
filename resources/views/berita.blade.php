<x-header/>
     <div class="row mt-5">
        <h1 class="profil text-info text-center">Berita terkini seputar kegiatan dan informasi</h1>
        <h1 class="profil text-info text-center">di SMK Negeri 4 Kota Tasikmalaya</h1>
    </div>
    <div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="row">
                @foreach ( $berita as $item )
                    
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header p-0">
                            <img width="100%" src={{ $item->gambar }} alt=""> 
                        </div>
                        <div class="card-body">
                            <h3>{{ $item->judul }}</h3>
                            <a class="btn btn-outline-info" href={{ $item->isi }}>Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <x-footer/>
</body>
</html>