<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;
use Database\Seeders\HospitalsSeeder;
use Database\Seeders\PatientsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'alfred',
            'password' => Hash::make('password123'),
        ]);

        $this->call([
            HospitalsSeeder::class,
            PatientsSeeder::class,
        ]);
    }
}
