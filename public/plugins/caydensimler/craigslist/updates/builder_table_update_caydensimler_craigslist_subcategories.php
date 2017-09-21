<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCaydensimlerCraigslistSubcategories extends Migration
{
    public function up()
    {
        Schema::table('caydensimler_craigslist_subcategories', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('caydensimler_craigslist_subcategories', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
