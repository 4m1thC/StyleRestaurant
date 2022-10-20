<?php

namespace App\Http\Controllers;


use App\Models\Cliente;
use App\Models\Mesa;
use App\Models\Pedido;
use App\Models\Cajero;
use App\Models\Producto;
use App\Models\SeAdiciona;
use Illuminate\Http\Request;
use Carbon\Carbon;


use App\Models\Menu;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
       
        return view('cliente.pedido.index'); 
    }

    public function indexCamarero()
    {
        /**PEDIDOS CAMARERO -INI */
        


        $datos['pedidos']=Pedido::paginate(10);
        return view('camarero.listaDePedidos.index',$datos);

        /**PEDIDOS CAMARERO -INI */


        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Menu $menu)
    {

        $mesas =Mesa::where('estado','=',0)->pluck('id');
        return view('cliente.pedido.create',compact('menu','mesas'));

        
        return view('cliente.pedido.create');
        
    }

    public function createCamarero()
    {
         /**PEDIDOS CAMARERO -INI */
         return view('camarero.listaDePedidos.create');

         /**PEDIDOS CAMARERO -INI */
        
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = Pedido::create($request->all());

        $pedido->fechaP = Carbon::now();
        $pedido->estado= false;
        $pedido->estadoPed= 'Pendiente';
        //decrementamos en el stock de menu segun producto
        Carbon::setLocale('es');
        $date = Carbon::now()->isoFormat('dddd'); 
        
        $menu=Menu::where("dia",$date)->first();

        
        foreach (\Cart::getContent() as $item) {
            $pedido->productos()->attach($item->id,['cantidad'=>$item->quantity]);
            $producto= Menu::find($menu->id)->productos->find($item->id)->pivot->decrement('cantidad',$item->quantity);
            
            
        }
        $pedido->costoTotal=\Cart::getTotal();
        $pedido->save();
        
        $cliente = Cliente::find($pedido->idCliente);
        $cliente->mesas()->attach($request->mesa_id);

        $cliente->save();
        
         
        return view('cliente.pedido.show', compact('menu','pedido'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */

    public function show(Pedido $pedido)
    {  
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Responses
     */
    public function update(Request $request,  $id)
    {   
      return view('cliente/pedido/show', compact('pedido'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pedido::destroy($id);
        return redirect('camarero/listaDePedidos');

    }

    public function listar()
    
    {
        $date = Carbon::now()->toDateString();
        //$pedidos=Pedido::where("entregado",false)->whereDate("fechaF",$date)->where("estado",true)->get();
        
        $pedidos=Pedido::with('cajero.usuario','cliente1.usuario','camarero.usuario')->where("estadoPed","pendiente")->whereDate("fechaF",$date)->get();//carga ansiosa
       
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln($pedidos);

       
        return view('chef.pedidoPendientes.index',compact('pedidos')); 
    }

    public function listarProductos($idPedido){
       $pedido=Pedido::find($idPedido);
       $productos=$pedido->productos1()->get()->groupBy("categoria");
      
   //$out = new \Symfony\Component\Console\Output\ConsoleOutput();
   //   $out->writeln(get_class($productos));
      return  view('chef.pedidoPendientes.productosPed',compact('productos','pedido',));
    }

    public function actualizarEstado($id,$estado){
        $pedido=Pedido::find($id);
        $pedido->estadoPed=$estado;
        $pedido->save();
        return redirect('chef/pedidos')->with('Se creo con exito');
     }
    
}
