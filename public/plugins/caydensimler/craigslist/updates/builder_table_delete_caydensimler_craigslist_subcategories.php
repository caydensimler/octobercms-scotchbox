<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCaydensimlerCraigslistSubcategories extends Migration
{
    public function up()
    {
        Schema::dropIfExists('caydensimler_craigslist_subcategories');
    }
    
    public function down()
    {
        Schema::create('caydensimler_craigslist_subcategories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('category_id');
            $table->string('subcategory', 255);
        });
    }
}
