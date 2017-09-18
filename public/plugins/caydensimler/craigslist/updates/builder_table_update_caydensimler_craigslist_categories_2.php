<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCaydensimlerCraigslistCategories2 extends Migration
{
    public function up()
    {
        Schema::table('caydensimler_craigslist_categories', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('caydensimler_craigslist_categories', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
