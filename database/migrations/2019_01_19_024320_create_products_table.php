<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Product;


class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
             
            //Creacion De las tablas de la Base de datos
            $table->increments('id');
            $table->string('name');//nombre
            $table->string('last_name');//apellido
            $table->string('nationality');//nacionalidad
            $table->integer('birthdate');//fecha de nacimiento
            $table->string('sex');//sexo
            $table->string('email');//Email
            $table->string('civil_status');//estado civil
            $table->integer('id_number');//numero de cedula
            $table->string('title_name');//nombre del titulo
            $table->string('type_of_title');//tipo de titulo
            $table->string('level_of_title');//nivel del titulo
            $table->string('status_of_title');//status del titulo
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
        Schema::dropIfExists('products');
    }
}
