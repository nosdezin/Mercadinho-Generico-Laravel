<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable = [
        "nome",
        "preco",
        "estoque",
        "image_url",
        "comentarios",
        'nota'
    ];

    protected $casts = [
        "comentarios"=>"array"  
    ];
}
