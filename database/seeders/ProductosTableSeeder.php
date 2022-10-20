<?php

namespace Database\Seeders;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    

    public function run()
    {   
        Producto::create([
            
            'nombre' => 'Almuerzo1',
            'categoria' => 'almuerzo',
            'costo' => 15.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/fQz5dz4/costillas.jpg'
        ]);
        
        Producto::create([
            'nombre' => 'Almuerzo2',
            'categoria' => 'almuerzo',
            'costo' => 15.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/fQz5dz4/costillas.jpg'
        ]);
        Producto::create([
            'nombre' => 'Almuerzo3',
            'categoria' => 'almuerzo',
            'costo' => 15.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/MPKXPnr/spaguetti.jpg'
        ]);
        Producto::create([
            'nombre' => 'Almuerzo4',
            'categoria' => 'almuerzo',
            'costo' => 15.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/fQz5dz4/costillas.jpg'
        ]);
        Producto::create([
            'nombre' => 'Almuerzo5',
            'categoria' => 'almuerzo',
            'costo' => 15.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/MPKXPnr/spaguetti.jpg'
        ]);
        Producto::create([
            'nombre' => 'Almuerzo6',
            'categoria' => 'almuerzo',
            'costo' => 15.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/fQz5dz4/costillas.jpg'
        ]);
        Producto::create([
            'nombre' => 'Almuerzo7',
            'categoria' => 'almuerzo',
            'costo' => 15.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/MPKXPnr/spaguetti.jpg'
        ]);
        Producto::create([
            'nombre' => 'Almuerzo8',
            'categoria' => 'almuerzo',
            'costo' => 15.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/MPKXPnr/spaguetti.jpg'
        ]);
        Producto::create([
            'nombre' => 'Almuerzo9',
            'categoria' => 'almuerzo',
            'costo' => 15.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/fQz5dz4/costillas.jpg'
        ]);
        Producto::create([
            'nombre' => 'Almuerzo10',
            'categoria' => 'almuerzo',
            'costo' => 15.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/MPKXPnr/spaguetti.jpg'
        ]);
        //platoextra
        Producto::create([
            'nombre' => 'Fricase',
            'categoria' => 'plato_extra',
            'costo' => 25.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/WBC07V8/fricase-boliviano.jpg'
        ]);
        Producto::create([
            'nombre' => 'Sabalo',
            'categoria' => 'plato_extra',
            'costo' => 35.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/MPKXPnr/spaguetti.jpg'
        ]);
        Producto::create([
            'nombre' => 'PiqueMacho',
            'categoria' => 'plato_extra',
            'costo' => 35.00,
            'descripcion' => 'una buena porcion de papas, carne y salchichas',
            'img' => 'https://i.ibb.co/WBC07V8/fricase-boliviano.jpg'
        ]);
        Producto::create([
            'nombre' => 'Fritanga',
            'categoria' => 'plato_extra',
            'costo' => 45.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/WBC07V8/fricase-boliviano.jpg'
        ]);
        Producto::create([
            'nombre' => 'Chicharron',
            'categoria' => 'plato_extra',
            'costo' => 45.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/MPKXPnr/spaguetti.jpg'
        ]);
        Producto::create([
            'nombre' => 'Ispi',
            'categoria' => 'plato_extra',
            'costo' => 20.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/fXgkmz3/majadito.jpg'
        ]);
        Producto::create([
            'nombre' => 'Plato paceño',
            'categoria' => 'plato_extra',
            'costo' => 30.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/MPKXPnr/spaguetti.jpg'
        ]);
        Producto::create([
            'nombre' => 'Filete asado a la parrilla',
            'categoria' => 'plato_extra',
            'costo' => 40.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/fXgkmz3/majadito.jpg'
        ]);
        Producto::create([
            'nombre' => 'Brochetas de pollo y carne',
            'categoria' => 'plato_extra',
            'costo' => 25.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/MPKXPnr/spaguetti.jpg'
        ]);
        Producto::create([
            'nombre' => 'Costillas a la parrilla',
            'categoria' => 'plato_extra',
            'costo' => 35.00,
            'descripcion' => 'nada',
            'img' => 'https://i.ibb.co/fQz5dz4/costillas.jpg'
        ]);
        Producto::create([
            'nombre' => 'Jugo de Naranja',
            'categoria' => 'bebida',
            'costo' => 5.00,
            'descripcion' => 'nada',
            'img' => 'https://i.ibb.co/1rcbwCn/maracuya.jpg'
        ]);
        Producto::create([
            'nombre' => 'Piña colada',
            'categoria' => 'bebida',
            'costo' => 15.00,
            'descripcion' => 'nada',
            'img' => 'https://i.ibb.co/1rcbwCn/maracuya.jpg'
        ]);
        Producto::create([
            'nombre' => 'Mocochinchi',
            'categoria' => 'Bebida',
            'costo' => 5.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/1rcbwCn/maracuya.jpg'
        ]);
        Producto::create([
            'nombre' => 'Papas fritas',
            'categoria' => 'guarnicion',
            'costo' => 5.00,
            'descripcion' => 'Rico en grasas naturales',
            'img' => 'https://i.ibb.co/L5131D1/Ensalada-Rusa.jpg'
        ]);
        Producto::create([
            'nombre' => 'pure de manzana',
            'categoria' => 'guarnicion',
            'costo' => 5.00,
            'descripcion' => 'Rico ',
            'img' => 'https://i.ibb.co/L5131D1/Ensalada-Rusa.jpg'
        ]);
        Producto::create([
            'nombre' => 'Ensalada de legumbres',
            'categoria' => 'guarnicion',
            'costo' => 5.00,
            'descripcion' => 'Rico ',
            'img' => 'https://i.ibb.co/L5131D1/Ensalada-Rusa.jpg'
        ]);
        Producto::create([
            'nombre' => 'Camotes fritos',
            'categoria' => 'guarnicion',
            'costo' => 5.00,
            'descripcion' => 'Rico ',
            'img' => 'https://i.ibb.co/L5131D1/Ensalada-Rusa.jpg'
        ]);
        Producto::create([
            'nombre' => 'Chips de platano',
            'categoria' => 'guarnicion',
            'costo' => 5.00,
            'descripcion' => 'Rico ',
            'img' => 'https://i.ibb.co/L5131D1/Ensalada-Rusa.jpg'
        ]);
        Producto::create([
            'nombre' => 'Gelatina',
            'categoria' => 'postre',
            'costo' => 5.00,
            'descripcion' => 'buen postre light ',
            'img' => 'https://i.ibb.co/L5131D1/Ensalada-Rusa.jpg'
        ]);
        Producto::create([
            'nombre' => 'Chiscake',
            'categoria' => 'postre',
            'costo' => 5.00,
            'descripcion' => 'Rico ',
            'img' => 'https://i.ibb.co/L5131D1/Ensalada-Rusa.jpg'
        ]);
    



    }
}
