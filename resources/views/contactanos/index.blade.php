@extends('layouts.plantilla')

@section('css')
    .error{
        color: red;
    }
@endsection

{{-- Sección en línea --}}
@section('title', "Contactanos")
 
{{-- Sección en 'bloque' --}}
@section('content')
    
    <div class="jumbotron mt-3 mb-5">
        <h1 class="display-4">Déjanos un Mensaje</h1>        
    </div>

    {{-- {{route('contactanos.store')}} --}}
    <form action="" method="POST">
        @csrf
        <div class="row">

            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" placeholder="Nombre" name="nombre">
                    <label for="floatingName">Nombre</label>
                    @error('nombre')
                        <small class="error">{{$message}}</small>                        
                    @enderror
                </div>
            </div>

            <div class="col">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name="email">
                    <label for="floatingEmail">Email</label>
                    @error('email')
                        <small class="error">{{$message}}</small>                        
                    @enderror
                </div>
            </div>    

        </div> {{-- Fin row --}}

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Deja aquí tu comentario" id="floatingTextarea" style="height: 100px" name="comentarios"></textarea>
            <label for="floatingTextarea">Comentarios</label>
            @error('comentarios')
                <small class="error">{{$message}}</small>                        
            @enderror
        </div>

        <button class="btn btn-outline-dark" type="submit">Enviar Mensaje</button>
        <button class="btn btn-outline-dark" type="reset">Limpiar</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif

@endsection
