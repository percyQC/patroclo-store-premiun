<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function index($id_subcategoria){    
        $productos = Producto::where('id_subcategoria', $id_subcategoria)->get();    
        return view('productos', compact('productos'));
    }

    public function show($id_producto){
        $producto = Producto::find($id_producto);
        if (!$producto) {
            return redirect()->route('productos.index')
                             ->with('error', 'Producto no encontrado');
        }
        return view('productosdetalle', compact('producto'));
    }
}
