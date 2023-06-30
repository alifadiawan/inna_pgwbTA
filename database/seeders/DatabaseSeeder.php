<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\kelas;
use App\Models\ekstrakulikuler;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            KelasSeeder::class,
            SiswaSeeder::class,
            EkskulSeeder::class,
            anggotaEkskulSeeder::class,
        ]);

   }
}
