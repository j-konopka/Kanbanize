<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createHistoryTable extends Migration
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
            $table->string('boardId'); // FK
            $table->integer('newBugs');
            $table->timestamps();

            $table->primary('id');
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
