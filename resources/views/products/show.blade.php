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

        /* ========== SECCIÓN DE DETALLE DE PRODUCTO ========== */
        .main-content {
            flex: 1;
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            padding: 15px 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .navigation a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .navigation a:hover {
            color: #0056b3;
        }

        .product-detail {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .product-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
        }

        .product-brand {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
            opacity: 0.9;
        }

        .product-header h1 {
            font-size: 36px;
            margin: 0;
        }

        .product-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 40px;
        }

        .product-image-section {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-image {
            width: 100%;
            max-width: 500px;
            height: 400px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #666;
            font-size: 18px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }

        .product-image small {
            font-size: 14px;
            color: #999;
            margin-top: 10px;
        }

        .product-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .price-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #28a745;
        }

        .price {
            font-size: 42px;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 5px;
        }

        .price-label {
            color: #666;
            font-size: 14px;
        }

        .info-section h3,
        .specifications h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 20px;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }

        .info-section p {
            color: #666;
            line-height: 1.8;
            text-align: justify;
        }

        .specifications {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }

        .spec-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .spec-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .spec-label {
            font-weight: bold;
            color: #555;
            font-size: 14px;
        }

        .spec-value {
            color: #333;
            font-size: 16px;
        }

        .actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            transition: all 0.3s;
            flex: 1;
            min-width: 150px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,123,255,0.3);
        }

        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255,193,7,0.3);
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220,53,69,0.3);
        }

        .product-meta {
            background: #f8f9fa;
            padding: 30px 40px;
            border-top: 1px solid #eee;
        }

        .meta-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            text-align: center;
        }

        .meta-item {
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .meta-value {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        .meta-label {
            color: #666;
            font-size: 14px;
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

            .navbar-menu {
                flex-wrap: wrap;
                justify-content: center;
            }

            .navigation {
                flex-direction: column;
                gap: 10px;
            }

            .product-header h1 {
                font-size: 24px;
            }

            .product-content {
                grid-template-columns: 1fr;
            }

            .meta-grid {
                grid-template-columns: 1fr;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .spec-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection

@section('content')
<!-- ========== SECCIÓN DE DETALLE DE PRODUCTO ========== -->
    <main class="main-content">
        <div class="container">
            <div class="navigation">
                <a href="/products">← Volver al listado</a>
                <a href="/products/create">Crear nuevo producto</a>
            </div>

            <div class="product-detail">
                <div class="product-header">
                    <div class="product-brand">Samsung</div>
                    <h1>Galaxy S24 Ultra</h1>
                </div>

                <div class="product-content">
                    <div class="product-image-section">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?w=500&h=400&fit=crop" alt="Samsung Galaxy S24 Ultra">
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="price-section">
                            <div class="price">$1,299.99</div>
                            <div class="price-label">Precio actual</div>
                        </div>

                        <div class="info-section">
                            <h3>Descripción</h3>
                            <p>El Samsung Galaxy S24 Ultra es el smartphone más avanzado de la serie Galaxy. Cuenta con una impresionante cámara de 200MP, pantalla Dynamic AMOLED 2X de 6.8 pulgadas, procesador Snapdragon 8 Gen 3 para un rendimiento excepcional, y S Pen integrado para mayor productividad. Diseñado con materiales premium y resistencia al agua IP68.</p>
                        </div>

                        <div class="specifications">
                            <h3 style="margin-top: 0;">Especificaciones</h3>
                            <div class="spec-grid">
                                <div class="spec-item">
                                    <span class="spec-label">Pantalla:</span>
                                    <span class="spec-value">6.8" AMOLED</span>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">Procesador:</span>
                                    <span class="spec-value">Snapdragon 8 Gen 3</span>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">RAM:</span>
                                    <span class="spec-value">12GB</span>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">Almacenamiento:</span>
                                    <span class="spec-value">256GB</span>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">Cámara:</span>
                                    <span class="spec-value">200MP + 12MP + 10MP</span>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">Batería:</span>
                                    <span class="spec-value">5000mAh</span>
                                </div>
                            </div>
                        </div>

                        <div class="actions">
                            <a href="/products/1/edit" class="btn btn-warning">Editar Producto</a>
                            <button class="btn btn-primary" onclick="addToCart()">Añadir al Carrito</button>
                            <button class="btn btn-danger" onclick="confirmDelete()">Eliminar</button>
                        </div>
                    </div>
                </div>

                <div class="product-meta">
                    <div class="meta-grid">
                        <div class="meta-item">
                            <div class="meta-value">En Stock</div>
                            <div class="meta-label">Disponibilidad</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-value">PRD-001</div>
                            <div class="meta-label">Código del Producto</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-value">4.8/5</div>
                            <div class="meta-label">Calificación</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
