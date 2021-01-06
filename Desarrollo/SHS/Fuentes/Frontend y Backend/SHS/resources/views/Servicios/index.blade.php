@extends('layouts.app')

@section('content')

<div class="container">
@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{Session::get('Mensaje')}} 
</div>
    
@endif

<a href="{{url('servicios/create')}}"class="btn btn-success">Agregar Servicio</a> 
<br/>
<br/>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Precio</th>
          
        </tr>
    </thead>
    <tbody>
    @foreach($servicios as $servicio)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
        <img src="{{asset('storage').'/'.$servicio->foto}}" class="img-thumbnail img-fluid" alt="" width="150">

        </td>
            <td>{{$servicio->titulo}}</td>
            <td>{{$servicio->descripcion}}</td>
            <td>{{$servicio->precio}}</td>
        <td> 
            
        <a class="btn btn-warning" href="{{url('/servicios/'.$servicio->id.'/edit')}}">Editar
        </a>
        <form method="post" action = "{{url('/servicios/'.$servicio->id)}}">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
        </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection