<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $table = 'subcategorias';

    protected $fillable = [
        'id_categoria',
        'nombre',
        'imagen_url'
    ];

    public $timestamps = false;
}
