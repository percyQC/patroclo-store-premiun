@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-400 p-4">
    <div class="bg-black text-white rounded-lg p-6 w-full md:w-3/4 lg:w-2/3 xl:w-1/2">

        <h1 class="text-center text-3xl font-semibold mb-6">{{ $producto->nombre }}</h1>

        <div class="flex flex-col md:flex-row gap-6 items-center">
            <div class="flex-1">
                <img src="{{ $producto->imagen_url }}" alt="" class="h-[150px] object-contain mx-auto mb-6 rounded-lg ">
            </div><br>
            <div class="flex-1 text-center md:text-left">
                <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p><br>
                <p><strong>Especificaciones:</strong> {{ $producto->especificaciones }}</p><br>
                <p><strong>Precio:</strong> ${{ $producto->precio_dolares }}</p><br>
                <p><strong>Stock:</strong> {{ $producto->stock }}</p>
            </div>
        </div>

        <div class="flex justify-center mt-8">
            <div class="w-full text-center">
                <h2 class="text-xl font-semibold mb-4">Proveedor:</h2>
                <img src="{{ $producto->informacion_fabricante_url }}" alt="" class="h-[150px] object-contain mx-auto rounded-lg ">
            </div>
        </div>
        <br>
        <a href="{{ route('productos.index', $producto->id_subcategoria) }}" class="text-white hover:bg-orange-600  px-4 py-2 rounded flex items-center justify-center space-x-2 mb-6">
            <i class="fas fa-arrow-left"></i>
            <span>Volver a la lista de productos</span>
        </a>
    </div>

</div>
@endsection