<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slides', function (Blueprint $table) {
            $table->string('language')->default('tr');
        });
        Schema::table('board_members', function (Blueprint $table) {
            $table->string('language')->default('tr');
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->string('language')->default('tr');
        });
        Schema::table('news', function (Blueprint $table) {
            $table->string('language')->default('tr');
        });
        Schema::table('videos', function (Blueprint $table) {
            $table->string('language')->default('tr');
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->string('language')->default('tr');
        });
        Schema::table('menuitems', function (Blueprint $table) {
            $table->string('language')->default('tr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slides', function (Blueprint $table) {
            $table->dropColumn('language');
        });
        Schema::table('board_members', function (Blueprint $table) {
            $table->dropColumn('language');
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('language');
        });
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('language');
        });
        Schema::table('videos', function (Blueprint $table) {
            $table->dropColumn('language');
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('language');
        });
        Schema::table('menuitems', function (Blueprint $table) {
            $table->dropColumn('language');
        });
    }
}
