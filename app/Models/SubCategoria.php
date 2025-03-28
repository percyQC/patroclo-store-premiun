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

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_categoria');
    }

    public $timestamps = false;
}
