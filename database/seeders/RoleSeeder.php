<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Role;

class RoleSeeder extends Seeder
{
    
    public function run()
    {
        Role::create([
            'rolename' => 'Admin'
        ]);

        Role::create([
            'rolename' => 'Barman'
        ]);

        Role::create([
            'rolename' => 'Kok'
        ]);

        Role::create([
            'rolename' => 'Gebruiker'
        ]);
    }
}
