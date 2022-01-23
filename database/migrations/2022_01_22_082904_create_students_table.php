<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('stud_id');
            $table->string('name');
            $table->string('stud_matricID')->nullable();
            $table->string('stud_course')->nullable();
            $table->string('stud_year')->nullable();
            $table->string('stud_hpNum')->nullable();
            $table->string('email');
            $table->string('password');
            $table->boolean('is_editor')->default(false);
            $table->rememberToken();
            $table->string('stud_cpassword')->nullable();
            $table->string('stud_add')->nullable();
            $table->string('stud_advisor')->nullable();
            $table->string('stud_psmTitle')->nullable();
            $table->string('stud_psmPhase')->nullable();
            $table->string('stud_profilePic')->nullable();
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
        Schema::dropIfExists('students');
    }
}
