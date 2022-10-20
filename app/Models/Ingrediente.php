<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=[
        'nombre',
        'categoria',
        'stock',
        'unidadmedida'
    ];
    public function productos()
    {
            return $this->belongsToMany('App\Models\Producto', 'pertenece_prods','idIngrediente','idProd');
    }
       
}
