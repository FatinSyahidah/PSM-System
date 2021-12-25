<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_inventories', function (Blueprint $table) {
            $table->increments('inv_ID');
            $table->string('stud_matricID');
            $table->string('stud_name');
            $table->string('inv_name');
            $table->integer('quantity');
            $table->date('date');
            $table->string('req_status');
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
        Schema::dropIfExists('_inventories');
    }
}
