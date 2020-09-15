@extends('layout')
@section('titulo','Servicios')

@section('contenido')
<center>
<h1>Agregar Servicios</h1>
<form method="POST" action="{{route('servicios.store')}}">
    @csrf
    <label>Nombre del Servicio</label>
    <input type="text" name="nombre_servicio"><br><br>
    <label>Cédula del Empleado</label>
    <input type="text" name="cedula_empleado"><br><br>
    <label>Duración del Servicio (Min)</label>
    <input type="text" name="duracion"><br><br>
    <label>Precio</label>
    <input type="text" name="precio"><br><br>
    <button>Agregar</button>
</form>
</center>
@endsection