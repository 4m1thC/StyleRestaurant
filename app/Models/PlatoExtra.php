<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatoExtra extends Model
{
    
    public $incrementing =false;

    use HasFactory;
    public function Producto()
    {
       return $this->belongsTo(Producto::class,'id','id');
    }
}
