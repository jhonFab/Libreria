@extends('layout')
@section('titulo','Mostrar Solo uno')

@section('contenido')
<div class="d-flex justify-content-between">
<caption><h1>Citas de {{$cit->id_cliente}}</h1><br><br></caption>
<p>
    <a href="{{route('citas.create')}}" class="btn btn-primary" title="NuevO Libro">
    NuevO Libro</a>
    <a href="{{route('citas.index')}}" class="btn btn-primary" title="Listado de Libros">
    Listado de Libros</a>
</p>
</div>

<div class= "align-items-justify">

<table class="table" class="d-felx flex-wrap">
  <thead class="thead-dark">
    <tr>
    <th scope="col">ISBN</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Editorial</th>
      <th scope="col">Reseña</th>
    </tr>
  </thead>
  <tbody>
        <tr>
        <td>{{$cit->id}}</td>
        <td>{{$cit->titulo}}</td>
        <td>{{$cit->autor}}</td>
        <td>{{$cit->editorial}}</td>
        <td>{{$cit->calificacion}}</td>
        <td>{{$cit->resena}}</td>
        </tr>
  </tbody>
</table>
</div>
@endsection