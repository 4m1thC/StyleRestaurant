<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=[
        'dia',
        'descripcion',
        'img',
    ];
    //relacion muchos a muchos inversa con producto
    public function productos(){
    
    return $this ->belongsToMany('App\Models\Producto','pertenece_menus', 'idMenu', 'idProd')->withPivot('cantidad'); 
    }
    public function productos1(){
        return $this->belongsToMany('App\Models\Producto', 'pertenece_menus', 'idMenu', 'idProd');

    }
}

