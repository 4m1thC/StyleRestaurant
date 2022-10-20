<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\PerteneceMenu;
use Carbon\Carbon;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   \Cart::clear();
        Carbon::setLocale('es');
        $date = Carbon::now()->isoFormat('dddd'); 
        //menu no debe ser nulo ya que llama a sus productos
        $menu=Menu::where("dia",$date)->first();
        return view('cliente.menu',compact('menu'));
    }
    public function index1()
    {   
        $menu = Menu::find(1);
        return view('cliente.menupedidos',compact('menu'));
    }
    public function categories()
    {   
        $stock=[];
        $productos=[];
        Carbon::setLocale('es');
        $date = Carbon::now()->isoFormat('dddd'); 
        $menu=Menu::where("dia",$date)->first();
        if(isset($menu)){
        $menu=Menu::where("dia",$date)->first();
        $productos=$menu->productos()->get()->groupBy('categoria');
        $stock=PerteneceMenu::where("idMenu",$menu->id)->get();
        
        }
        
        
        return view('cliente.categorias',compact('menu','productos'));
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
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }

    public function listar()
    {   Carbon::setLocale('es');
        $date = Carbon::now()->isoFormat('dddd'); 
        //menu no debe ser nulo ya que llama a sus productos
        $stock=[];
        $productos=[];
        $menu=Menu::where("dia",$date)->first();
        if(isset($menu)){
        $productos=$menu->productos1()->get()->groupBy('categoria');
         $stock=PerteneceMenu::where("idMenu",$menu->id)->get();
        }

        return view('chef.menu.index', compact('productos','stock','menu'));
    }
    public function listarPorDia( Request $request)
    {   
        //menu no debe ser nulo ya que llama a sus productos
        $stock=[];
        $productos=[];
        $dia=$request['dia'];
        $menu=Menu::where("dia",$dia)->first();
        if(isset($menu)){
        $menu=Menu::where("dia",$dia)->first();
        $productos=$menu->productos1()->get()->groupBy('categoria');
         $stock=PerteneceMenu::where("idMenu",$menu->id)->get();
        
        }
        
        return view('chef.menu.index', compact('productos','stock','menu'));
    }
    public function actualizarStock(Request $request,$idMenu,$idPproducto)
    {   
        $pertenencia=PerteneceMenu::where("idMenu",$idMenu)->where("idProd",$idPproducto)->first();
        $pertenencia->cantidad=$request['nuevo_stock'];
        $pertenencia->save();
        $menu=Menu::find($idMenu);
        $productos=$menu->productos1()->get()->groupBy('categoria');
         $stock=PerteneceMenu::where("idMenu",$menu->id)->get();
         
        return view('chef.menu.index', compact('productos','stock','menu'));
    
    }
    
}
