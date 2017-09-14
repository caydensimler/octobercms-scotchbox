<?php namespace RainLab\User\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddSocialColumnsToUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('rs_provider')->nullable();
            $table->string('rs_provider_id')->nullable()->unique();
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            if($table->hasColumn('rs_provider'))
                $table->dropColumn('rs_provider');
            
            if($table->hasColumn('rs_provider_id'))
                $table->dropColumn('rs_provider_id');
        });
    }

}
