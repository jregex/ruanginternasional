<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('role_id')->default(1);
            $table->string('username', 100)->default('faisal');
            $table->string('nama', 128)->default('Faisal A. Kadir');
            $table->string('email', 128)->unique()->default('cakghofur3@gmail.com');
            $table->string('password', 128)->default(sha1('regex0798'));
            $table->string('password_verification', 128)->nullable();
            $table->rememberToken();
            $table->string('gambar', 128)->default('default.png');
            $table->dateTime('login_time')->nullable();
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
        Schema::dropIfExists('users');
    }
}
