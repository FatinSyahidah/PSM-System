<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudReqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_stud_req', function (Blueprint $table) {
            $table->increments('sr_ID');
            $table->integer('stud_ID');
            $table->integer('lect_ID');
            $table->string('stud_req');
            $table->string('stud_list');
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
        Schema::dropIfExists('_stud_req');
    }
}
