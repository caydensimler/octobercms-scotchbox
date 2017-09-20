<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCaydensimlerCraigslistPSc2 extends Migration
{
    public function up()
    {
        Schema::create('caydensimler_craigslist_p_sc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->primary(['post_id','subcategory_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('caydensimler_craigslist_p_sc');
    }
}
