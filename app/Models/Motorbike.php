<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorbike extends Model
{
    use HasFactory;
    // Aqui colocamos los campos que queremos que se guarden
    protected $fillable = [
        // "marca",
        // "modelo",
        // "cilindrada",
        // "potencia",
        // "anyo",
        // "url_imagen",
    ];

    // Aqui colocamos los campos que queremos evitar que se guarden
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
