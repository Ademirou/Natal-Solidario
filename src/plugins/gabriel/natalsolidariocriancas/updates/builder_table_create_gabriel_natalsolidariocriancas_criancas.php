<?php namespace Gabriel\NatalSolidarioCriancas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGabrielNatalsolidariocriancasCriancas extends Migration
{
    public function up()
    {
        Schema::create('gabriel_natalsolidariocriancas_criancas', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name');
            $table->date('birthdate');
            $table->string('turma');
            $table->string('shirt_size');
            $table->string('pants_size');
            $table->integer('footwear_size');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gabriel_natalsolidariocriancas_criancas');
    }
}
