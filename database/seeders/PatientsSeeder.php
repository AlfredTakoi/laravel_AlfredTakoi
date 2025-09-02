<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Patient;
use Illuminate\Support\Facades\DB;

class PatientsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Patient::create([
            'patient_name' => 'Alfred G Takoi',
            'address' => 'Jl Cibogo Permai 2 No. 5',
            'phone_number' => '083865079814',
            'hospital_id' => 1
        ]);

        Patient::create([
            'patient_name' => 'Budi Sudarsono',
            'address' => 'Jl. Kihapit 5 No.4',
            'phone_number' => '081343242342',
            'hospital_id' => 2
        ]);
    }
}
