<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logbooks', function (Blueprint $table) {
            /* create attributes for logbooks table*/
            $table->increments('logbook_ID'); 
            $table->string('stud_matricID')->nullable();
            $table->string('stud_name');
            $table->date('meeting_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('current_progress');
            $table->string('discussion_details');
            $table->string('action_plan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logbooks');
    }
}
