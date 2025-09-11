<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return "Listado de productos";
    }
    function create(){
        return "Formulario de creación de productos";
    }
    function show($id, $category = null){
    if ($category == null) {
        return "Detalle de cada producto " . $id;
    } else {
        return "Detalle de cada producto " . $id . "de la categoria: " . $category;
    }
    }
}
