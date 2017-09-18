<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCaydensimlerCraigslistPost2 extends Migration
{
    public function up()
    {
        Schema::table('caydensimler_craigslist_post', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('caydensimler_craigslist_post', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
