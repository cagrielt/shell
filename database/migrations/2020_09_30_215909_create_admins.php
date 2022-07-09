<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
        });

        
        DB::table('admins')->insert(['email' => 'kaan@tazefikir.com','password' => bcrypt('taze2020!!')]);
        DB::table('admins')->insert(['email' => 'engin@tazefikir.com','password' => bcrypt('taze2020!!')]);
        DB::table('admins')->insert(['email' => 'volkan@tazefikir.com','password' => bcrypt('taze2020!!')]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
