<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCaydensimlerCraigslistSubcategories extends Migration
{
    public function up()
    {
        Schema::create('caydensimler_craigslist_subcategories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id');
            $table->string('subcategory');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('caydensimler_craigslist_subcategories');
    }
}
