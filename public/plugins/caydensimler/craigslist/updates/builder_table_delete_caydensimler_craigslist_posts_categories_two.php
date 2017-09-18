<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCaydensimlerCraigslistPostsCategoriesTwo extends Migration
{
    public function up()
    {
        Schema::dropIfExists('caydensimler_craigslist_posts_categories_two');
    }
    
    public function down()
    {
        Schema::create('caydensimler_craigslist_posts_categories_two', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->integer('category_id');
        });
    }
}
