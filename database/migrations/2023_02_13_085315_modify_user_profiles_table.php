<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->bigInteger('user_id')->change();
            $table->text('address')->nullable()->change();
            $table->string('phone_number')->nullable()->change();
            $table->text('title')->nullable()->change();
            $table->longText('resume')->nullable()->change();
            $table->longText('add_more_profile_network')->nullable()->change();
            $table->text('business_area')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->integer('user_id')->change();
            $table->string('address')->change();
            $table->integer('phone_number')->change();
            $table->string('title')->change();
            $table->string('resume')->change();
            $table->string('add_more_profile_network')->change();
        });
    }
}
