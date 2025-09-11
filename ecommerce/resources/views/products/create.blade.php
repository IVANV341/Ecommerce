<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Producto - TechStore</title>
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
        .form-container {
            background: white;
            border-radius: 25px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            margin: 2rem 0;
        }
        .form-header {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #f8f9fa;
        }
        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 15px;
            padding: 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
        }
        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.8rem;
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 25px;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
        }
        .btn-secondary {
            background: linear-gradient(135deg, #6c757d, #495057);
            border: none;
            border-radius: 25px;
            padding: 1rem 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(108, 117, 125, 0.3);
        }
        .upload-area {
            border: 3px dashed #667eea;
            border-radius: 20px;
            padding: 3rem 2rem;
            text-align: center;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.05), rgba(118, 75, 162, 0.05));
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .upload-area:hover {
            border-color: #764ba2;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
        }
        .upload-icon {
            font-size: 3rem;
            color: #667eea;
            margin-bottom: 1rem;
        }
        .preview-container {
            max-width: 200px;
            margin: 1rem auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .preview-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .input-group-text {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 15px 0 0 15px;
            font-weight: 600;
        }
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        .feature-card {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            border: 2px solid rgba(102, 126, 234, 0.2);
        }
        .feature-icon {
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
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-container">
                    <div class="form-header">
                        <h1 class="display-6 fw-bold text-primary mb-2">
                            <i class="fas fa-plus-circle me-3"></i>Agregar Nuevo Producto
                        </h1>
                        <p class="text-muted fs-5">Completa la información para agregar un producto a tu tienda</p>
                    </div>

                    <!-- Features -->
                    <div class="feature-grid">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-image"></i>
                            </div>
                            <h6 class="fw-bold">Imágenes HD</h6>
                            <small class="text-muted">Sube imágenes de alta calidad</small>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-tags"></i>
                            </div>
                            <h6 class="fw-bold">Precios Dinámicos</h6>
                            <small class="text-muted">Configura precios flexibles</small>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h6 class="fw-bold">Publicación Rápida</h6>
                            <small class="text-muted">Tu producto online al instante</small>
                        </div>
                    </div>

                    <form action="{{ url('products') }}" method="POST" enctype="multipart/form-data" id="productForm">
                        @csrf
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label">
                                    <i class="fas fa-box text-primary me-2"></i>Nombre del Producto
                                </label>
                                <input type="text" class="form-control" id="name" name="name" 
                                       placeholder="Ej: iPhone 15 Pro Max" required>
                                @error('name')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="brand" class="form-label">
                                    <i class="fas fa-award text-primary me-2"></i>Marca
                                </label>
                                <select class="form-select" id="brand" name="brand" required>
                                    <option value="">Selecciona una marca</option>
                                    <option value="Apple">Apple</option>
                                    <option value="Samsung">Samsung</option>
                                    <option value="Huawei">Huawei</option>
                                    <option value="Xiaomi">Xiaomi</option>
                                    <option value="Sony">Sony</option>
                                    <option value="LG">LG</option>
                                    <option value="Otra">Otra</option>
                                </select>
                                @error('brand')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="price" class="form-label">
                                    <i class="fas fa-dollar-sign text-primary me-2"></i>Precio
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" id="price" name="price" 
                                           step="0.01" min="0" placeholder="999.99" required>
                                </div>
                                @error('price')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="category" class="form-label">
                                    <i class="fas fa-list text-primary me-2"></i>Categoría
                                </label>
                                <select class="form-select" id="category" name="category">
                                    <option value="">Selecciona una categoría</option>
                                    <option value="smartphones">Smartphones</option>
                                    <option value="laptops">Laptops</option>
                                    <option value="tablets">Tablets</option>
                                    <option value="accesorios">Accesorios</option>
                                    <option value="audio">Audio</option>
                                    <option value="gaming">Gaming</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="description" class="form-label">
                                    <i class="fas fa-align-left text-primary me-2"></i>Descripción del Producto
                                </label>
                                <textarea class="form-control" id="description" name="description" rows="4" 
                                          placeholder="Describe las características principales, beneficios y especificaciones técnicas del producto..." required></textarea>
                                @error('description')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="image" class="form-label">
                                    <i class="fas fa-camera text-primary me-2"></i>Imagen del Producto
                                </label>
                                <div class="upload-area" onclick="document.getElementById('image').click()">
                                    <div class="upload-icon">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                    </div>
                                    <h5 class="mb-2">Arrastra tu imagen aquí</h5>
                                    <p class="text-muted mb-0">o haz clic para seleccionar</p>
                                    <small class="text-muted">Formatos soportados: JPG, PNG, GIF (máx. 2MB)</small>
                                </div>
                                <input type="file" class="form-control d-none" id="image" name="image" 
                                       accept="image/*" onchange="previewImage(this)">
                                <div id="imagePreview" class="preview-container d-none">
                                    <img id="preview" class="preview-image" alt="Vista previa">
                                </div>
                                @error('image')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="stock" class="form-label">
                                            <i class="fas fa-boxes text-primary me-2"></i>Stock Disponible
                                        </label>
                                        <input type="number" class="form-control" id="stock" name="stock" 
                                               min="0" placeholder="50" value="1">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="discount" class="form-label">
                                            <i class="fas fa-percentage text-primary me-2"></i>Descuento (%)
                                        </label>
                                        <input type="number" class="form-control" id="discount" name="discount" 
                                               min="0" max="100" placeholder="0" value="0">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="warranty" class="form-label">
                                            <i class="fas fa-shield-alt text-primary me-2"></i>Garantía (meses)
                                        </label>
                                        <input type="number" class="form-control" id="warranty" name="warranty" 
                                               min="0" placeholder="12" value="12">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">
                                    <i class="fas fa-star text-primary me-2"></i>Características Destacadas
                                </label>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="feature1" name="features[]" value="Envío Gratis">
                                            <label class="form-check-label" for="feature1">
                                                <i class="fas fa-shipping-fast text-success me-2"></i>Envío Gratis
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="feature2" name="features[]" value="Producto Nuevo">
                                            <label class="form-check-label" for="feature2">
                                                <i class="fas fa-certificate text-warning me-2"></i>Producto Nuevo
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="feature3" name="features[]" value="Garantía Extendida">
                                            <label class="form-check-label" for="feature3">
                                                <i class="fas fa-shield-alt text-info me-2"></i>Garantía Extendida
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="feature4" name="features[]" value="Oferta Especial">
                                            <label class="form-check-label" for="feature4">
                                                <i class="fas fa-fire text-danger me-2"></i>Oferta Especial
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                                    <a href="{{ url('products') }}" class="btn btn-secondary btn-lg">
                                        <i class="fas fa-times me-2"></i> Cancelar
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-save me-2"></i> Guardar Producto
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-body text-center p-5">
                    <div class="mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                    </div>
                    <h3 class="fw-bold text-success mb-3">¡Producto Agregado!</h3>
                    <p class="text-muted mb-4">Tu producto ha sido agregado exitosamente a la tienda</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="{{ url('products/create') }}" class="btn btn-outline-primary">
                            <i class="fas fa-plus me-2"></i> Agregar Otro
                        </a>
                        <a href="{{ url('products') }}" class="btn btn-primary">
                            <i class="fas fa-store me-2"></i> Ver Tienda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Preview de imagen
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            const previewImg = document.getElementById('preview');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.classList.remove('d-none');
                };
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Animación del formulario
        document.addEventListener('DOMContentLoaded', function() {
            const formInputs = document.querySelectorAll('.form-control, .form-select');
            
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateY(-2px)';
                    this.parentElement.style.transition = 'all 0.3s ease';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateY(0)';
                });
            });
        });

        // Validación en tiempo real
        document.getElementById('productForm').addEventListener('submit', function(e) {
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                    field.classList.add('is-valid');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Por favor completa todos los campos requeridos');
            }
        });

        // Calcular precio con descuento
        document.getElementById('discount').addEventListener('input', function() {
            const price = parseFloat(document.getElementById('price').value) || 0;
            const discount = parseFloat(this.value) || 0;
            const finalPrice = price - (price * discount / 100);
            
            // Mostrar precio final si hay descuento
            if (discount > 0) {
                let priceInfo = document.getElementById('priceInfo');
                if (!priceInfo) {
                    priceInfo = document.createElement('small');
                    priceInfo.id = 'priceInfo';
                    priceInfo.className = 'text-success fw-bold mt-1 d-block';
                    document.getElementById('discount').parentElement.appendChild(priceInfo);
                }
                priceInfo.textContent = `Precio final: ${finalPrice.toFixed(2)}`;
            }
        });
    </script>
</body>
</html>