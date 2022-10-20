<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
 use App\Models\Usuario;
use App\Models\Cliente;
use App\Models\Camarero;
use App\Models\Administrador;
use App\Models\Cajero;
use App\Models\Chef;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario=Usuario::create([
            'ci'=>'10925427',
            'nombre'=>'Tania',
            'ape_paterno'=>'Coaquira',
            'ape_materno'=>'Licota',
            'fechaRegistro'=>'2022-09-07 22:14:23',
            'tipo'=>'chef',
            'password'=>'123456',
            'email'=>'taniacoakira3838@gmail.com'
        ]);
        $usuario2=Usuario::create([
            'ci'=>'16990954',
            'nombre'=>'Laura',
            'ape_paterno'=>'Patzi',
            'ape_materno'=>'Tancara',
            'fechaRegistro'=>'2022-09-07 22:14:23',
            'tipo'=>'cliente',
            'password'=>'12345678',
            'email'=>'laura@gmail.com'
        ]);
        $chef= new chef;
        $chef->id = $usuario->id;
        $chef->save();
        $usuario->chef()->save($chef);
        //asignar un solo rol
        $usuario->assignRole('chef');

        $clientes=Usuario::factory(5)->has(Cliente::factory(),'cliente')->create(['tipo' => 'cliente',]);
        $chefs=Usuario::factory(5)->has(Chef::factory(),'chef')->create(['tipo' => 'chef',]);
        $cajeros=Usuario::factory(5)->has(Cajero::factory(),'cajero')->create(['tipo' => 'cajero',]);
        $camareros=Usuario::factory(5)->has(Camarero::factory(),'camarero')->create(['tipo' => 'camarero',]);
        //$clientes->assignRole('cliente');
        //$chefs->assignRole('cliente');
        //$cajeros->assignRole('cliente');
        //$camareros->assignRole('cliente');


    }
}
