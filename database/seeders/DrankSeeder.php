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
        ]);

        Drank::create([
            'dranknaam' => 'Hapjes',
            'drankkort' => 'ha'
        ]);
    }
}

