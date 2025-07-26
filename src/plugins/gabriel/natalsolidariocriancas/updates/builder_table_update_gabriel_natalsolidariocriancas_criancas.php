<?php namespace Gabriel\NatalSolidarioCriancas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGabrielNatalsolidariocriancasCriancas extends Migration
{
    public function up()
    {
        Schema::table('gabriel_natalsolidariocriancas_criancas', function($table)
        {
            $table->integer('user_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('gabriel_natalsolidariocriancas_criancas', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
