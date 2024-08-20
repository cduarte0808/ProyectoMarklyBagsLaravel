<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = "productos";
    protected $fillable = ['id', 'nombre', 'descripcion', 'precio'];
}
