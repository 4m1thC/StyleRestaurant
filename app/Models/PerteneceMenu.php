<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerteneceMenu extends Model
{
    use HasFactory;
    protected $fillable=['idProd','idMenu','cantidad'];
    public $timestamps = false;


    
    
}
