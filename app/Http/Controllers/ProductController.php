<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function listarProductos()
    {
        $productos = Product::all();
        return $productos;
    }

    public function crearProducto(Request $request)
    {
        $producto = new Product();
        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->inventario_stock = $request->inventario_stock;
        $producto->date_venc = $request->date_venc;
        $producto->lote = $request->lote;

        $producto->save();
    }

    public function actualizarStock(Request $request)
    {
        $producto = Product::findOrFail($request->id);

        $producto->inventario_stock = $request->inventario_stock;

        $producto->save();

        return $producto;
    }
}