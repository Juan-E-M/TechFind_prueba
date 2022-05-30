<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class Comentarioproducto extends MongoModel
{
    use HasFactory;
    protected $fillable = [
        "valoracion",
        "texto_comentario",
        "imagenes",
        "fech_cre",
    ];
}
