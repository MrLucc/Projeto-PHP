<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitysTable extends Migration
{
    
    public function up()
    {
        Schema::create('citys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('longradouro');
            $table->string('numero');
            $table->string('bairro');
            
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('citys');
    }
}
