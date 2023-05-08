<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tourist_attractions', function (Blueprint $table) {
            $table->string('operational_hour')->after('imagebinary');
            $table->string('short_address')->after('operational_hour');
            $table->string('address')->after('short_address');
            $table->string('ticket_price')->after('address');
            $table->string('contact')->after('ticket_price');
            $table->decimal('latitude',10, 8)->after('contact');
            $table->decimal('longtitude',10, 8)->after('latitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tourist_attractions', function (Blueprint $table) {
            $table->dropColumn('operational_hour');
            $table->dropColumn('short_address');
            $table->dropColumn('address');
            $table->dropColumn('ticket_price');
            $table->dropColumn('contact');
            $table->dropColumn('latitude');
            $table->dropColumn('longtitude');
        });
    }
};
