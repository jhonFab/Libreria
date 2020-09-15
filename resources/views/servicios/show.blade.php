@extends('layout')
@section('titulo','Mostrar Solo un Servicio')

@section('contenido')
<div class="d-flex justify-content-between">
<caption><h1>Listado Servicio de {{$serv->nombre_servicio }}</h1><br><br></caption>
<p>
    <a href="{{route('servicios.create')}}" class="btn btn-primary" title="Nuevo Servicio">
    Nuevo Servicio</a>
    <a href="{{route('servicios.index')}}" class="btn btn-primary" title="Listado de Servicio">
    Listado de Servicios</a>
</p>
</div>

<div class= "align-items-justify">

<table class="table" class="d-felx flex-wrap">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Id Servicio</th>
      <th scope="col">Nombre del Servicio</th>
      <th scope="col">Cédula del Empeleado</th>
      <th scope="col">Duración del Servicio (Min)</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
        <tr>
        <td>{{$serv->id}}</td>
        <td>{{$serv->nombre_servicio}}</td>
            <td>{{$serv->cedula_empleado}}</td>
            <td>{{$serv->duracion}}</td>
            <td>{{$serv->precio}}</td>
        </tr>
  </tbody>
</table>
</div>
<!--<table border="5px" solid>
<caption>Servicio de {{$serv->nombre_servicio }}<br><br></caption>
<thead>
    <tr>
        <th>Nombre de Servicio</th>
        <th>Cedula de Empleado</th>
        <th>Duración</th>
        <th>Precio</th>
    </tr>
</thead>
<tbody>
       <tr>
            <td>{{$serv->nombre_servicio}}</td>
            <td>{{$serv->cedula_empleado}}</td>
            <td>{{$serv->duracion}}</td> 
            <td>{{$serv->precio}}</td>
       </tr>
</tbody>
</table>-->
@endsection