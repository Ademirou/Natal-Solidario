<?php namespace Gabriel\NatalSolidarioCriancas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGabrielNatalsolidariocriancasLetter extends Migration
{
    public function up()
    {
        Schema::table('gabriel_natalsolidariocriancas_letter', function($table)
        {
            $table->text('letter_descryption')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('gabriel_natalsolidariocriancas_letter', function($table)
        {
            $table->string('letter_descryption', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
