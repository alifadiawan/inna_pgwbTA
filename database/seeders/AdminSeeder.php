<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        user::create([
            'name' => 'futsal',
            'email' => 'futsal@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'futsal'
        ]);
        user::create([
            'name' => 'dance',
            'email' => 'dance@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'dance'
        ]);
        user::create([
            'name' => 'pmr',
            'email' => 'pmr@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'pmr'
        ]);
        user::create([
            'name' => 'basket',
            'email' => 'basket@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'basket'
        ]);
        user::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);
    }
}
