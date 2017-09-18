<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCaydensimlerCraigslistPostsCategories extends Migration
{
    public function up()
    {
        Schema::dropIfExists('caydensimler_craigslist_posts_categories');
    }
    
    public function down()
    {
        Schema::create('caydensimler_craigslist_posts_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->integer('category_id');
        });
    }
}
