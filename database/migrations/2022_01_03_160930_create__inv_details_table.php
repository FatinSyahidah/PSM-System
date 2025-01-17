<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvDetailsTable extends Migration
{
    public function up()
    {
        // create table & attributes of table
        Schema::create('_inv_details', function (Blueprint $table) {
            $table->increments('detail_ID');            // primary key of _inv_details table
            $table->string('inv_ID');
            $table->string('stud_matricID');
            $table->string('stud_name');
            $table->string('inv_name');
            $table->integer('quantity');
            $table->date('pick_date');
            $table->date('ret_date');
            $table->string('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //function to drop if table already exists in database
    public function down()
    {
        Schema::dropIfExists('_inv_details');
    }
}
