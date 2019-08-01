<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_perusahaan', 100);            
            $table->string('logo_perusahaan')->nullable();            
            $table->text('visi_misi')->nullable();            
            $table->text('deskripsi_perusahaan')->nullable();            
            $table->text('alamat_perusahaan')->nullable();            
            $table->string('negara', 100)->nullable();            
            $table->string('tipe_industri', 100)->nullable();            
            $table->string('link_website', 100)->nullable();            
            $table->string('link_facebook', 100)->nullable();            
            $table->string('link_linkedin', 100)->nullable();            
            $table->string('link_instagram', 100)->nullable();            
            $table->string('link_twitter', 100)->nullable();            
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
        Schema::dropIfExists('perusahaans');
    }
}
