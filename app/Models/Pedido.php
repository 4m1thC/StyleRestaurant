<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;


class Pedido extends Model
{
    use HasFactory;
    use SoftDeletes, CascadeSoftDeletes;  
    protected $cascadeDeletes = ['productosDelete'];
    protected $dates = ['deleted_at'];
    
    protected $fillable=[

        'idCliente',
        'idCajero',
        'idCamarero',
        'Costototal',
        'fechaP',
        'fechaF',
        'tipo',
        'obs',
        'estado'    
    ];
   
    //relacion muchos a muchos inversa con producto
    public function productos(){

        return $this ->belongsToMany('App\Models\Producto','se_adicionas', 'idPedido', 'idProducto')->withPivot('cantidad'); 

    }
    //relacion uno a muchos inversa con cliente
    public function cliente(){
        return $this->belongsTo(cliente::class);
    }


    public function productos1(){
        return $this->belongsToMany('App\Models\Producto', 'se_adicionas', 'idPedido','idProducto' );
    }

    public function cajero()
    {
        return $this->belongsTo('App\Models\Cajero','idCajero');
    }
    public function camarero()
    {
        return $this->belongsTo('App\Models\Camarero','idCamarero');
    }
    public function cliente1()
    {
        return $this->belongsTo('App\Models\Cliente','idCliente');
    }

    public function productosDelete(){
        return $this->hasMany('App\Models\SeAdiciona','idPedido','id' );

  
}

}