<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToCollege extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('colleges', function(Blueprint $table) {
            $table->integer('tipe_kampus_id')->unsigned()->change();
            $table->foreign('tipe_kampus_id')->references('id')->on('tipe_colleges');
            $table->integer('akreditasi_id')->unsigned()->change();
            $table->foreign('akreditasi_id')->references('id')->on('akreditasis');
            $table->integer('province_id')->unsigned()->change();
            $table->foreign('province_id')->references('id')->on('provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
