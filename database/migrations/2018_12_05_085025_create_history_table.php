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
            $table->timestamp('date');
            $table->unsignedInteger('boardId'); // FK
            $table->integer('newBugs');
            $table->integer('open');
            $table->integer('doing');
            $table->integer('done');
            $table->timestamps();

            $table->foreign('boardId')
                ->references('id')
                ->on('boards')
                ->onDelete('restrict');
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
