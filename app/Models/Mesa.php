<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
class Mesa extends Model
{
    use HasFactory;
    public $timestamps = false;

   // use SoftDeletes;
    protected $fillable=[
        
        'id',
        'capacidad',
        'ubicacion',
        'estado'
        
    ];
    //relacion de muchos a muchos con asignas
    public function Asigna(){
        return $this->morphedByMany('App\Models\Cajero','Asigna');
        return $this->morphedByMany('App\Models\Cliente','Asigna');
    }

    //relacion de muchos a muchos con realiza
    public function RealizaPedido(){
        return $this->morphedByMany('App\Models\Camarero','RealizaPedido');
        return $this->morphedByMany('App\Models\Pedido','RealizaPedido');
    }

    public function clientes(){
        return $this->belongsToMany('App\Models\Cliente', 'esta_ubicados','idMesa', 'idCliente' );
        
    } 
    public function clientes1(){
        return $this->hasMany(Cliente::class);
    }

}
