<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Pedido;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;


class Cliente extends Model
{
    //public $incrementing =false;
    public $timestamps = false;

    use HasFactory;
    
    use SoftDeletes, CascadeSoftDeletes;
   protected $cascadeDeletes = ['mesaDelete','pedidos1'];
   protected $dates = ['deleted_at'];

    //relacion uno a muchos con pedido
    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }
    public function mesas(){
        return $this->belongsToMany('App\Models\Mesa', 'esta_ubicados','idCliente', 'idMesa' );
        
    }
}
