@extends('layout')
@section('titulo','Cita')

@section('contenido')
<center>
<h1>Agregar Libro</h1>
<form method="POST" action="{{route('citas.store')}}">
    @csrf
    <label>ISBN</label>
    <input type="text" name="id"><br>
    <label>Titulo</label>
    <input type="text" name="titulo"><br>
    <label>Autor</label>
    <input type="text" name="autor"><br>
    <label>Editorial</label>
    <input type="text" name="editorial"><br>
    <label>Calificacion</label>
    <input type="text" name="calificacion"><br>
    <label>Reseña</label>
    <textarea name="resena" cols="30" rows="5"></textarea><br><br>
    <button>Agregar</button>
</form>
</center>
@endsection