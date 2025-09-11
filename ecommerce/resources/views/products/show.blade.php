<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $product->name }} - TechStore</title>
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
        .product-container {
            background: white;
            border-radius: 25px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            margin: 2rem 0;
            overflow: hidden;
        }
        .product-gallery {
            background: linear-gradient(135deg, #f8f9ff, #f0f2f5);
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .product-image {
            max-width: 100%;
            max-height: 450px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        .no-image-placeholder {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }
        .product-info {
            padding: 3rem;
        }
        .price-section {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 1.5rem;
            border-radius: 20px;
            margin: 2rem 0;
            text-align: center;
        }
        .price-main {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .brand-badge {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1rem;
        }
        .feature-list {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem 0;
        }
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding: 0.8rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        .feature-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 1rem;
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 25px;
            padding: 1rem 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
        }
        .btn-warning {
            background: linear-gradient(135deg, #ffc107, #ff8c00);
            border: none;
            border-radius: 25px;
            padding: 1rem 2rem;
            font-weight: 600;
            color: white;
        }
        .btn-danger {
            background: linear-gradient(135deg, #dc3545, #c82333);
            border: none;
            border-radius: 25px;
            padding: 1rem 2rem;
            font-weight: 600;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 2px solid #f8f9fa;
        }
        .stat-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
        }
        .breadcrumb {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 1rem 1.5rem;
            margin: 1rem 0;
        }
        .rating-stars {
            color: #ffc107;
            font-size: 1.2rem;
            margin: 1rem 0;
        }
        .product-meta {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 1.5rem;
            margin: 2rem 0;
        }
        .action-buttons {
            position: sticky;
            bottom: 2rem;
            background: white;
            padding: 1.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
        }
        .zoom-container {
            cursor: zoom-in;
            overflow: hidden;
            border-radius: 20px;
        }
        .social-share {
            display: flex;
            gap: 1rem;
            margin: 1rem 0;
        }
        .social-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .social-btn:hover {
            transform: scale(1.1);
        }
        .facebook { background: #1877f2; }
        .twitter { background: #1da1f2; }
        .whatsapp { background: #25d366; }
        .pinterest { background: #bd081c; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="{{ url('products') }}">
                <i class="fas fa-store text-primary me-2"></i>
                <span class="text-primary">Tech</span><span class="text-secondary">Store</span>
            </a>
            <div class="ms-auto">
                <a href="{{ url('products') }}" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left me-2"></i> Volver a la Tienda
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('products') }}" class="text-decoration-none">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ url('products') }}" class="text-decoration-none">Productos</a></li>
                <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>
        </nav>

        <div class="product-container">
            <div class="row g-0">
                <!-- Galería de Producto -->
                <div class="col-lg-6">
                    <div class="product-gallery">
                        @if($product->image)
                            <div class="zoom-container">
                                <img src="{{ asset('storage/' . $product->image) }}" 
                                     alt="{{ $product->name }}" 
                                     class="product-image"
                                     onclick="openImageModal(this.src)">
                            </div>
                        @else
                            <div class="no-image-placeholder">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                        @endif
                        
                        <!-- Badge de Stock -->
                        <div class="position-absolute top-0 start-0 p-3">
                            <span class="badge bg-success fs-6 rounded-pill">
                                <i class="fas fa-check-circle me-1"></i> En Stock
                            </span>
                        </div>
                        
                        <!-- Badge de Nuevo -->
                        <div class="position-absolute top-0 end-0 p-3">
                            <span class="badge bg-warning fs-6 rounded-pill">
                                <i class="fas fa-star me-1"></i> Nuevo
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Información del Producto -->
                <div class="col-lg-6">
                    <div class="product-info">
                        <div class="brand-badge">
                            <i class="fas fa-award me-2"></i>{{ $product->brand }}
                        </div>
                        
                        <h1 class="display-5 fw-bold text-primary mb-3">{{ $product->name }}</h1>
                        
                        <!-- Rating -->
                        <div class="rating-stars">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                            <span class="text-muted ms-2">(4.8/5 - 124 reseñas)</span>
                        </div>

                        <!-- Precio -->
                        <div class="price-section">
                            <div class="price-main">${{ number_format($product->price, 2) }}</div>
                            <div class="text-white-50">
                                <i class="fas fa-shipping-fast me-2"></i>Envío gratis a nivel nacional
                            </div>
                        </div>

                        <!-- Descripción -->
                        <div class="mb-4">
                            <h5 class="fw-bold mb-3">
                                <i class="fas fa-info-circle text-primary me-2"></i>Descripción
                            </h5>
                            <p class="lead text-muted">{{ $product->description }}</p>
                        </div>

                        <!-- Características -->
                        <div class="feature-list">
                            <h5 class="fw-bold mb-3">
                                <i class="fas fa-star text-primary me-2"></i>Características Destacadas
                            </h5>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div>
                                    <strong>Garantía de 2 años</strong>
                                    <div class="text-muted small">Protección completa del fabricante</div>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div>
                                    <strong>Envío gratuito</strong>
                                    <div class="text-muted small">Entrega en 24-48 horas</div>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-undo"></i>
                                </div>
                                <div>
                                    <strong>Devolución gratis</strong>
                                    <div class="text-muted small">30 días para devoluciones</div>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div>
                                    <strong>Soporte técnico</strong>
                                    <div class="text-muted small">Atención 24/7 especializada</div>
                                </div>
                            </div>
                        </div>

                        <!-- Compartir en Redes Sociales -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-2">Compartir:</h6>
                            <div class="social-share">
                                <a href="#" class="social-btn facebook" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-btn twitter" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-btn whatsapp" title="WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="#" class="social-btn pinterest" title="Pinterest">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Información Adicional -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="product-meta">
                    <h5 class="fw-bold mb-3">
                        <i class="fas fa-clipboard-list text-primary me-2"></i>Información Adicional
                    </h5>
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-hashtag"></i>
                            </div>
                            <h6 class="fw-bold">ID Producto</h6>
                            <p class="mb-0 text-muted">#{{ str_pad($product->id, 6, '0', STR_PAD_LEFT) }}</p>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-calendar-plus"></i>
                            </div>
                            <h6 class="fw-bold">Fecha de Registro</h6>
                            <p class="mb-0 text-muted">{{ $product->created_at->format('d/m/Y') }}</p>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h6 class="fw-bold">Visualizaciones</h6>
                            <p class="mb-0 text-muted">1,247 vistas</p>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h6 class="fw-bold">En Favoritos</h6>
                            <p class="mb-0 text-muted">89 usuarios</p>
                        </div>
                    </div>
                    
                    @if($product->updated_at != $product->created_at)
                        <div class="mt-3 text-center">
                            <small class="text-muted">
                                <i class="fas fa-clock me-1"></i>
                                Última actualización: {{ $product->updated_at->format('d/m/Y H:i') }}
                            </small>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Botones de Acción Sticky -->
        <div class="action-buttons">
            <div class="row g-3">
                <div class="col-md-3">
                    <button class="btn btn-outline-primary w-100" onclick="addToCart()">
                        <i class="fas fa-shopping-cart me-2"></i> Agregar al Carrito
                    </button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary w-100" onclick="buyNow()">
                        <i class="fas fa-bolt me-2"></i> Comprar Ahora
                    </button>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('products/' . $product->id . '/edit') }}" class="btn btn-warning w-100">
                        <i class="fas fa-edit me-2"></i> Editar Producto
                    </a>
                </div>
                <div class="col-md-3">
                    <form action="{{ url('products/' . $product->id) }}" method="POST" class="d-inline w-100">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100"
                                onclick="return confirm('¿Estás seguro de eliminar este producto? Esta acción no se puede deshacer.')">
                            <i class="fas fa-trash me-2"></i> Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Zoom de Imagen -->
    <div class="modal fade" id="imageModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" 
                            data-bs-dismiss="modal" style="z-index: 1050;"></button>
                    <img id="modalImage" class="img-fluid rounded" alt="Imagen ampliada">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmación de Compra -->
    <div class="modal fade" id="purchaseModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-body text-center p-5">
                    <div class="mb-4">
                        <i class="fas fa-shopping-bag text-success" style="font-size: 4rem;"></i>
                    </div>
                    <h3 class="fw-bold text-success mb-3">¡Agregado al Carrito!</h3>
                    <p class="text-muted mb-4">{{ $product->name }} ha sido agregado a tu carrito de compras</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                            <i class="fas fa-shopping-bag me-2"></i> Seguir Comprando
                        </button>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-credit-card me-2"></i> Ir al Carrito
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Función para compra rápida
        function buyNow() {
            if (confirm('¿Proceder con la compra de ' + '{{ $product->name }}' + '?')) {
                alert('Redirigiendo al proceso de pago...');
                // Aquí iría la lógica de compra
            }
        }

        // Animaciones al hacer scroll
        window.addEventListener('scroll', function() {
            const actionButtons = document.querySelector('.action-buttons');
            if (window.scrollY > 300) {
                actionButtons.style.transform = 'translateY(0)';
                actionButtons.style.opacity = '1';
            } else {
                actionButtons.style.transform = 'translateY(100px)';
                actionButtons.style.opacity = '0.9';
            }
        });

        // Efecto de zoom en la imagen
        document.addEventListener('DOMContentLoaded', function() {
            const productImage = document.querySelector('.product-image');
            if (productImage) {
                productImage.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                    this.style.transition = 'transform 0.3s ease';
                });
                
                productImage.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            }
        });

        // Compartir en redes sociales
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const platform = this.classList[1];
                const url = window.location.href;
                const title = '{{ $product->name }} - TechStore';
                
                let shareUrl = '';
                switch(platform) {
                    case 'facebook':
                        shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                        break;
                    case 'twitter':
                        shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
                        break;
                    case 'whatsapp':
                        shareUrl = `https://wa.me/?text=${title} ${url}`;
                        break;
                    case 'pinterest':
                        shareUrl = `https://pinterest.com/pin/create/button/?url=${url}&description=${title}`;
                        break;
                }
                
                if (shareUrl) {
                    window.open(shareUrl, '_blank', 'width=600,height=400');
                }
            });
        });
    </script>
</body>
</html>
</body>
</html> para abrir imagen en modal
        function openImageModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            new bootstrap.Modal(document.getElementById('imageModal')).show();
        }

        // Función para agregar al carrito
        function addToCart() {
            new bootstrap.Modal(document.getElementById('purchaseModal')).show();
        }

        // Función