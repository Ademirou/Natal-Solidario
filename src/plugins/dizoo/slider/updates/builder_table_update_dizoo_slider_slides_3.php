<?php namespace Dizoo\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDizooSliderSlides3 extends Migration
{
    public function up()
    {
        Schema::table('dizoo_slider_slides', function($table)
        {
            $table->string('title', 250)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dizoo_slider_slides', function($table)
        {
            $table->string('title', 25)->change();
        });
    }
}
