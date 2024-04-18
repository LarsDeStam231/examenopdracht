<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Drank;

class DrankSeeder extends Seeder
{
    public function run()
    {
        Drank::create([
            'dranknaam' => 'Dranken',
            'drankkort' => 'dr'
        ]); //maakt voor elk apart item een rij aan in de database

        Drank::create([
            'dranknaam' => 'Hapjes',
            'drankkort' => 'ha'
        ]);
    }
}

