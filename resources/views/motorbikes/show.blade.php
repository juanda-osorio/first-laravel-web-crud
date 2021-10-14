@extends('layouts.plantilla')

@section('title', 'Detalle Moto')
@section('content')

<div class="col-sm-12 text-center">
    <figure class="figure">
        <img src="{{$moto->url_imagen}}" class="rounded figure-img img-fluid" style="height: 600px" alt="{{$moto->marca}} {{$moto->modelo}}">
      </figure>
</div>

<div class="col-sm-6 offset-sm-3 text-center">
    <div class="card">
        <div class="card-header">
          {{$moto->marca}}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$moto->modelo}}</h5>
        </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"> Cilindrada: {{$moto->cilindrada}} c.c. </li>
            <li class="list-group-item"> Potencia: {{$moto->potencia}} cv </li>
            <li class="list-group-item"> Año: {{$moto->anyo}} </li>
          </ul>
    </div>
    <a href="{{route('motos.index')}}" class="btn btn-outline-dark my-1">Volver al Listado</a>
    <a href="{{route('motos.edit', $moto)}}" class="btn btn-outline-dark">Modificar</a>
</div>

    

    
@endsection