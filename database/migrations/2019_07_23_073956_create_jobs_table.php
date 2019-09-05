<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_perusahaan');
            $table->string('job_title');            
            $table->string('tipe_pekerjaan', 100);
            $table->string('negara', 100);
            $table->string('kota', 100);            
            $table->boolean('remote');            
            $table->integer('jumlah_loker');
            $table->string('jobs_functions');            
            $table->string('jobs_roles')->nullable();            
            $table->string('work_experience')->nullable();            
            $table->text('benefit')->nullable();            
            $table->string('minimal_education')->nullable();
            $table->text('skill')->nullable();            
            $table->boolean('gaji_tampil')->nullable();
            $table->text('gaji')->nullable();            
            $table->text('bonus_salary')->nullable();            
            $table->text('jobs_descriptiom')->nullable();            
            $table->string('file_attachment')->nullable();            
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
        Schema::dropIfExists('jobs');
    }
}
