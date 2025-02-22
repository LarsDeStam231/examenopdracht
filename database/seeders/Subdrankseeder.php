<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subdrank;

class Subdrankseeder extends Seeder
{
    public function run()
    {
        Subdrank::create([
            'subdranknaam' => 'Warme dranken',
            'drankkort' => 'dr',
            'subdrankkort' => 'wd'
        ]); //maakt voor elk apart item een rij aan in de database
    
        Subdrank::create([
            'subdranknaam' => 'Bieren',
            'drankkort' => 'dr',
            'subdrankkort' => 'bi'
        ]);
    
        Subdrank::create([
            'subdranknaam' => 'Huiswijnen',
            'drankkort' => 'dr',
            'subdrankkort' => 'hw'
        ]);
    
        Subdrank::create([
            'subdranknaam' => 'Frisdranken',
            'drankkort' => 'dr',
            'subdrankkort' => 'fd'
        ]);
    
        Subdrank::create([
            'subdranknaam' => 'Warme hapjes',
            'drankkort' => 'ha',
            'subdrankkort' => 'wh'
        ]);
    
        Subdrank::create([
            'subdranknaam' => 'Koude hapjes',
            'drankkort' => 'ha',
            'subdrankkort' => 'kh'
        ]);
    }
    
}
