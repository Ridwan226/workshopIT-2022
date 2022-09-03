<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('mahasiswas', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('fakultas_id');
      $table->foreign('fakultas_id')->references('id')->on('fakultas')->onDelete('cascade');
      $table->string('nama');
      $table->string('npm');
      $table->date('tanggal_lahir');
      $table->text('alamat')->nullable();
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
    Schema::dropIfExists('mahasiswas');
  }
}
