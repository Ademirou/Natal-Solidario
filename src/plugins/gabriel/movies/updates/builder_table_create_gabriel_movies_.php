<?php namespace Gabriel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGabrielMovies extends Migration
{
    public function up()
    {
        Schema::create('gabriel_movies_', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->text('descricao')->nullable();
            $table->integer('ano')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gabriel_movies_');
    }
}
