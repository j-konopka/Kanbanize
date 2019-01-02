<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->increments('id'); // PK
            $table->unsignedInteger('statistic_id'); // FK
            $table->unsignedInteger('board_external_id'); // FK
            $table->timestamp('date');
            $table->integer('open');
            $table->integer('doing');
            $table->integer('done');
            $table->integer('newBugs');
            $table->timestamps();
        });

        Schema::table('history', function($table) {
            $table->foreign('statistic_id')->references('id')->on('statistic');
            $table->foreign('board_external_id')->references('external_id')->on('board');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history');
    }
}
