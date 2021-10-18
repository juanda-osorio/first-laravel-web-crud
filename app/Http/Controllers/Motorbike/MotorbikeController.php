<?php

namespace App\Http\Controllers\Motorbike;

use App\Http\Controllers\Controller;
use App\Models\Motorbike as MotoModel;
use Illuminate\Http\Request;
use App\Http\Requests\MotoRequest;
use Illuminate\Support\Str;

class MotorbikeController extends Controller
{
    function index(){
        // Obtengo todas las motos de la bbdd.
        // Se puede reemplazar all() por paginate() para la paginacion.
        $motos = MotoModel::paginate();

        //otra forma de enviar datos a la vista
        // return view('motorbikes.motos-index', ["motos" => $motos]);

        //Lo que hay en el 'compact' mapea la variable $motos en un string
        return view('motorbikes.index', compact('motos'));
    }

    function create(){
        return view('motorbikes.create');
    }

    
    function store(MotoRequest $request){        
        //* Forma NORMAL de 'crear' un objeto
        //$moto = new MotoModel();
        // $moto->marca = $request->marca;
        // $moto->modelo = $request->modelo;
        // $moto->cilindrada = $request->cilindrada;
        // $moto->potencia = $request->potencia;
        // $moto->anyo = $request->año;
        // $moto->save();

        //! Forma GUAY de 'crear' un objeto: Asignación Massiva (Fillable en model)
        $moto = MotoModel::create($request->all());
        return redirect()->route('motos.show', $moto);        
    }


    function show(MotoModel $moto){
        //*  He cambiado el nombre de la variable tanto aqui en el 'controller' como en las 'rutas'
        //*   recibiendo por parametro un id y poniendolo de tipo 'Model' me hace
        //*   una busqueda en la bbdd (find) y me devuelve el objeto entero
        //*   lo que me evita hacer la siguiente query:
        //      $moto = MotoModel::find($idMoto);

        return view('motorbikes.show', compact('moto'));
    }



    function edit(MotoModel $moto){
        return view('motorbikes.edit', compact('moto'));
    }



    function update(MotoRequest $request, MotoModel $moto){
        // * Forma NORMAL de validar un objeto
        // ! La forma GUAY de validar: FormRequest
        // $request->validate([
        //     "marca" => "required|max:15|min:3",
        //     "modelo" => "required|max:15|min:3",
        //     "anyo" => "required|min:4",
        // ]);

        //Str sirve para que el slug coja una campo y separe los espacios por - para crear una ruta amigable
        $moto->slug = Str::slug($request->marca." ".$request->modelo, "-");
        $moto->update($request->all());
        return redirect()->route('motos.show', $moto);
    }



    function destroy(MotoModel $moto){
        $moto->delete();
        return redirect()->route('motos.index');
    }


}
