<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakulikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ekstrakulikulerList = [
            [
                'nama' => 'English Club',
                'foto' => '/assets/img/english.jpg',
            ],
            [
                'nama' => 'Bulu Tangkis',
                'foto' => '/assets/img/bultang.jpg',
            ],
            [
                'nama' => 'IT Club',
                'foto' => '/assets/img/it.jpg',
            ],
            [
                'judul' => 'Cinematography',
                'gambar' => '/assets/img/cinem.jpg',
            ],
            [
                'nama' => 'Paskibra',
                'foto' => '/assets/img/paskib.jpg',
            ],
            [
                'nama' => 'PKS',
                'foto' => '/assets/img/pkss.jpg',
            ],
            [
                'nama' => 'Pramuka',
                'foto' => '/assets/img/pramukaaa.jpg',
            ],
            [
                'nama' => 'Futsal',
                'foto' => '/assets/img/futsal.jpg',
            ],
            [
                'nama' => 'PMR',
                'foto' => '/assets/img/pmrr.jpg',
            ],
            [
                'nama' => 'Laskar Pustaka',
                'foto' => '/assets/img/laskar.jpg',
            ],
            [
                'nama' => 'Sepak Bola',
                'foto' => '/assets/img/sepak.jpg',
            ],
            [
                'nama' => 'Basket',
                'foto' => '/assets/img/basket.jpg',
            ],
            [
                'nama' => 'Voli',
                'foto' => '/assets/img/voly.jpg',
            ],
            [
                'nama' => 'IRMA',
                'foto' => '/assets/img/rohis.jpg',
            ],
            [
                'nama' => 'Seni',
                'foto' => '/assets/img/seni.jpg',
            ],
            [
                'nama' => 'PLH',
                'foto' => '/assets/img/plhh.jpg',
            ],
            [
                'nama' => 'Boxing',
                'foto' => '/assets/img/boxing.jpg',
            ],
            [
                'nama' => 'PKS',
                'foto' => '/assets/img/pkss.jpg',
            ]
        ];

        DB::table('ekstrakulikulers')->insert($ekstrakulikulerList);
    }
}
