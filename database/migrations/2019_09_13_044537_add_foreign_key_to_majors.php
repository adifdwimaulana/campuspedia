<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToMajors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('majors', function(Blueprint $table) {
            $table->integer('faculty_id')->after('daya_tampung')->unsigned();
            $table->foreign('faculty_id')->references('id')->on('faculties');
            $table->integer('college_id')->after('faculty_id')->unsigned();
            $table->foreign('college_id')->references('id')->on('colleges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('majors', function(Blueprint $table) {
            $table->dropColumn('faculty_id');
            $table->dropColumn('college_id');
        });
    }
}
