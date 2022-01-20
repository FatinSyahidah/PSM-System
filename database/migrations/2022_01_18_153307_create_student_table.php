<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('stud_id');
            $table->string('stud_name');
            $table->string('stud_matricID');
            $table->string('stud_course');
            $table->string('stud_year');
            $table->string('stud_hpNum');
            $table->string('stud_email');
            $table->string('stud_add');
            $table->string('stud_advisor');
            $table->string('stud_psmTitle');
            $table->string('stud_psmPhase');
            $table->string('stud_profilePic');
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
        Schema::dropIfExists('student');
    }
}
