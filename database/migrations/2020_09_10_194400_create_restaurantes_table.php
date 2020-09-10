<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(function (Blueprint $table) {
            $table->id();
            $table->string('nombre_restaurante');
            $table->double('telefono_restaurante');
            $table->string('direccion_restaurante');
            $table->text('direccion_restaurante');
            $table->timestamps();
        },
            'restaurantes');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurantes');
    }
}
