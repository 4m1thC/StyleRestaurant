<?php

namespace App\Http\Controllers;

use App\Models\Almuerzo;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Platillo;
use Illuminate\Support\Arr;

class AlmuerzoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chef.almuerzo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto=$request->only('nombre','costo','descripcion','img');
        $producto=Arr::add($producto,'categoria','almuerzo');
        if($request->hasFile('img')){
            $producto['img']=$request->file('img')->store('uploads','public');
        }
        Producto::insert($producto);

        $ultimoProducto=Producto::latest('id')->first();
        $id=$ultimoProducto['id'];

        $platillo=$request->only('nroComesales');
        $platillo=Arr::add($platillo,'id',$id);
        $platillo=Arr::add($platillo,'tipo','almuerzo');
        Platillo::insert($platillo);

        $almuerzo=$request->only('sopa','segundo');
        $almuerzo=Arr::add($almuerzo,'id',$id);
        Almuerzo::insert($almuerzo);
        
        return redirect('chef/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Almuerzo  $almuerzo
     * @return \Illuminate\Http\Response
     */
    public function show(Almuerzo $almuerzo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Almuerzo  $almuerzo
     * @return \Illuminate\Http\Response
     */
    public function edit(Almuerzo $almuerzo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Almuerzo  $almuerzo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Almuerzo $almuerzo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Almuerzo  $almuerzo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Almuerzo $almuerzo)
    {
        //
    }
}
