<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCaydensimlerCraigslistPostsCategories2 extends Migration
{
    public function up()
    {
        Schema::dropIfExists('caydensimler_craigslist_posts_categories2');
    }
    
    public function down()
    {
        Schema::create('caydensimler_craigslist_posts_categories2', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->integer('category_id');
        });
    }
}
