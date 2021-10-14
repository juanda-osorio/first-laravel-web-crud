<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    //mostrará formularo
    public function index(){
        return view('contactanos.index');
    }

    //procesar formulario y enviar correo electronico
    public function store(Request $request){
        $request->validate([
            'nombre'      => 'required',
            'email'       => 'required|email',
            'comentarios' => 'required',
        ]);
        $correo = new ContactanosMailable($request); 
        Mail::to('juanda_osorio@gmail.com')->send($correo);
        
        //with() ==>> Guarda en sessión clave-valor.
        return redirect()->route('contactanos.index')->with('info', 'Mensaje Enviado');
    }
}
