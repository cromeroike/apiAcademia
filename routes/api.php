<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware' => 'api',
        'prefix' => 'auth'
    ],
    function ($router) {
        Route::post('login', 'App\Http\Controllers\AuthController@login');
        Route::post('logout', 'App\Http\Controllers\AuthController@logout');
        Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
        Route::post('me', 'App\Http\Controllers\AuthController@me');
        Route::post('register', 'App\Http\Controllers\AuthController@register');
    }
);

Route::get('products', 'App\Http\Controllers\ProductController@listarProductos');

Route::post('crear_producto', 'App\Http\Controllers\ProductController@crearProducto');

Route::post('actualizar_stock', 'App\Http\Controllers\ProductController@actualizarStock');