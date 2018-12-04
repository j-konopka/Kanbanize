<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('column', function (Blueprint $table) {
            $table->increments('id'); // PK
            $table->string('nameIntern');
            $table->string('columnName');
            $table->integer('boardId'); // FK
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
        Schema::dropIfExists('column');
    }

}
