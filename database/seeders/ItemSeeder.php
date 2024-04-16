<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Itemseeder extends Seeder
{
    public function run()
    {
        Item::create([
            'itemnaam' => 'Tonic',
            'itemprijs' => '2.95',
            'subdrankkort' => 'fd'
        ]);

        Item::create([
            'itemnaam' => 'Seven Up',
            'itemprijs' => '2.95',
            'subdrankkort' => 'fd'
        ]);

        Item::create([
            'itemnaam' => 'Verse jus',
            'itemprijs' => '3.95',
            'subdrankkort' => 'fd'
        ]);

        Item::create([
            'itemnaam' => 'Bitterballen met mosterd',
            'itemprijs' => '4.00',
            'subdrankkort' => 'wh'
        ]);

        Item::create([
            'itemnaam' => 'Vlammetjes met chilisaus',
            'itemprijs' => '4.00',
            'subdrankkort' => 'wh'
        ]);

        Item::create([
            'itemnaam' => 'Portie kaas met mosterd',
            'itemprijs' => '4.00',
            'subdrankkort' => 'kh'
        ]);

        Item::create([
            'itemnaam' => 'Koffie',
            'itemprijs' => '2.45',
            'subdrankkort' => 'wd'
        ]);

        Item::create([
            'itemnaam' => 'Thee',
            'itemprijs' => '2.45',
            'subdrankkort' => 'wd'
        ]);

        Item::create([
            'itemnaam' => 'chocolademelk',
            'itemprijs' => '2.95',
            'subdrankkort' => 'wd'
        ]);

        Item::create([
            'itemnaam' => 'Espresso',
            'itemprijs' => '2.45',
            'subdrankkort' => 'wd'
        ]);

        Item::create([
            'itemnaam' => 'Cappuccino',
            'itemprijs' => '2.75',
            'subdrankkort' => 'wd'
        ]);

        Item::create([
            'itemnaam' => 'Koffie verkeerd',
            'itemprijs' => '2.95',
            'subdrankkort' => 'wd'
        ]);

        Item::create([
            'itemnaam' => 'Latte Macchiato',
            'itemprijs' => '3.95',
            'subdrankkort' => 'wd'
        ]);

        Item::create([
            'itemnaam' => 'Pilsner',
            'itemprijs' => '2.95',
            'subdrankkort' => 'bi'
        ]);

        Item::create([
            'itemnaam' => 'Weizen',
            'itemprijs' => '3.95',
            'subdrankkort' => 'bi'
        ]);

        Item::create([
            'itemnaam' => 'Per glas',
            'itemprijs' => '3.95',
            'subdrankkort' => 'hw'
        ]);

        Item::create([
            'itemnaam' => 'Per fles',
            'itemprijs' => '17.95',
            'subdrankkort' => 'hw'
        ]);

        Item::create([
            'itemnaam' => 'Seizoenswijn',
            'itemprijs' => '3.95',
            'subdrankkort' => 'hw'
        ]);

        Item::create([
            'itemnaam' => 'Rode port',
            'itemprijs' => '3.60',
            'subdrankkort' => 'hw'
        ]);

        Item::create([
            'itemnaam' => 'Stender',
            'itemprijs' => '2.95',
            'subdrankkort' => 'bi'
        ]);

        Item::create([
            'itemnaam' => 'Palm',
            'itemprijs' => '3.60',
            'subdrankkort' => 'bi'
        ]);

        Item::create([
            'itemnaam' => 'Kasteel donker',
            'itemprijs' => '4.75',
            'subdrankkort' => 'bi'
        ]);

        Item::create([
            'itemnaam' => 'Burgse zot',
            'itemprijs' => '3.95',
            'subdrankkort' => 'bi'
        ]);

        Item::create([
            'itemnaam' => 'Grimbergen dubbel',
            'itemprijs' => '3.95',
            'subdrankkort' => 'bi'
        ]);

        Item::create([
            'itemnaam' => 'Chaudfontaine rood',
            'itemprijs' => '2.75',
            'subdrankkort' => 'fd'
        ]);
    }
}
