<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInUserProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_address_2')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('town')->nullable();
            $table->string('country')->default('Denmark');
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
            $table->dropColumn('company_name');
            $table->dropColumn('company_address');
            $table->dropColumn('company_address_2');
            $table->dropColumn('zip_code');
            $table->dropColumn('town');
            $table->dropColumn('country');
        });
    }
}
