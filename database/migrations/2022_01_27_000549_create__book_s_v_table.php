<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookSVTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_book_s_v', function (Blueprint $table) {
            $table->increments('sv_ID');
            $table->integer('stud_ID');
            $table->integer('lect_ID');
            $table->string('lect_expertise');
            $table->string('lect_name');
            $table->string('svBook_status');
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
        Schema::dropIfExists('_book_s_v');
    }
}
