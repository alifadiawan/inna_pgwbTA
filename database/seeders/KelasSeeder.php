<?php

namespace Database\Seeders;

use App\Models\kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            ['nama_kelas' => '10 AKL 1'],
            ['nama_kelas' => '10 AKL 2'],
            ['nama_kelas' => '10 AKL 3'],
            ['nama_kelas' => '10 AKL 4'],
            ['nama_kelas' => '10 AKL 4'],
            ['nama_kelas' => '10 OTKP 1'],
            ['nama_kelas' => '10 OTKP 2'],
            ['nama_kelas' => '10 OTKP 3'],
            ['nama_kelas' => '10 OTKP 4'],
            ['nama_kelas' => '10 OTKP 5'],
            ['nama_kelas' => '10 RPL 1'],
            ['nama_kelas' => '10 RPL 2'],
            ['nama_kelas' => '10 TKJ 1'],
            ['nama_kelas' => '10 TKJ 2'],
            ['nama_kelas' => '10 MM 1'],
            ['nama_kelas' => '10 MM 2'],
            ['nama_kelas' => '10 BDP 1'],
            ['nama_kelas' => '10 BDP 2'],
            ['nama_kelas' => '10 PH 1'],
            ['nama_kelas' => '10 PH 2'],
            ['nama_kelas' => '10 DKV 1'],
            ['nama_kelas' => '10 DKV 2'],
            ['nama_kelas' => '10 PSPT 1'],
            ['nama_kelas' => '10 PSPT 2'],
            ['nama_kelas' => '11 AKL 1'],
            ['nama_kelas' => '11 AKL 2'],
            ['nama_kelas' => '11 AKL 3'],
            ['nama_kelas' => '11 AKL 4'],
            ['nama_kelas' => '11 AKL 5'],
            ['nama_kelas' => '11 OTKP 1'],
            ['nama_kelas' => '11 OTKP 2'],
            ['nama_kelas' => '11 OTKP 3'],
            ['nama_kelas' => '11 OTKP 4'],
            ['nama_kelas' => '11 OTKP 5'],
            ['nama_kelas' => '11 RPL 1'],
            ['nama_kelas' => '11 RPL 2'],
            ['nama_kelas' => '11 TKJ 1'],
            ['nama_kelas' => '11 TKJ 2'],
            ['nama_kelas' => '11 MM 1'],
            ['nama_kelas' => '11 MM 2'],
            ['nama_kelas' => '11 BDP 1'],
            ['nama_kelas' => '11 BDP 2'],
            ['nama_kelas' => '11 PH 1'],
            ['nama_kelas' => '11 PH 2'],
            ['nama_kelas' => '11 DKV 1'],
            ['nama_kelas' => '11 DKV 2'],
            ['nama_kelas' => '11 PSPT 1'],
            ['nama_kelas' => '11 PSPT 2'],
            ['nama_kelas' => '12 AKL 1'],
            ['nama_kelas' => '12 AKL 2'],
            ['nama_kelas' => '12 AKL 3'],
            ['nama_kelas' => '12 AKL 4'],
            ['nama_kelas' => '12 AKL 5'],
            ['nama_kelas' => '12 OTKP 1'],
            ['nama_kelas' => '12 OTKP 2'],
            ['nama_kelas' => '12 OTKP 3'],
            ['nama_kelas' => '12 OTKP 4'],
            ['nama_kelas' => '12 OTKP 5'],
            ['nama_kelas' => '12 RPL 1'],
            ['nama_kelas' => '12 RPL 2'],
            ['nama_kelas' => '12 TKJ 1'],
            ['nama_kelas' => '12 TKJ 2'],
            ['nama_kelas' => '12 MM 1'],
            ['nama_kelas' => '12 MM 2'],
            ['nama_kelas' => '12 BDP 1'],
            ['nama_kelas' => '12 BDP 2'],
            ['nama_kelas' => '12 PH 1'],
            ['nama_kelas' => '12 PH 2'],
            ['nama_kelas' => '12 DKV 1'],
            ['nama_kelas' => '12 DKV 2'],
            ['nama_kelas' => '12 PSPT 1'],
            ['nama_kelas' => '12 PSPT 2']
        ];

        kelas::insert($kelas);
    }
}
