{{-- resources/views/productos/create.blade.php --}}
@extends('layouts.app')
@section('hide-navbar', true)
@section('hide-footer', true)
@section('css')
<style>
        
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
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
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        input[type="file"] {
            padding: 8px;
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #545b62;
        }
        .form-actions {
            text-align: center;
            margin-top: 30px;
        }
        .navigation {
            text-align: center;
            margin-bottom: 20px;
        }
        .navigation a {
            color: #007bff;
            text-decoration: none;
            margin: 0 15px;
        }
        .navigation a:hover {
            text-decoration: underline;
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
        
    </style>
@endsection

@section('content')
    <div class="navigation">
        <a href="/products">← Volver al listado</a>
    </div>
    <div class="container">
        <h1>Crear Nuevo Producto</h1>

        <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nombre del Producto *</label>
                <input type="text" id="name" name="name" required placeholder="Ingrese el nombre del producto">
            </div>

            <div class="form-group">
                <label for="description">Descripción *</label>
                <textarea id="description" name="description" required placeholder="Describe las características del producto"></textarea>
            </div>

            <div class="form-group">
                <label for="price">Precio *</label>
                <input type="number" id="price" name="price" step="0.01" min="0" required placeholder="0.00">
            </div>

            <div class="form-group">
                <label for="image">Imagen del Producto</label>
                <input type="file" id="image" name="image" accept="image/*">
                <small style="color: #666;">Formatos aceptados: JPG, PNG, GIF</small>
            </div>

            <div class="form-group">
                <label for="brand">Marca *</label>
                <input type="text" id="brand" name="brand" required placeholder="Ingrese la marca del producto">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Crear Producto</button>
                <a href="/products" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection

