<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaunchUsersRequied extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('launch_users', function (Blueprint $table){
            $table->string('company')->change();
            $table->string('position')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('launch_users', function (Blueprint $table){
            $table->string('company')->nullable()->change();
            $table->string('position')->nullable()->change();
        });
    }
}
