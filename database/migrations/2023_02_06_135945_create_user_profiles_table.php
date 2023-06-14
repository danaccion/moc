<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('address');
            $table->integer('phone_number');
            $table->string('title');
            $table->string('resume');
            $table->string('add_more_profile_network');
            $table->string('meeting_frequency');
            $table->string('forms_of_meeting');
            $table->string('my_interest');
            $table->string('can_do_for_network');
            $table->string('can_network_do_for_me');
            $table->string('important_topic');
            $table->string('business_area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
