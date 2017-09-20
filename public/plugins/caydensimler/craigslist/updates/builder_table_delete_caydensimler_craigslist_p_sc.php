<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCaydensimlerCraigslistPSc extends Migration
{
    public function up()
    {
        Schema::dropIfExists('caydensimler_craigslist_p_sc');
    }
    
    public function down()
    {
        Schema::create('caydensimler_craigslist_p_sc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->primary(['post_id','subcategory_id']);
        });
    }
}
