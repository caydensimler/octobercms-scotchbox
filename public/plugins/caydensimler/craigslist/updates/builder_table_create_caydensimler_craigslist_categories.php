<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCaydensimlerCraigslistCategories extends Migration
{
    public function up()
    {
        Schema::create('caydensimler_craigslist_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('categories');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('caydensimler_craigslist_categories');
    }
}
