<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
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
        }
        .btn:hover {
            background-color: #218838;
        }
        .search-box {
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            width: 300px;
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
        }
        .btn-edit:hover {
            background-color: #e0a800;
        }
        .no-products {
            text-align: center;
            padding: 60px 20px;
            color: #666;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .no-products h3 {
            margin-bottom: 15px;
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
    </style>
</head>
<body>
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
                <div class="product-image">Imagen no disponible</div>
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
                <div class="product-image">Imagen no disponible</div>
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
                <div class="product-image">Imagen no disponible</div>
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
                <div class="product-image">Imagen no disponible</div>
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
                <div class="product-image">Imagen no disponible</div>
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
                <div class="product-image">Imagen no disponible</div>
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
                <div class="product-image">Imagen no disponible</div>
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
                <div class="product-image">Imagen no disponible</div>
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

    <script>
        // Funcionalidad de búsqueda
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const products = document.querySelectorAll('.product-card');

            products.forEach(product => {
                const name = product.querySelector('.product-name').textContent.toLowerCase();
                const brand = product.querySelector('.product-brand').textContent.toLowerCase();
                const description = product.querySelector('.product-description').textContent.toLowerCase();

                if (name.includes(searchTerm) || brand.includes(searchTerm) || description.includes(searchTerm)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
