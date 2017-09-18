<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCaydensimlerCraigslistPost extends Migration
{
    public function up()
    {
        Schema::create('caydensimler_craigslist_post', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title', 50);
            $table->text('body');
            $table->integer('subcategory_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('caydensimler_craigslist_post');
    }
}
