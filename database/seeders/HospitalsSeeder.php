<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Hospital;
use Illuminate\Support\Facades\DB;

class HospitalsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Hospital::create([
            'hospital_name' => 'RS Hasan Sadikin',
            'address' => 'Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161',
            'email' => 'humprorshs@gmail.com',
            'phone_number' => '0222551111'
        ]);

        Hospital::create([
            'hospital_name' => 'RS Mitra Kasih',
            'address' => 'Jl. Jend. H. Amir Machmud No.341, Cigugur Tengah, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40522',
            'email' => 'rsmitrakasih@gmail.com',
            'phone_number' => '0226652774'
        ]);
    }
}
