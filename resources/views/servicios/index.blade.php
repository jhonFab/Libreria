@extends('layout')
@section('titulo','Listado de Servicios')

@section('contenido')

<div class="d-flex justify-content-between">
<caption><h1>Listado de Servicios</h1><br><br></caption>
<p>
    <a href="{{route('servicios.create')}}" class="btn btn-primary" title="Nuevo Servicio">
    Nuevo Servicio</a>
</p>
</div>

<div class= "align-items-justify">
@if ($serv->isNotEmpty())
<table class="table" class="d-felx flex-wrap">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Id Servicio</th>
      <th scope="col">Nombre del Servicio</th>
      <th scope="col">Cédula del Empleado</th>
      <th scope="col">Duración del Servicio (Min)</th>
      <th scope="col">Precio</th>
      <th scope="col" colspan="2">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($serv as $i)
        <tr>
        <td>{{$i->id}}</td>
        <td>
            <a href=" {{ route('servicios.show',$i->id)}}" title="Ver más información">
            {{$i->nombre_servicio}}</a> 
        </td>
            <td>{{$i->cedula_empleado}}</td>
            <td>{{$i->duracion}}</td>
            <td>{{$i->precio}}</td>
            <td> <a href=" {{ route('servicios.edit',$i->id) }}" title="Editar"><span class="oi oi-pencil"></span></a></td>
            <td>
                <form action="{{ route('servicios.destroy',$i->id) }}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" title="Eliminar"><span class="oi oi-trash"></span></button>
                </form>
            </td> 
        </tr>
    @endforeach
  </tbody>
</table>
@else 
    <p>No hay servicios registrados</p>
@endif
</div>
<!--<table border="5px" solid>
<caption>Servicios<br><br></caption>
<thead>
    <tr>
        <th>Nombre del Servicio</th>
        <th>Cedula del Empeleado</th>
        <th colspan="2">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($serv as $i)
        <tr>
        <td>
            <a href=" {{ route('servicios.show',$i->id) }}">
            {{$i->nombre_servicio}}</a> 
        </td>
            <td>{{$i->cedula_empleado}}</td>
            <td> <a href=" {{ route('servicios.edit',$i->id) }}">Editar </a> </td>
            <td>
                <form action="{{ route('servicios.destroy',$i->id) }}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit">Eliminar</button>
                </form>
            </td> 
        </tr>
    @endforeach
</tbody>
</table>-->
@endsection