<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCaydensimlerCraigslistCategories extends Migration
{
    public function up()
    {
        Schema::dropIfExists('caydensimler_craigslist_categories');
    }
    
    public function down()
    {
        Schema::create('caydensimler_craigslist_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('categories', 255);
            $table->string('slug', 255);
        });
    }
}
