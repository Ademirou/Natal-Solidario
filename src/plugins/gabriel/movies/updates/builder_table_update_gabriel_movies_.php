<?php namespace Gabriel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGabrielMovies extends Migration
{
    public function up()
    {
        Schema::table('gabriel_movies_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('gabriel_movies_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
