<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class CreateRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name_role' => 'Administrador'
        ]);
        Role::create([
            'name_role' => 'Cliente'
        ]);
        Role::create([
            'name_role' => 'Cliente Plus'
        ]);
    }
}
