<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechStore - Tienda Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        .hero-section {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9));
            padding: 4rem 0;
            margin-bottom: 3rem;
        }
        .product-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            border: none;
            overflow: hidden;
            position: relative;
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }
        .product-image {
            height: 280px;
            background: linear-gradient(45deg, #f0f2f5, #e9ecef);
            position: relative;
            overflow: hidden;
        }
        .product-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, #667eea20, #764ba220);
            z-index: 1;
        }
        .product-image i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            color: #667eea;
            z-index: 2;
        }
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .price-tag {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: 600;
            font-size: 1.1rem;
        }
        .badge-brand {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border-radius: 15px;
            padding: 0.3rem 0.8rem;
            font-size: 0.85rem;
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 25px;
            padding: 0.7rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }
        .btn-outline-primary {
            border: 2px solid #667eea;
            color: #667eea;
            border-radius: 25px;
            padding: 0.5rem 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-outline-primary:hover {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-color: transparent;
            transform: translateY(-2px);
        }
        .stats-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .stats-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.5rem;
        }
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        .filter-tabs {
            background: white;
            border-radius: 15px;
            padding: 1rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#">
                <i class="fas fa-store text-primary me-2"></i>
                <span class="text-primary">Tech</span><span class="text-secondary">Store</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-500" href="#"><i class="fas fa-home me-1"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-500 active" href="{{ url('products') }}"><i class="fas fa-box me-1"></i> Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-500" href="#"><i class="fas fa-shopping-cart me-1"></i> Carrito <span class="badge bg-primary">3</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-500" href="#"><i class="fas fa-user me-1"></i> Mi Cuenta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">Descubre los Mejores Productos Tech</h1>
                    <p class="lead mb-4">Encuentra la tecnología más avanzada con los mejores precios del mercado</p>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="stats-card">
                                <div class="stats-icon">
                                    <i class="fas fa-box"></i>
                                </div>
                                <h4 class="fw-bold text-primary">{{ $products->total() }}</h4>
                                <p class="text-muted mb-0">Productos</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stats-card">
                                <div class="stats-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="fw-bold text-primary">4.8/5</h4>
                                <p class="text-muted mb-0">Calificación</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stats-card">
                                <div class="stats-icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <h4 class="fw-bold text-primary">24h</h4>
                                <p class="text-muted mb-0">Envío Gratis</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="{{ url('products/create') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-plus me-2"></i> Agregar Producto
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show rounded-pill" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Filters -->
        <div class="filter-tabs">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="mb-0"><i class="fas fa-filter me-2 text-primary"></i> Filtrar Productos</h5>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                        <input type="text" class="form-control border-0 bg-light" placeholder="Buscar productos...">
                    </div>
                </div>
            </div>
        </div>

        @if($products->count() > 0)
            <!-- Products Grid -->
            <div class="row g-4 mb-5">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <div class="product-card h-100">
                            <div class="product-image">
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                                @else
                                    <i class="fas fa-mobile-alt"></i>
                                @endif
                                <div class="position-absolute top-0 end-0 p-3">
                                    <span class="badge-brand">{{ $product->brand }}</span>
                                </div>
                            </div>
                            
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold mb-2">{{ $product->name }}</h5>
                                <p class="text-muted mb-3">{{ Str::limit($product->description, 80) }}</p>
                                
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="price-tag">
                                        ${{ number_format($product->price, 2) }}
                                    </div>
                                    <div class="rating">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star text-warning"></i>
                                        @endfor
                                        <small class="text-muted ms-1">(4.8)</small>
                                    </div>
                                </div>

                                <div class="d-grid gap-2">
                                    <a href="{{ url('products/' . $product->id) }}" class="btn btn-primary">
                                        <i class="fas fa-eye me-2"></i> Ver Detalles
                                    </a>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <a href="{{ url('products/' . $product->id . '/edit') }}" class="btn btn-outline-primary btn-sm w-100">
                                                <i class="fas fa-edit"></i> Editar
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <form action="{{ url('products/' . $product->id) }}" method="POST" class="d-inline w-100">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm w-100"
                                                        onclick="return confirm('¿Eliminar este producto?')">
                                                    <i class="fas fa-trash"></i> Eliminar
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mb-5">
                {{ $products->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="empty-state">
                <div class="mb-4">
                    <i class="fas fa-box-open text-muted" style="font-size: 5rem;"></i>
                </div>
                <h3 class="text-muted mb-3">¡Aún no hay productos!</h3>
                <p class="text-muted mb-4">Comienza agregando productos increíbles a tu tienda virtual</p>
                <a href="{{ url('products/create') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-plus me-2"></i> Agregar Primer Producto
                </a>
            </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="mb-3">
                        <i class="fas fa-store me-2"></i>
                        <span class="text-primary">Tech</span>Store
                    </h5>
                    <p class="text-muted">La mejor tienda de tecnología en línea. Productos de calidad, precios increíbles.</p>
                </div>
                <div class="col-md-4">
                    <h6 class="mb-3">Enlaces Rápidos</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">Sobre Nosotros</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Contacto</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Términos y Condiciones</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="mb-3">Síguenos</h6>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-primary"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="text-info"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-danger"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0 text-muted">&copy; 2025 TechStore. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>