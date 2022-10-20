<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Cliente;
use App\Models\Camarero;
use App\Models\Administrador;
use App\Models\Cajero;
use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['usuarios']=Usuario::all();
        return view('administrador.usuario.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {//resources\views\administrador\usuario\create.blade.php
        return view('administrador.usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //$user= Usuario::create([
       //    'ci' => $request['ci'],
       //    'name' => $request['name'],
       //    'ape_paterno' => $request['ape_paterno'],
       //    'ape_materno' => $request['ape_materno'],
       //    'fechaRegistro' => $request['fechaRegistro'],
       //    'tipo' => $request['tipo'],
       //    'email' => $request['email'],
       //    //Hash::make codifica el campo password para que no sea visible
       //    'password' => Hash::make($request['password']),
       //    'estado' =>$request[0],
       //]);

       //$user->assignRole('cliente');

       

       $usuario=$request->only('ci','nombre','ape_paterno','ape_materno','fechaRegistro','tipo','email','password');
       $usuario['password']=Hash::make($request['password']);
       $user= new Usuario;
       $user->ci = $usuario['ci'];
       $user->nombre = $usuario['nombre'];
       $user->ape_paterno = $usuario['ape_paterno'];
       $user->ape_materno = $usuario['ape_materno'];
       $user->fechaRegistro = $usuario['fechaRegistro'];
       $user->tipo = $usuario['tipo'];
       $user->email = $usuario['email'];
       $user->password = $usuario['password'];
       $user->save();
       if($user->tipo == 'cliente'){
        $cliente= new Cliente;
        //$cliente->id = $user->id;
        $cliente->save();
        $user->cliente()->save($cliente);
        $user->assignRole('cliente');
       }
       if($user->tipo == 'camarero'){
        $camarero= new Camarero;
        //$camarero->id = $user->id;
        $camarero->save();
        $user->camarero()->save($camarero);
        $user->assignRole('camarero');
       }
       if($user->tipo == 'chef'){
        $chef= new Chef;
        //$chef->id = $user->id;
        $chef->save();
        $user->chef()->save($chef);
        $user->assignRole('chef');
       }
       if($user->tipo == 'cajero'){
        $cajero= new Cajero;
        //$cajero->id = $user->id;
        $cajero->save();
        $user->cajero()->save($cajero);
        $user->assignRole('cajero');
       }
       if($user->tipo == 'administrador'){
        $administrador= new Administrador;
        //administrador->id = $user->id;
        $administrador->save();
        $user->administrador()->save($administrador);
        $user->assignRole('administrador');
       }
//
     //  $out = new \Symfony\Component\Console\Output\ConsoleOutput();
     //  $out->writeln($user->id);
       
      return redirect('administrador/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
       //extrae un registro mediante findORfile
       $usuario=Usuario::findOrFail($id);
          $out = new \Symfony\Component\Console\Output\ConsoleOutput();
     $out->writeln($usuario);
       //mediante compact se le pasa el registro de manera que no es una lista de registro como el index
       return view('administrador.usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=$request->except(['_token','_method']);
        //actualizo con datosEmp  con id de codigoi
       
        Usuario::where('id','=',$id)->update($datos);

        $usuario=Usuario::findOrFail($id);
        //mediante compact se le pasa el registro de manera que no es una lista de registro como el index
        //return route('usuario.edit', compact('usuario'));

        //redireciona a una ruta existente no vista
        return redirect('administrador/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        $usuario=Usuario::find($id);
        $mesas=$usuario::with('cliente.mesaDelete')->get();
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
    $out->writeln($mesas);
        $usuario->delete();
        //redireciona a una ruta existente no vista
        return redirect('administrador/usuario');
    }
}
