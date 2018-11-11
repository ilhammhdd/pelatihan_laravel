<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraktikumsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('labworks', function (Blueprint $table) {
            $table->increments('id');
            $table->char('kode', '10');
            $table->string('nama');
            $table->unsignedInteger('lab_id');
            $table->foreign('lab_id')->references('id')->on('labs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('labworks');
    }
}
