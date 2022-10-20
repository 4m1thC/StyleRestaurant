<?php

namespace App\Http\Controllers;

use App\Models\Bebida;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Arr;


class BebidaController extends Controller
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
        return view('chef.bebida.create');
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
        $producto=Arr::add($producto,'categoria','bebida');
        if($request->hasFile('img')){
            $producto['img']=$request->file('img')->store('uploads','public');
        }
        Producto::insert($producto);
        $ultimoProducto=Producto::latest('id')->first();
        $bebida=$request->only('beneficio','tipo','nroPersonas');
        $id=$ultimoProducto['id'];
        $bebida=Arr::add($bebida,'id',$id);
        Bebida::insert($bebida);
        return redirect('chef/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function show(Bebida $bebida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function edit(Bebida $bebida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bebida $bebida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bebida $bebida)
    {
        //
    }
}
