<x-header/> 
<div class="container">
<div class="row mt-5 justify-content-center">
        <h1 class="text-info text-center">Ekstrakurikuler</h1> <br>
        <p class="text-muted text-center">Sekolah kami memiliki beberapa Ekstrakurikuler yang tersedia</p>
       <div class="row g-4">
            <!-- Card Item -->
            @foreach ( $ekskuls as $ekskul )
                
            <div class="col-md-4 col-sm-6">
                <div class="card text-center">
                    <img src={{ $ekskul->foto }} class="card-img mx-auto w-25" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $ekskul->nama }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            
            <x-footer/>
    </div>
    </body>
    </html>