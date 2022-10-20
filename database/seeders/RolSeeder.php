<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
    *  $role = Role::create(['name' => 'writer']);
     *$permission = Permission::create(['name' => 'edit articles']);
     * 
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>'administrador']);
        $role2=Role::create(['name'=>'chef']);
        $role3=Role::create(['name'=>'cliente']);
        $role4=Role::create(['name'=>'camarero']);
        $role5=Role::create(['name'=>'cajero']);

        //para asignar run per a rol syncRoles([arrar de roles])
        Permission::create(['name' => 'usuario.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'usuario.store'])->syncRoles([$role1]);
        Permission::create(['name' => 'usuario.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'usuario.show'])->syncRoles([$role1]);
        Permission::create(['name' => 'usuario.update'])->syncRoles([$role1]);
        Permission::create(['name' =>'usuario.destroy'])->syncRoles([$role1]);
        Permission::create(['name' => 'usuario.edit'])->syncRoles([$role1]);

        Permission::create(['name' => 'producto.index'])->syncRoles([$role2]);
        
        
        
    }
}
