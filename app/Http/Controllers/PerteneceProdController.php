<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\PerteneceProd;
use App\Models\Ingrediente;
use App\Models\Producto;
use Illuminate\Http\Request;


class PerteneceProdController extends Controller
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
    public function create($idProd)
    {   //get() trae registros en forma de collecion
        //pluck trae un array el orden donde vaya importa va despues de where
        
        
        $producto=Producto::find($idProd);
        $ingredientesAgregados=$producto->ingredientes()->get();
        $idsIngAgregados=DB::table('pertenece_prods')->where('idProd','=',$idProd)->pluck('idIngrediente');
       $ingredientesNoAgregados=DB::table('ingredientes')->whereNotIn('id',$idsIngAgregados)->get();
        return view('chef.perteneceProd.create',compact('ingredientesNoAgregados','producto','ingredientesAgregados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($idIng, $idProd)
    {
        $producto=Producto::find($idProd);
        $producto->ingredientes()->attach($idIng);
        return redirect('chef/perteneceProd/create/'.$idProd);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PerteneceProd  $perteneceProd
     * @return \Illuminate\Http\Response
     */
    public function show(PerteneceProd $perteneceProd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerteneceProd  $perteneceProd
     * @return \Illuminate\Http\Response
     */
    public function edit(PerteneceProd $perteneceProd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerteneceProd  $perteneceProd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerteneceProd $perteneceProd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerteneceProd  $perteneceProd
     * @return \Illuminate\Http\Response
     */
    public function destroy($idIngregiente,$idProd)
    {  
        

        $producto=Producto::find($idProd);
        $producto->ingredientes()->detach($idIngregiente);
        return redirect('chef/perteneceProd/create/'.$idProd);
    }
}
