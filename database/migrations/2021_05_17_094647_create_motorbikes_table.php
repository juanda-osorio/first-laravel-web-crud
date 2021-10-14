<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorbikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorbikes', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 20);
            $table->string('modelo', 40);
            $table->integer('cilindrada');
            $table->integer('potencia');
            $table->integer('anyo');
            $table->string('url_imagen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motorbikes');
    }
}
