@extends('layouts.plantilla')

@section('title', 'Agregar Moto')

@section('content')
    
    <h1 class="display-4">En esta página podrás dar de alta motos</h1>
    
    
    <form class="mt-5" action="{{route('motos.store')}}" method="POST">
        @csrf
        <div class="form-group row mt-3">
            <label class="col-sm-2 col-form-label" for="marca">Marca</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="marca" placeholder="* Marca" value="{{old('marca')}}">
            </div>
        </div>
            
        <div class="form-group row mt-3">
            <label class="col-sm-2 col-form-label" for="modelo">Modelo</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="modelo" placeholder="* Modelo" value="{{old('modelo')}}">
            </div>
        </div>
        
        <div class="form-group row mt-3">
            <label class="col-sm-2 col-form-label" for="">Cilindrada</label>
            <div class="col-sm-3">
                <input class="form-control" type="number" name="cilindrada" placeholder="Cilindrada" value="{{old('cilindrada')}}">
            </div>

            <div class="col-sm-3">
                <input class="form-control" type="number" name="potencia" placeholder="Potencia" value="{{old('potencia')}}">
            </div>

            <div class="col-sm-4">
                <input class="form-control" type="number" name="anyo" placeholder="* Año" value="{{old('anyo')}}">
            </div>
        </div>

        <div class="form-group row mt-4">
            <div class="col-sm-6">
                <a type="submit" href="{{route('motos.index')}}" class="btn btn-outline-dark btn-lg btn-block form-control">Regresar</a>
            </div>
            
            <div class="col-sm-6">
                <button type="submit" class="btn btn-outline-dark btn-lg btn-block form-control">Guardar</button>
            </div>
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
    </form>
@endsection