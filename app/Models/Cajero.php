<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;




class Cajero extends Model
{
   // public $incrementing =false; 
    public $timestamps = false;
    use HasFactory;
    use SoftDeletes;
   protected $dates = ['deleted_at'];

    public function cajero(){
        return $this->morphToMany('App\Models\Mesa','Asigna');
    }
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'idCajero', 'id');
    }
    public function usuario()
    {
    return $this->belongsTo('App\Models\Usuario', 'idUsuario','id');
    }

}
