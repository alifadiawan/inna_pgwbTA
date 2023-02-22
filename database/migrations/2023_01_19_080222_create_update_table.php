<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('update', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('ekskul_id')->unsigned();
            $table->foreign('ekskul_id')->references('id')->on('ekstrakulikuler')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('deskripsi');
            $table->string('hari');
            $table->string('jam');
            $table->string('jam2');
            $table->char('foto1');
            $table->char('foto2');
            $table->char('foto3');
            $table->string('nama_pembina');
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
        Schema::dropIfExists('update');
    }
};
