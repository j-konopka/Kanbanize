<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticsSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics_settings', function (Blueprint $table) {
            $table->increments('id'); // PK
            $table->unsignedInteger('boardId'); // FK
            $table->text('settings');
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
        Schema::dropIfExists('statistics_settings');
    }
}
