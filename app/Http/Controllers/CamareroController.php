<?php

namespace App\Http\Controllers;

use App\Models\Camarero;
use App\Models\Usuario;
use Illuminate\Http\Request;

class CamareroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //prueeva de git
        $datos['usuarios']=Usuario::paginate(50);
        return view('camarero2.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Camarero  $camarero
     * @return \Illuminate\Http\Response
     */
    public function show(Camarero $camarero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Camarero  $camarero
     * @return \Illuminate\Http\Response
     */
    public function edit(Camarero $camarero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Camarero  $camarero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Camarero $camarero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Camarero  $camarero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Camarero $camarero)
    {
        //
    }
}
