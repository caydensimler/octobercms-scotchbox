<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCaydensimlerCraigslistPostCategory extends Migration
{
    public function up()
    {
        Schema::dropIfExists('caydensimler_craigslist_post_category');
    }
    
    public function down()
    {
        Schema::create('caydensimler_craigslist_post_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->integer('category_id');
        });
    }
}
