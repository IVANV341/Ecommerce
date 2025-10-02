@extends('layouts.app')

@section('css')
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ========== NAVBAR ========== */
        .navbar {
            background-color: #2c3e50;
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .navbar-menu {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .navbar-menu a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .navbar-menu a:hover {
            color: #3498db;
        }

        /* ========== SECCIÓN DE PRODUCTOS ========== */
        .products-section {
            flex: 1;
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
        }

        .header-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .btn {
            background-color: #28a745;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #218838;
        }

        .search-box {
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            width: 300px;
            font-size: 14px;
        }

        .stats {
            background: white;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .stats-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 200px;
            background-color: #eee;
            border-radius: 8px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 14px;
        }

        .product-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        .product-brand {
            color: #666;
            font-size: 14px;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .product-description {
            color: #666;
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 15px;
            max-height: 60px;
            overflow: hidden;
        }

        .product-price {
            font-size: 20px;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 15px;
        }

        .product-actions {
            display: flex;
            gap: 10px;
        }

        .btn-view {
            background-color: #007bff;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            flex: 1;
            text-align: center;
            transition: background-color 0.3s;
        }

        .btn-view:hover {
            background-color: #0056b3;
        }

        .btn-edit {
            background-color: #ffc107;
            color: #212529;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            flex: 1;
            text-align: center;
            transition: background-color 0.3s;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        /* ========== FOOTER ========== */
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 30px 20px;
            margin-top: auto;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .footer-section h3 {
            margin-bottom: 15px;
            color: #3498db;
        }

        .footer-section p,
        .footer-section ul {
            color: #bdc3c7;
            line-height: 1.8;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #3498db;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #34495e;
            color: #bdc3c7;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-container {
                flex-direction: column;
                gap: 15px;
            }

            .header-actions {
                flex-direction: column;
                gap: 15px;
            }

            .search-box {
                width: 100%;
            }

            .stats-content {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
        }
    </style>
@endsection

@section('content')
    <!-- ========== SECCIÓN DE PRODUCTOS ========== -->
    <main class="products-section">
    <div class="container">
        <h1>Gestión de Productos</h1>

        <div class="header-actions">
            <div>
                <input type="text" class="search-box" placeholder="Buscar productos..." id="searchInput">
            </div>
            <a href="/products/create" class="btn">+ Nuevo Producto</a>
        </div>

        <div class="stats">
            <div class="stats-content">
                <span><strong id="productCount">8</strong> productos registrados</span>
                <span>Total valor inventario: <strong>$12,450.00</strong></span>
            </div>
        </div>

        <div class="products-grid" id="productsContainer">
            <!-- Producto ejemplo 1 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?w=400&h=300&fit=crop" alt="Samsung Galaxy S24 Ultra" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Samsung</div>
                <div class="product-name">Galaxy S24 Ultra</div>
                <div class="product-description">Smartphone de última generación con cámara de 200MP, pantalla AMOLED de 6.8" y procesador Snapdragon 8 Gen 3.</div>
                <div class="product-price">$1,299.99</div>
                <div class="product-actions">
                    <a href="/products/1" class="btn-view">Ver Detalles</a>
                    <a href="/products/1/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=400&h=300&fit=crop" alt="MacBook Pro 16" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Apple</div>
                <div class="product-name">MacBook Pro 16"</div>
                <div class="product-description">Laptop profesional con chip M3 Pro, 18GB RAM, 512GB SSD. Perfecta para desarrollo y diseño.</div>
                <div class="product-price">$2,499.99</div>
                <div class="product-actions">
                    <a href="/products/2" class="btn-view">Ver Detalles</a>
                    <a href="/products/2/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=400&h=300&fit=crop" alt="Sony WH-1000XM5" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Sony</div>
                <div class="product-name">WH-1000XM5</div>
                <div class="product-description">Auriculares inalámbricos con cancelación de ruido líder en la industria y 30 horas de batería.</div>
                <div class="product-price">$399.99</div>
                <div class="product-actions">
                    <a href="/products/3" class="btn-view">Ver Detalles</a>
                    <a href="/products/3/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=400&h=300&fit=crop" alt="Dell Monitor UltraSharp 27" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Dell</div>
                <div class="product-name">Monitor UltraSharp 27"</div>
                <div class="product-description">Monitor 4K IPS con precisión de color profesional, ideal para diseño gráfico y edición de video.</div>
                <div class="product-price">$599.99</div>
                <div class="product-actions">
                    <a href="/products/4" class="btn-view">Ver Detalles</a>
                    <a href="/products/4/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 5 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?w=400&h=300&fit=crop" alt="Logitech MX Master 3S" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Logitech</div>
                <div class="product-name">MX Master 3S</div>
                <div class="product-description">Mouse ergonómico para productividad con scroll electromagnético y conectividad multi-dispositivo.</div>
                <div class="product-price">$99.99</div>
                <div class="product-actions">
                    <a href="/products/5" class="btn-view">Ver Detalles</a>
                    <a href="/products/5/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1578303512597-81e6cc155b3e?w=400&h=300&fit=crop" alt="Nintendo Switch OLED" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Nintendo</div>
                <div class="product-name">Switch OLED</div>
                <div class="product-description">Consola híbrida con pantalla OLED de 7", audio mejorado y 64GB de almacenamiento interno.</div>
                <div class="product-price">$349.99</div>
                <div class="product-actions">
                    <a href="/products/6" class="btn-view">Ver Detalles</a>
                    <a href="/products/6/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 7 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://root-nation.com/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2023/03/razer-deathadder-v3-pro-08.jpg.webp" alt="Razer DeathAdder V3 Pro" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Razer</div>
                <div class="product-name">DeathAdder V3 Pro</div>
                <div class="product-description">Mouse gaming inalámbrico con sensor Focus Pro 30K y switches ópticos de 90M clicks.</div>
                <div class="product-price">$149.99</div>
                <div class="product-actions">
                    <a href="/products/7" class="btn-view">Ver Detalles</a>
                    <a href="/products/7/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 8 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1591488320449-011701bb6704?w=400&h=300&fit=crop" alt="ASUS ROG Strix RTX 4080" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">ASUS</div>
                <div class="product-name">ROG Strix RTX 4080</div>
                <div class="product-description">Tarjeta gráfica de alto rendimiento para gaming 4K y creación de contenido con 16GB GDDR6X.</div>
                <div class="product-price">$1,199.99</div>
                <div class="product-actions">
                    <a href="/products/8" class="btn-view">Ver Detalles</a>
                    <a href="/products/8/edit" class="btn-edit">Editar</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
