<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('reference')->nullable();
            $table->string('area')->nullable();
            $table->string('interest')->nullable();
            $table->dropColumn('email_confirmed');
            $table->dropColumn('company_legal_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('reference');
            $table->dropColumn('area');
            $table->dropColumn('interest');
            $table->boolean('email_confirmed')->default(false);
            $table->string('company_legal_name')->nullable();
        });
    }
}
