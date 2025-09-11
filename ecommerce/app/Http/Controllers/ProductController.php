<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller 
{
    function index(){
        // Datos de ejemplo más elaborados para la tienda virtual
        $products = collect([
            (object)[
                'id' => 1,
                'name' => 'iPhone 15 Pro Max',
                'brand' => 'Apple',
                'price' => 1299.99,
                'description' => 'El iPhone más avanzado con pantalla Super Retina XDR de 6.7 pulgadas, chip A17 Pro, sistema de cámaras Pro con teleobjetivo 5x y batería de larga duración.',
                'image' => null,
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(2)
            ],
            (object)[
                'id' => 2,
                'name' => 'Samsung Galaxy S24 Ultra',
                'brand' => 'Samsung',
                'price' => 1199.99,
                'description' => 'Smartphone premium con pantalla Dynamic AMOLED 2X de 6.8", S Pen integrado, cámara de 200MP con zoom óptico 10x y procesador Snapdragon 8 Gen 3.',
                'image' => null,
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(3)
            ],
            (object)[
                'id' => 3,
                'name' => 'MacBook Pro 16" M3 Max',
                'brand' => 'Apple',
                'price' => 2499.99,
                'description' => 'Laptop profesional con chip M3 Max, pantalla Liquid Retina XDR de 16.2", hasta 128GB de memoria unificada y batería que dura todo el día.',
                'image' => null,
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(1)
            ],
            (object)[
                'id' => 4,
                'name' => 'Sony WH-1000XM5',
                'brand' => 'Sony',
                'price' => 399.99,
                'description' => 'Audífonos inalámbricos con cancelación de ruido líder en la industria, sonido de alta resolución y hasta 30 horas de batería.',
                'image' => null,
                'created_at' => now()->subDays(8),
                'updated_at' => now()->subDays(4)
            ],
            (object)[
                'id' => 5,
                'name' => 'iPad Pro 12.9" M2',
                'brand' => 'Apple',
                'price' => 1099.99,
                'description' => 'Tablet profesional con chip M2, pantalla Liquid Retina XDR, soporte para Apple Pencil y Magic Keyboard. Perfecta para creativos y profesionales.',
                'image' => null,
                'created_at' => now()->subDays(12),
                'updated_at' => now()->subDays(6)
            ],
            (object)[
                'id' => 6,
                'name' => 'Nintendo Switch OLED',
                'brand' => 'Nintendo',
                'price' => 349.99,
                'description' => 'Consola híbrida con pantalla OLED de 7 pulgadas, audio mejorado, soporte ajustable y 64GB de almacenamiento interno.',
                'image' => null,
                'created_at' => now()->subDays(7),
                'updated_at' => now()->subDays(2)
            ]
        ]);
        
        // Simular paginación para que funcione el index
        $products = new \Illuminate\Pagination\LengthAwarePaginator(
            $products,
            $products->count(),
            6, // 6 productos por página
            1,
            ['path' => request()->url()]
        );
        
        return view('products.index', compact('products'));
    }
      
    function create(){
        return view("products.create");
    }
    
    function store(Request $request)
    {
        // Mostrar todos los datos recibidos del formulario
        $data = $request->all();
        
        // Procesar características si existen
        if ($request->has('features')) {
            $data['features'] = implode(', ', $request->features);
        }
        
        // Simular procesamiento de imagen
        if ($request->hasFile('image')) {
            $data['image_info'] = [
                'nombre' => $request->file('image')->getClientOriginalName(),
                'tamaño' => $request->file('image')->getSize(),
                'tipo' => $request->file('image')->getMimeType()
            ];
        }
        
        return response()->json([
            'status' => 'success',
            'message' => 'Producto creado exitosamente',
            'data' => $data
        ], 200);
    }
          
    function show($id, $category = null)
    {
        // Crear productos más detallados basados en el ID
        $products = [
            1 => [
                'name' => 'iPhone 15 Pro Max',
                'brand' => 'Apple',
                'price' => 1299.99,
                'description' => 'El iPhone más avanzado jamás creado. Con el revolucionario chip A17 Pro fabricado en proceso de 3 nanómetros, ofrece un rendimiento sin precedentes. Su sistema de cámaras Pro incluye un teleobjetivo 5x que te permite capturar detalles increíbles desde lejos. La pantalla Super Retina XDR de 6.7 pulgadas con Dynamic Island proporciona una experiencia visual inmersiva. Construido con titanio de grado aeroespacial, es más ligero y resistente que nunca.'
            ],
            2 => [
                'name' => 'Samsung Galaxy S24 Ultra',
                'brand' => 'Samsung',
                'price' => 1199.99,
                'description' => 'La definición de smartphone premium. Equipado con el poderoso procesador Snapdragon 8 Gen 3 y una cámara principal de 200MP que captura cada detalle con claridad asombrosa. El zoom óptico 10x te acerca a la acción como nunca antes. La pantalla Dynamic AMOLED 2X de 6.8 pulgadas ofrece colores vibrantes y negros profundos. Incluye S Pen integrado para máxima productividad y creatividad.'
            ],
            3 => [
                'name' => 'MacBook Pro 16" M3 Max',
                'brand' => 'Apple',
                'price' => 2499.99,
                'description' => 'La laptop más poderosa de Apple. El chip M3 Max lleva el rendimiento a otro nivel con hasta 40 núcleos GPU y 128GB de memoria unificada. La pantalla Liquid Retina XDR de 16.2 pulgadas ofrece un brillo extremo y contraste infinito. Perfecto para edición de video 8K, desarrollo de apps y diseño 3D. La batería dura hasta 22 horas para que puedas trabajar todo el día sin interrupciones.'
            ]
        ];
        
        $defaultProduct = [
            'name' => 'Producto Ejemplo #' . $id,
            'brand' => 'TechBrand',
            'price' => 99.99 * $id,
            'description' => 'Este es un producto de ejemplo con características avanzadas y tecnología de vanguardia. Diseñado para ofrecer la mejor experiencia de usuario con materiales premium y acabados de alta calidad. Incluye garantía extendida y soporte técnico especializado.'
        ];
        
        $productData = $products[$id] ?? $defaultProduct;
        
        $product = (object)[
            'id' => $id,
            'name' => $productData['name'],
            'brand' => $productData['brand'],
            'price' => $productData['price'],
            'description' => $productData['description'],
            'image' => null,
            'created_at' => now()->subDays(rand(1, 30)),
            'updated_at' => now()->subDays(rand(0, 5))
        ];
        
        return view('products.show', compact('product'));
    }
    
    function edit($id)
    {
        return redirect()->back()->with('info', 'Función de editar en desarrollo. ¡Próximamente disponible!');
    }
    
    function update(Request $request, $id)
    {
        return redirect()->back()->with('success', 'Producto actualizado exitosamente (simulado)');
    }
    
    function destroy($id)
    {
        return redirect()->route('products.index')->with('success', 'Producto eliminado exitosamente (simulado)');
    }
};