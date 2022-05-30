<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class Usuario extends MongoModel
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "apellidos",
        "usuario_nombre",
        "email",
        "password",
        "pais",
        "ciudad",
        "fech_nac",
    ];
}