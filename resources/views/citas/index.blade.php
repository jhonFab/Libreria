@extends('layout')
@section('titulo','Listado de Citas')

@section('contenido')
<div class="d-flex justify-content-between">
<caption><h1>Listado de Libros</h1><br><br></caption>
<p>
    <a href="{{route('citas.create')}}" class="btn btn-primary" title="Nueva Libro">
    Nueva Libro</a>
</p>
</div>

<div class= "align-items-justify">
@if ($cit->isNotEmpty())
<table class="table" class="d-felx flex-wrap">
  <thead class="thead-dark">
    <tr>
    <th scope="col">ISBN</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Editorial</th>
      <th scope="col">Calificación</th>
      <th scope="col">Reseña</th>
      <th scope="col" colspan="2">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cit as $i)
        <tr>
        <td>{{$i->id}}</td>
        <td>
            <a href=" {{ route('citas.show',$i->titulo)}}" title="Ver más información">
            {{$i->titulo}}</a> 
        </td>
            <td>{{$i->autor}}</td>
            <td>{{$i->editorial}}</td>
            <td>{{$i->calificacion}}</td>
            <td>{{$i->resena}}</td>
            <td> <a href=" {{ route('citas.edit',$i->id) }}" title="Editar"><span class="oi oi-pencil"></span></a></td>
            <td>
                <form action="{{ route('citas.destroy',$i->id) }}" method="POST">
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
    <p>No hay citas registradas</p>
@endif
</div>
@endsection