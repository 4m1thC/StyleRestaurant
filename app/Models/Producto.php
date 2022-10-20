<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=[
        
        'nombre',
        'categoria',
        'costo',
        'descripcion',
        'img'
    ];
    //relacion muchos a muchos con menu
    public function menu(){
        return $this ->belongsToMany('App\Models\Menu','pertenece_menus','idProd', 'idMenu')->withPivot('cantidad
        '); 
    }

    //relacion muchos a muchos con pedido
    public function ingredientes()
    {
            return $this->belongsToMany('App\Models\Ingrediente', 'pertenece_prods', 'idProd', 'idIngrediente');
    }
    public function pedidos(){
        return $this->belongsToMany('App\Models\Pedido', 'se_adicionas', 'idPedido', 'idProducto')->withPivot('cantidad');
    }    


    public function menus(){
        return $this->belongsToMany('App\Models\Menu', 'pertenece_menus', 'idProd', 'idMenu');
    }



    
}
