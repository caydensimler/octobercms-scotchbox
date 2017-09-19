<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCaydensimlerCraigslistPost8 extends Migration
{
    public function up()
    {
        Schema::table('caydensimler_craigslist_post', function($table)
        {
            $table->dropColumn('sub_category');
        });
    }
    
    public function down()
    {
        Schema::table('caydensimler_craigslist_post', function($table)
        {
            $table->string('sub_category', 255)->nullable();
        });
    }
}
