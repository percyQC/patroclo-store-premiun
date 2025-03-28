<?php

namespace App\Http\Controllers;

use App\Models\SubCategoria;
use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    public function index($id_categoria) {
        $subcategorias = Subcategoria::where('id_categoria', $id_categoria)->where('estado_auditoria','1')->get();
        return view('subcategorias', compact('subcategorias'));
    }
}
