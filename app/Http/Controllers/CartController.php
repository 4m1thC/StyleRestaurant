<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\SeAdiciona;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;


class CartController extends Controller
{
    public function shop()
    {
        $products = Producto::all();
       //dd($products);
        return view('shop')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cliente.cart')->with(['cartCollection' => $cartCollection]);
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'El Producto ha sido removido!');
    }

    public function add(Request $request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        
        
        return redirect()->route('cart.index')->with('success_msg', 'Producto Agregado a sú Pedido!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Pedido Actualizado!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Puedes elegir mas productos en el menu!');
    }

}
