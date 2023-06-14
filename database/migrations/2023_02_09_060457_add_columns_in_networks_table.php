<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('networks', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->bigInteger('user_id');
            $table->string('logo')->nullable();
            $table->string('primary_color', 7)->nullable();
            $table->string('secondary_color', 7)->nullable();
            $table->string('tertiary_color', 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('networks', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('user_id');
            $table->dropColumn('logo');
            $table->dropColumn('primary_color');
            $table->dropColumn('secondary_color');
            $table->dropColumn('tertiary_color');
        });
    }
}
