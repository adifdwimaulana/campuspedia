<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFieldColumnColleges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('colleges', function(Blueprint $table) {
            $table->integer('tipe_kampus')->change();
            $table->integer('akreditasi_kampus')->change();
            $table->integer('province')->change();
        });

        Schema::table('colleges', function(Blueprint $table) {
            $table->renameColumn('tipe_kampus', 'tipe_kampus_id');
            $table->renameColumn('akreditasi_kampus', 'akreditasi_id');
            $table->renameColumn('province', 'province_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
