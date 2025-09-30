<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beritaList = [
            [
                'judul' => 'SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja',
                'gambar' => 'https://assets.radartasik.id/main/2023/10/SMKN-4.jpg',
                'isi' => 'https://radartasik.id/2023/10/12/smkn-4-tasikmalaya-koneksikan-iduka-dengan-pencari-kerja/',
            ],
            [
                'judul' => 'SMKN 4 Tasikmalaya Terapkan Aturan Ketat Terhadap Kendaraan Bermotor',
                'gambar' => 'https://assets.radartasik.id/main/2025/01/SMKn-4-tasikmalaya.webp',
                'isi' => 'https://radartasik.id/2025/01/02/smkn-4-tasikmalaya-terapkan-aturan-ketat-terhadap-kendaraan-bermotor/',
            ],
            [
                'judul' => 'Kapolsek Berikan Penyuluhan tentang Larangan Knalpot Brong dan Geng Motor di...',
                'gambar' => 'https://newstasikmalaya.com/storage/kapolsek-cibeureum-berikan-penyuluhan-1024xauto.jpg',
                'isi' => 'https://newstasikmalaya.com/kapolsek-cibeureum-berikan-penyuluhan-tentang-larangan-knalpot-brong-dan-geng-motor-di-smkn-4-kota-tasikmalaya',
            ],
            [
                'judul' => 'Tujuh Siswa SMKN 4 Tasikmalaya Raih Beasiswa dari Yayasan Astra Honda Motor',
                'gambar' => 'https://assets.radartasik.id/main/2024/10/SMKN-4-tasikmalaya-raih-beasiswa-AHM.webp',
                'isi' => 'https://radartasik.id/2024/10/07/tujuh-siswa-smkn-4-tasikmalaya-raih-beasiswa-dari-yayasan-astra-honda-motor/',
            ]
        ];

        DB::table('beritas')->insert($beritaList);
    }
}
