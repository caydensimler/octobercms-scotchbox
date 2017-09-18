<?php namespace CaydenSimler\Craigslist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCaydensimlerCraigslistPost3 extends Migration
{
    public function up()
    {
        Schema::table('caydensimler_craigslist_post', function($table)
        {
            $table->integer('price')->nullable()->unsigned();
            $table->string('contact_email', 20);
            $table->text('body')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('caydensimler_craigslist_post', function($table)
        {
            $table->dropColumn('price');
            $table->dropColumn('contact_email');
            $table->text('body')->nullable(false)->change();
        });
    }
}
