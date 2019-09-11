<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTextToStringAkreditasiTipeCollege extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipe_colleges', function (Blueprint $table) {
            $table->string('tipe_kampus')->change();
        });

        Schema::table('akreditasis', function(Blueprint $table) {
            $table->string('akreditasi')->change();
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
