<?php namespace Mja\Mail\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class MakeCodeColumnNullable extends Migration
{

    public function up()
    {
        Schema::table('mja_mail_email_log', function ($table) {
            $table->string('code')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('mja_mail_email_log', function ($table) {
            $table->string('code')->nullable(false)->change();
        });
    }

}
