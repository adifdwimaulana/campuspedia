<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKarirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karirs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('profesi_terkait');
            $table->text('kisaran_pendapatan');
            $table->text('kualifikasi');
            $table->text('keahlian_yg_dibutuhkan');
            $table->text('instansi_pekerjaan');
            $table->text('deskripsi_karir');
            $table->string('gambar_terkait_karir');
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
        Schema::dropIfExists('karirs');
    }
}
