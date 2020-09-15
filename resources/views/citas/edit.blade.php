@extends('layout')
@section('titulo','Clientes')

@section('contenido')
<center>
<h1>Formulario de Editar Citas</h1>
<form method="POST" action="{{route('citas.update', $cit->id)}}">
    @csrf
    {{method_field('PUT')}}
    <label>ISBN</label>
    <input type="text" name="id" value="{{$cit->id}}"><br><br>
    <label>Titulo</label>
    <input type="text" name="titulo" value="{{$cit->titulo}}"><br><br>
    <label>Autor</label>
    <input type="text" name="autor"value="{{$cit->autor}}"><br><br>
    <label>Editorial</label>
    <input type="text" name="editorial"value="{{$cit->editorial}}"><br><br>
    <label>-Calificación</label>
    <input type="text" name="calificacion"value="{{$cit->calificacion}}"><br><br>
    <label>Reseña</label>
    <input type="text" name="resena" value="{{$cit->resena}}"><br><br>
    <button>Actualizar</button>
</form>
</center>
@endsection