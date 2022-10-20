<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' =>'Administrador']);
        $role2 = Role::create(['name' =>'Chef']);
        $role3 = Role::create(['name' =>'Cajero']);
        $role4 = Role::create(['name' =>'Camarero']);
        $role5 = Role::create(['name' =>'Cliente']);
    }
}
