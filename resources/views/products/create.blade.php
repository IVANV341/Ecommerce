
@extends('layouts.app')
@section('content')
<h1>Formulario para crear producto</h1>
<form action="" method="post">
    <label for="name">Nombre:</label>
    <input type="text" name="name">
    <br>
    <label for="description">Description:</label>
    <textarea name="description"cols="30" rows="5"></textarea>
    <br>
    <label for="price">Price:</label>
    <input type="number" name="price">
    <br>
    <label for="image">Image:</label>
    <input type="file" name="image">
    <br>
    <label for="brand">Brand:</label>
    <input type="text" name="brand">
</form>
@endsection
