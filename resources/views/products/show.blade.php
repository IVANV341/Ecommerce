<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
        }
        .navigation {
            margin-bottom: 20px;
        }
        .navigation a {
            color: #007bff;
            text-decoration: none;
            margin-right: 15px;
        }
        .navigation a:hover {
            text-decoration: underline;
        }
        .product-detail {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .product-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .product-header h1 {
            margin: 0 0 10px 0;
            font-size: 2.5em;
        }
        .product-brand {
            font-size: 1.2em;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .product-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }
        .product-image-section {
            padding: 40px;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .product-image {
            width: 100%;
            max-width: 400px;
            height: 300px;
            background: linear-gradient(45deg, #e3e3e3, #f0f0f0);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-size: 16px;
            border: 2px dashed #ccc;
        }
        .product-info {
            padding: 40px;
        }
        .price-section {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 20px;
            margin: 0 -40px 30px -40px;
            text-align: center;
            border-radius: 10px;
        }
        .price {
            font-size: 2.5em;
            font-weight: bold;
            margin: 0;
        }
        .price-label {
            font-size: 0.9em;
            opacity: 0.9;
            margin-top: 5px;
        }
        .info-section {
            margin-bottom: 30px;
        }
        .info-section h3 {
            color: #333;
            font-size: 1.3em;
            margin-bottom: 15px;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        .info-section p {
            color: #666;
            line-height: 1.6;
            margin: 0;
        }
        .specifications {
            background: #f8f9fa;
            padding: 25px;
            margin: 0 -40px 30px -40px;
            border-radius: 10px;
        }
        .spec-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 15px;
        }
        .spec-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background: white;
            border-radius: 5px;
            border-left: 4px solid #007bff;
        }
        .spec-label {
            font-weight: bold;
            color: #333;
        }
        .spec-value {
            color: #666;
        }
        .actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            flex: 1;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }
        .product-meta {
            background: #e9ecef;
            padding: 20px 40px;
            font-size: 0.9em;
            color: #666;
        }
        .meta-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .meta-item {
            text-align: center;
        }
        .meta-value {
            font-weight: bold;
            color: #333;
            font-size: 1.1em;
        }
        .meta-label {
            margin-top: 5px;
        }
        @media (max-width: 768px) {
            .product-content {
                grid-template-columns: 1fr;
            }
            .product-image-section,
            .product-info {
                padding: 20px;
            }
            .spec-grid {
                grid-template-columns: 1fr;
            }
            .meta-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            .actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
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
                        Imagen del producto
                        <br>
                        <small>No disponible</small>
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

    <script>
        function addToCart() {
            alert('Producto añadido al carrito (función por implementar)');
        }

        function confirmDelete() {
            if (confirm('¿Estás seguro de que deseas eliminar este producto? Esta acción no se puede deshacer.')) {
                // Aquí iría la lógica para eliminar el producto
                alert('Producto eliminado (función por implementar)');
                // window.location.href = '/products';
            }
        }

        // Efecto de carga para la imagen
        window.addEventListener('load', function() {
            const imageDiv = document.querySelector('.product-image');
            imageDiv.style.transition = 'all 0.5s ease';
        });
    </script>
</body>
</html>
