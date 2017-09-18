<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCaydensimlerCraigslistCategories3 extends Migration
{
    public function up()
    {
        Schema::table('caydensimler_craigslist_categories', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('slug')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('caydensimler_craigslist_categories', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('slug', 255)->nullable(false)->change();
        });
    }
}
