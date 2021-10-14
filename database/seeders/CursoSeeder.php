<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso as CursoModel;


class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //Numero de registros con los que se rellenará.
        //Nótese que es el MODELO el que LLAMA al FACTORY
        CursoModel::factory(50)->create();
    }
}
