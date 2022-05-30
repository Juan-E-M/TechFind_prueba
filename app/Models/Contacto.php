<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class Contacto extends MongoModel
{
    use HasFactory;
    protected $fillable = [
        'telefono',
        'correo_electronico',
        'redes_sociales',
    ];
}
