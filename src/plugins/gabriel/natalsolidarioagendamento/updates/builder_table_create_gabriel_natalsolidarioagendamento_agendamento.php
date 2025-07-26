<?php namespace Gabriel\Natalsolidarioagendamento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGabrielNatalsolidarioagendamentoAgendamento extends Migration
{
    public function up()
    {
        Schema::create('gabriel_natalsolidarioagendamento_agendamento', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('child_id');
            $table->integer('user_id');
            $table->date('scheduled_date');
            $table->boolean('completed');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gabriel_natalsolidarioagendamento_agendamento');
    }
}
