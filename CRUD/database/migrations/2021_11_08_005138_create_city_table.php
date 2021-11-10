<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityTable extends Migration
{
    
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('city');
    }
}
