<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET /products - Mostrar listado
    public function index()
    {
        return view('products.index');
    }

    // GET /products/create - Mostrar formulario de creación
    public function create()
    {
        return view('products.create');
    }

    // POST /products - Guardar nuevo producto
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'brand' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Aquí procesarías la imagen si fue subida
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        // Aquí guardarías el producto en la base de datos
        // Por ahora solo mostramos un mensaje de éxito

        return redirect('/products')->with('success', 'Producto creado exitosamente!');
    }

    // GET /products/{id} - Mostrar detalles del producto
    public function show($id, $category = null)
    {
        // Aquí obtendrías el producto de la base de datos
        // Por ahora solo pasamos el ID
        return view('products.show', compact('id'));
    }

    // GET /products/{id}/edit - Mostrar formulario de edición
    public function edit($id)
    {
        // Aquí obtendrías el producto de la base de datos para editarlo
        return view('products.edit', compact('id'));
    }

    // PUT /products/{id} - Actualizar producto
    public function update(Request $request, $id)
    {
        // Validar y actualizar el producto
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'brand' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Lógica para actualizar el producto
        return redirect('/products/' . $id)->with('success', 'Producto actualizado exitosamente!');
    }

    // DELETE /products/{id} - Eliminar producto
    public function destroy($id)
    {
        // Lógica para eliminar el producto
        return redirect('/products')->with('success', 'Producto eliminado exitosamente!');
    }
}
