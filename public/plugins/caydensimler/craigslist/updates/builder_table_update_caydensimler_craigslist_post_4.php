<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCaydensimlerCraigslistPost4 extends Migration
{
    public function up()
    {
        Schema::table('caydensimler_craigslist_post', function($table)
        {
            $table->string('contact_email', 35)->change();
        });
    }
    
    public function down()
    {
        Schema::table('caydensimler_craigslist_post', function($table)
        {
            $table->string('contact_email', 20)->change();
        });
    }
}
