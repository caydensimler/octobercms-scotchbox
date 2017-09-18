<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCaydensimlerCraigslistPC extends Migration
{
    public function up()
    {
        Schema::dropIfExists('caydensimler_craigslist_p_c');
    }
    
    public function down()
    {
        Schema::create('caydensimler_craigslist_p_c', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->integer('category_id');
            $table->primary(['post_id','category_id']);
        });
    }
}
