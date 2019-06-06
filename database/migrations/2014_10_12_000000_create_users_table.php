<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('street');
            $table->string('town');
            $table->string('province');
            $table->integer('zipcode');            
            $table->rememberToken();
            $table->timestamps();
        });

        // <-----ESTO QUIERO AGREGAR----->
        // Schema::table('users', function (Blueprint $table) {
        //     $table->string('last_name', 100);
        //     $table->string('street');
        //     $table->string('town');
        //     $table->string('province');
        //     $table->integer('zipcode');
        // });
        // <-----ESTO QUIERO AGREGAR----->

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // <-----ESTO QUIERO AGREGAR----->
        // Schema::table('users', function (Blueprint $table) {
        //   $table->dropColumn('last_name');
        //   $table->dropColumn('street');
        //   $table->dropColumn('town');
        //   $table->dropColumn('province');
        //   $table->dropColumn('zipcode');
        // });
        // <-----ESTO QUIERO AGREGAR----->

        Schema::dropIfExists('users');
    }
}
