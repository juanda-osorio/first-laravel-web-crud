@extends('layouts.plantilla')



@section('content')

    @if (!$nombre && !$apellido)
        @section('title', 'Nombre y Apellido')
        <h1>No viene el usuario</h1>
    @else
        @section('title', $nombre ." ". $apellido)
        <h1 class="display-2">Hola Mundo {{ Str::upper($nombre) }} {{ Str::lower($apellido) }}</h1>
        {{-- asi se mete un componente o vista --}}
        {{-- @include('welcome') --}}
    @endif

    <div class="col-sm-3">
        <a class="btn btn-outline-dark" role="button" href="{{route('user.home')}}">Volver a la pagina principal</a>
    </div>
    
@endsection
    
