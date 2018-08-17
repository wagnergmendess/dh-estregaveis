<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelateMoviesAndDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::disableForeignKeyConstraints();
        Schema::table('movies', function (Blueprint $table) {
            $table->unsignedInteger('director_id');
            $table->foreign('director_id')->references('id')->on('directors');
        });
        Schema::enableForeignKeyConstraints();
    }
       

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('director_id');
            $table->dropForeign('director_id');
        });
        Schema::enableForeignKeyConstraints();
    }
}
