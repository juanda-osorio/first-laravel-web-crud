<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function mostrarNombre(?string $nombre = null, ?string $apellido = null){
        // dd($nombre, $apellido);
        //el indice del array asociativo, es lo que espera la vista.
        // las variables que llegan por parámetro, son las que me llegan de la ruta.
        return view("nombre", [
            'nombre' => $nombre,
            "apellido" => $apellido
        ]);
    }
}
