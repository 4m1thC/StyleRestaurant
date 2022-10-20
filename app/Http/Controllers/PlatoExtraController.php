<?php

namespace App\Http\Controllers;

use App\Models\PlatoExtra;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Platillo;
use Illuminate\Support\Arr;

class PlatoExtraController extends Controller
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
        return view('chef.platoExtra.create');
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
        $producto=Arr::add($producto,'categoria','plato extra');
        if($request->hasFile('img')){
            $producto['img']=$request->file('img')->store('uploads','public');
        }
        Producto::insert($producto);

        $ultimoProducto=Producto::latest('id')->first();
        $id=$ultimoProducto['id'];

        $platillo=$request->only('nroComesales');
        $platillo=Arr::add($platillo,'id',$id);
        $platillo=Arr::add($platillo,'tipo','plato extra');
        Platillo::insert($platillo);

        $platoExtra=$request->only('guarnicion');
        $platoExtra=Arr::add($platoExtra,'id',$id);
        PlatoExtra::insert($platoExtra);
        
        return redirect('chef/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlatoExtra  $platoExtra
     * @return \Illuminate\Http\Response
     */
    public function show(PlatoExtra $platoExtra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlatoExtra  $platoExtra
     * @return \Illuminate\Http\Response
     */
    public function edit(PlatoExtra $platoExtra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlatoExtra  $platoExtra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlatoExtra $platoExtra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlatoExtra  $platoExtra
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlatoExtra $platoExtra)
    {
        //
    }
}
