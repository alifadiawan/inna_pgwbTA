<?php

namespace Database\Seeders;

use App\Models\ekstrakulikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\x;

class EkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ekskul = [
            [
                'nama_ekskul' =>'Basket',
            ],
            [
                'nama_ekskul' =>'Voli',
            ],
            [
                'nama_ekskul' =>'Paduan Suara',
            ],
            [
                'nama_ekskul' =>'Karawitan',
            ],
            [
                'nama_ekskul' =>'Karate',
            ],
            [
                'nama_ekskul' =>'Futsal',
            ],
            [
                'nama_ekskul' =>'Dance',
            ],
            [
                'nama_ekskul' =>'Pramuka',
            ],
            [
                'nama_ekskul' =>'Paskibraka',
            ],
            [
                'nama_ekskul' =>'Teater',
            ],
            [
                'nama_ekskul' =>'Band',
            ],
            [
                'nama_ekskul' =>'it club',
            ],
            [
                'nama_ekskul' =>'English Club',
            ],
            [
                'nama_ekskul' =>'Japan Club',
            ],
            [
                'nama_ekskul' =>'SKI',
            ],
            [
                'nama_ekskul' =>'Karisma',
            ],
            [
                'nama_ekskul' =>'SBLH',
            ],
        ];
        $anggota = [
            [
                'ekstrakulikuler_id' =>12,
                'anggota_id' =>7,
            ],
            [
                'ekstrakulikuler_id' =>14,
                'anggota_id' =>8,
            ],
            [
                'ekstrakulikuler_id' =>15,
                'anggota_id' =>10,
            ],
            [
                'ekstrakulikuler_id' =>16,
                'anggota_id' =>10,
            ],
            [
                'ekstrakulikuler_id' =>17,
                'anggota_id' =>11,
            ],
            [
                'ekstrakulikuler_id' =>15,
                'anggota_id' =>12,
            ],
            [
                'ekstrakulikuler_id' =>16,
                'anggota_id' =>12,
            ],
        ];


        ekstrakulikuler::insert($ekskul);
        x::insert($anggota);
    }
}
