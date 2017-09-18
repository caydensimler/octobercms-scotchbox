<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCaydensimlerCraigslistCategories extends Migration
{
    public function up()
    {
        Schema::table('caydensimler_craigslist_categories', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('caydensimler_craigslist_categories', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
