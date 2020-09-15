@extends('layout')
@section('titulo','Servicios')

@section('contenido')
<center>
<h1>Formulario de Editar Servicios</h1>
<form method="POST" action="{{route('servicios.update', $serv->id)}}">
    @csrf
    {{method_field('PUT')}}   
    <label>Nombre de Servicio</label>
    <input type="text" name="nombre_servicio" value="{{$serv->nombre_servicio}}"><br><br>
    <label>Cédula de Empleado</label>
    <input type="text" name="cedula_empleado" value="{{$serv->cedula_empleado}}"><br><br>
    <label>Duración del Servicio (Min)</label>
    <input type="text" name="duracion" value="{{$serv->duracion}}"><br><br>
    <label>Precio</label>
    <input type="text" name="precio" value="{{$serv->precio}}"><br><br>
    <button>Actualizar</button>
</form>
</center>
@endsection