<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Platillo;
use App\Models\Bebida;
use App\Models\PlatoExtra;
use App\Models\Almuerzo;
use App\Models\Postre;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\PerteneceMenu;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index1()//cambie index por index1
    {   
        $productos = Producto::all();
        return view('cliente.menu',compact('productos'));
    }
    

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        $productos = Producto::all();
        return view('chef.producto.index',compact('productos'));
    }
     

    public function create()
    {
        return view('chef.producto.create');
        
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
        $producto=Arr::add($producto,'categoria','porcion especial');
        if($request->hasFile('img')){
            $producto['img']=$request->file('img')->store('uploads','public');
        }
       Producto::insert($producto);
       return redirect('chef/producto');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show1($id)
    {
        $producto=Producto::findOrFail($id);
        return view('cliente.showproducto', compact('producto'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //extrae un registro mediante findORfile
       $producto=Producto::findOrFail($id);
       //mediante compact se le pasa el registro de manera que no es una lista de registro como el index
       return view('chef.producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto=$request->only('nombre','categoria','costo','descripcion','img');
        $producto=Arr::add($producto,'id',$id);
        //actualizo con datosEmp  con id de codigoi
        if($request->hasFile('img')){
            $producto['img']=$request->file('img')->store('uploads','public');
        }
       
        Producto::where('id','=',$id)->update($producto);

        //redireciona a una ruta existente no vista
        return redirect('chef/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=Producto::findOrFail($id);
        switch ($producto['categoria']) {
            case "porcion especial":
                Producto::destroy($id); 
                break;
            case "bebida":
                Producto::destroy($id); 
                Bebida::destroy($id);
                break;
            case "postre":
                Producto::destroy($id); 
                Postre::destroy($id);
                break;
            case "plato extra":
                Producto::destroy($id); 
                Platillo::destroy($id); 
                PlatoExtra::destroy($id);
                break;
            case "almuerzo":
                Producto::destroy($id); 
                Platillo::destroy($id); 
                Almuerzo::destroy($id);
                break;
            default:
                break;
        }
        
        return redirect('chef/producto');
    }
    public function adicionaMenu($id,Request $request )
    { 
      $producto= Producto::find($id);
      $dia=$request['dia'];
      $cantidad=$request['cantidad'];
      $menu= Menu::where('dia',$dia)->first(); 
      $mensaje="";
      if(isset($menu) ){
        $relacion=PerteneceMenu::where('idMenu',$menu->id)->where('idProd',$id)->first();
        if(!isset($relacion)){
            $menu->productos1()->attach($id, ['cantidad' => $cantidad]);
            $mensaje="El producto ".$producto->nombre." se añadio correctamente al menu del dia ".$dia;
         }
         else{
            $mensaje="El producto ".$producto->nombre." ya existe en el menu del dia ".$dia;
         }
      }else{
        $mensaje="No se pudo añadir el producto ".$producto->nombre." por que el menu del dia ".$dia." no exite";
      }
     return redirect('chef/producto')->with(['success' => $mensaje]);
    
    }

}
