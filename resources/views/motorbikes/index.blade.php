@extends('layouts.plantilla')

@section('title', 'Bienvenido a Motorbikes!')

@section('content')
<div class="col-sm-3 mt-5">
    <a class="btn btn-outline-dark" role="button" href="{{route('motos.create')}}"> <i class="fa fa-plus-circle fa-lg"></i> Crear Nueva </a>
</div>

<div class="row mt-3">    
    <div class="col-sm-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Cilindrada</th>
                    <th scope="col">Potencia</th>
                    <th scope="col">Año</th>
                </tr>
            </thead>
            
            @foreach ($motos as $moto)
            <tbody>
                <tr>
                    <th scope="row">{{$moto->id}}</th>
                    <td> {{$moto->marca}} </td>
                    <td> {{$moto->modelo}}</td>
                    <td> {{$moto->cilindrada}} c.c.</td>
                    <td> {{$moto->potencia}} cv</td>
                    <td> {{$moto->anyo}}</td>
                    <td> <a class="btn btn-outline-dark btn-sm" href="{{route('motos.show', $moto)}}"> <i class="fa fa-eye"></i> Ver </a> </td>
                    <td> 
                        <form action="{{route('motos.destroy', $moto)}}" method="POST" class="formulario-eliminar">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit"> <i class="fa fa-trash"></i> Borrar </button>
                        </form> 
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>    
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $(".formulario-eliminar").submit(function(e){
                alert("he dado al botón!!");
                console.log(e);
                e.preventDefault();
            });

        })
    </script>
@endsection