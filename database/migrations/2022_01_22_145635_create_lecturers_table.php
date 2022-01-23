<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->increments('lect_id');
            $table->string('name');
            $table->string('lect_staffID');
            $table->string('lect_field');
            $table->string('lect_officeNum');
            $table->string('lect_hpNum');
            $table->string('email');
            $table->string('lect_add');
            $table->string('lect_expertise');
            $table->string('lect_profilePic');
            $table->string('password');
            $table->boolean('is_teacher')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('lecturers');
    }
}
