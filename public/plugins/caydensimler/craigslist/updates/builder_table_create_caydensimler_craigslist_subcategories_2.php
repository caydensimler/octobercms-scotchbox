<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCaydensimlerCraigslistSubcategories2 extends Migration
{
    public function up()
    {
        Schema::create('caydensimler_craigslist_subcategories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('subcategory')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('caydensimler_craigslist_subcategories');
    }
}
