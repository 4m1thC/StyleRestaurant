<?php

namespace App\Http\Controllers;

use App\Models\Postre;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PostreController extends Controller
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
         return view('chef.postre.create');
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
        $producto=Arr::add($producto,'categoria','postre');
        if($request->hasFile('img')){
            $producto['img']=$request->file('img')->store('uploads','public');
        }
        Producto::insert($producto);
        $ultimoProducto=Producto::latest('id')->first();
        $postre=$request->only('tipo','nroComesales');
        $id=$ultimoProducto['id'];
        $postre=Arr::add($postre,'id',$id);
        Postre::insert($postre);
        return redirect('chef/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postre  $postre
     * @return \Illuminate\Http\Response
     */
    public function show(Postre $postre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postre  $postre
     * @return \Illuminate\Http\Response
     */
    public function edit(Postre $postre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postre  $postre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postre $postre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postre  $postre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postre $postre)
    {
        //
    }
}
