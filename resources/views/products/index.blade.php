@extends('layouts.app')

@section('css')
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ========== NAVBAR ========== */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 20px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
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
            font-size: 28px;
            font-weight: 800;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration: none;
            letter-spacing: -1px;
        }

        .navbar-menu {
            display: flex;
            gap: 35px;
            list-style: none;
        }

        .navbar-menu a {
            color: #333;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            position: relative;
        }

        .navbar-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: width 0.3s;
        }

        .navbar-menu a:hover::after {
            width: 100%;
        }

        /* ========== SECCIÓN DE PRODUCTOS ========== */
        .products-section {
            flex: 1;
            padding: 50px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            color: white;
            text-align: center;
            margin-bottom: 40px;
            font-size: 42px;
            font-weight: 800;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.2);
        }

        .header-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.95);
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }

        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 14px 28px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(102, 126, 234, 0.6);
        }

        .search-box {
            padding: 12px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 50px;
            width: 350px;
            font-size: 15px;
            transition: all 0.3s;
        }

        .search-box:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        }

        .stats {
            background: rgba(255, 255, 255, 0.95);
            padding: 20px 30px;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .stats-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 16px;
            color: #555;
        }

        .stats-content strong {
            color: #764ba2;
            font-size: 20px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            padding: 0;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3);
        }

        .product-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .product-image img {
            transition: transform 0.4s;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-name {
            font-size: 20px;
            font-weight: 700;
            color: #333;
            margin: 15px 20px 8px;
        }

        .product-brand {
            color: #764ba2;
            font-size: 13px;
            margin: 0 20px 10px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .product-description {
            color: #777;
            font-size: 14px;
            line-height: 1.6;
            margin: 0 20px 15px;
            max-height: 65px;
            overflow: hidden;
        }

        .product-price {
            font-size: 26px;
            font-weight: 800;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 0 20px 20px;
        }

        .product-actions {
            display: flex;
            gap: 10px;
            padding: 0 20px 20px;
        }

        .btn-view {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px;
            text-decoration: none;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 600;
            flex: 1;
            text-align: center;
            transition: all 0.3s;
        }

        .btn-view:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-edit {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 12px;
            text-decoration: none;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 600;
            flex: 1;
            text-align: center;
            transition: all 0.3s;
        }

        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 87, 108, 0.4);
        }

        /* ========== FOOTER ========== */
        .footer {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 40px 20px 20px;
            margin-top: 60px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        .footer-section p,
        .footer-section ul {
            color: #555;
            line-height: 2;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li a {
            color: #555;
            text-decoration: none;
            transition: all 0.3s;
        }

        .footer-section ul li a:hover {
            color: #764ba2;
            padding-left: 5px;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 40px;
            padding-top: 25px;
            border-top: 2px solid #e0e0e0;
            color: #777;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-container {
                flex-direction: column;
                gap: 20px;
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
                gap: 15px;
                text-align: center;
            }

            .products-grid {
                grid-template-columns: 1fr;
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
                <span>Total valor inventario: <strong>$15,890.00</strong></span>
            </div>
        </div>

        <div class="products-grid" id="productsContainer">
            <!-- Producto 1 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=300&fit=crop" alt="Nike Air Max Plus" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Nike</div>
                <div class="product-name">Air Max Plus</div>
                <div class="product-description">Zapatillas deportivas con tecnología Air Max visible, diseño retro y máxima comodidad para uso diario.</div>
                <div class="product-price">$189.99</div>
                <div class="product-actions">
                    <a href="/products/1" class="btn-view">Ver Detalles</a>
                    <a href="/products/1/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=300&fit=crop" alt="JBL Charge 5" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">JBL</div>
                <div class="product-name">Charge 5</div>
                <div class="product-description">Altavoz portátil Bluetooth con resistencia al agua IP67, 20 horas de batería y sonido potente.</div>
                <div class="product-price">$179.99</div>
                <div class="product-actions">
                    <a href="/products/2" class="btn-view">Ver Detalles</a>
                    <a href="/products/2/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?w=400&h=300&fit=crop" alt="Canon EOS R6" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Canon</div>
                <div class="product-name">EOS R6 Mark II</div>
                <div class="product-description">Cámara mirrorless full frame de 24.2MP con estabilización de 8 pasos y video 4K 60fps.</div>
                <div class="product-price">$2,499.00</div>
                <div class="product-actions">
                    <a href="/products/3" class="btn-view">Ver Detalles</a>
                    <a href="/products/3/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=400&h=300&fit=crop" alt="Adidas Ultraboost" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Adidas</div>
                <div class="product-name">Ultraboost 23</div>
                <div class="product-description">Zapatillas de running con tecnología Boost, parte superior Primeknit y máximo retorno de energía.</div>
                <div class="product-price">$199.99</div>
                <div class="product-actions">
                    <a href="/products/4" class="btn-view">Ver Detalles</a>
                    <a href="/products/4/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?w=400&h=300&fit=crop" alt="Ray-Ban Aviator" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Ray-Ban</div>
                <div class="product-name">Aviator Classic</div>
                <div class="product-description">Gafas de sol icónicas con lentes polarizadas, montura de metal y protección UV400.</div>
                <div class="product-price">$159.99</div>
                <div class="product-actions">
                    <a href="/products/5" class="btn-view">Ver Detalles</a>
                    <a href="/products/5/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=300&fit=crop" alt="Seiko 5 Sports" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Seiko</div>
                <div class="product-name">5 Sports Automatic</div>
                <div class="product-description">Reloj automático con movimiento mecánico, resistencia al agua 100m y cristal Hardlex.</div>
                <div class="product-price">$295.00</div>
                <div class="product-actions">
                    <a href="/products/6" class="btn-view">Ver Detalles</a>
                    <a href="/products/6/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto 7 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=300&fit=crop" alt="The North Face Borealis" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">The North Face</div>
                <div class="product-name">Borealis Backpack</div>
                <div class="product-description">Mochila versátil de 28L con compartimento para laptop, espalda acolchada FlexVent y bolsillos organizadores.</div>
                <div class="product-price">$99.00</div>
                <div class="product-actions">
                    <a href="/products/7" class="btn-view">Ver Detalles</a>
                    <a href="/products/7/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto 8 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1585399000684-d2f72660f092?w=400&h=300&fit=crop" alt="Hydroflask" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Hydro Flask</div>
                <div class="product-name">Wide Mouth 32oz</div>
                <div class="product-description">Botella de acero inoxidable con aislamiento al vacío TempShield, mantiene bebidas frías 24h o calientes 12h.</div>
                <div class="product-price">$44.95</div>
                <div class="product-actions">
                    <a href="/products/8" class="btn-view">Ver Detalles</a>
                    <a href="/products/8/edit" class="btn-edit">Editar</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
