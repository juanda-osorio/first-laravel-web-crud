<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User as UsuarioModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        UsuarioModel::factory(10)->create();
        // Para cosas sencillas Aquí se podría llamar directamente al Factory en lugar de al seeder,
        // como hace el ejemplo anterior.
        //Nótese que el que LLAMA al FACTORY es el MODELO.
        
        $this->call(CursoSeeder::class);
        $this->call(MotorbikeSeeder::class);
    }
}
