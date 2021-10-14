@extends('layouts.plantilla')

@section('title', 'Editar Moto')

@section('content')
    
    <h1 class="display-4">Editando moto </h1>
    
    <form class="mt-5" action="{{route('motos.update', $moto)}}" method="POST">
    
        {{-- Forma de enviar una petición PUT a través de un formulario con laravel --}}
        @method('PUT')
        @csrf

        <div class="form-group row mt-3">
            {{-- <label class="col-sm-2 col-form-label" for="marca">Marca:</label> --}}
            <div class="col-sm-10">
                <input class="form-control" type="text" name="marca" placeholder="* Marca" value="{{ old('marca',$moto->marca) }}">
            </div>
        </div>
            
        <div class="form-group row mt-3">
            {{-- <label class="col-sm-2 col-form-label" for="modelo">Modelo:</label> --}}
            <div class="col-sm-10">
                <input class="form-control" type="text" name="modelo" placeholder="* Modelo" value="{{ old('modelo', $moto->modelo)}}">
            </div>
        </div>

        <div class="form-group row mt-3">
            {{-- <label class="col-sm-2 col-form-label" for="url_imagen">URL Imagen:</label> --}}
            <div class="col-sm-10">
                <input class="form-control" type="text" name="url_imagen" placeholder="URL Imagen" value="{{$moto->url_imagen}}">
            </div>
        </div>
        
        <div class="form-group row mt-3">
            {{-- <label class="col-sm-2 col-form-label" for="">Cilindrada:</label> --}}
            <div class="col-sm-3">
                <input class="form-control" type="number" name="cilindrada" placeholder="Cilindrada" value="{{ old('cilindrada', $moto->cilindrada) }}">
            </div>
            <div class="col-sm-3">
                <input class="form-control" type="number" name="potencia" placeholder="Potencia" value="{{ old('potencia', $moto->potencia) }}">
            </div>
            <div class="col-sm-4">
                <input class="form-control" type="number" name="anyo" placeholder="* Año" value="{{ old('anyo', $moto->anyo) }}">
            </div>
        </div>

        <div class="form-group row mt-4">
            <div class="col-sm-6">
                <a type="submit" href="{{route('motos.index')}}" class="btn btn-outline-dark btn-lg btn-block form-control">Salir</a>
            </div>            
            <div class="col-sm-6">
                <button type="submit" class="btn btn-outline-dark btn-lg btn-block form-control">Guardar cambios</button>
            </div>

            <div class="col errorMessages" style="color: red;">
                @error('marca')
                    <br>
                        <small> * {{$message}} </small>
                    <br>
                @enderror
    
                @error('modelo')
                    <br>
                        <small> * {{$message}} </small>
                    <br>
                @enderror
    
                @error('anyo')
                    <br>
                        <small> * {{$message}} </small>
                    <br>
                @enderror
            </div>
        </div>
    </form>
@endsection