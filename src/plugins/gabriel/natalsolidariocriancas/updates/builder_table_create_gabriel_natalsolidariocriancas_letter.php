<?php namespace Gabriel\NatalSolidarioCriancas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGabrielNatalsolidariocriancasLetter extends Migration
{
    public function up()
    {
        Schema::create('gabriel_natalsolidariocriancas_letter', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('childs_id');
            $table->date('age_letter');
            $table->string('letter_descryption');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gabriel_natalsolidariocriancas_letter');
    }
}
