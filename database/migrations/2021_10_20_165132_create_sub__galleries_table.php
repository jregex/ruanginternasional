<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_galleries', function (Blueprint $table) {
            $table->id();
            $table->integer('kategori_id');
            $table->string('nama_file', 256);
            $table->string('nama', 256);
            $table->string('ukuran', 256)->nullable();
            $table->dateTime('tgl_upload')->nullable();
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
        Schema::dropIfExists('sub_galleries');
    }
}
