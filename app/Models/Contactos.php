<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contactos extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "contactos";
    protected $fillable = ['id', 'nombre_completo', 'correo_electronico', 'numero_contacto','asunto','mensaje'];
}