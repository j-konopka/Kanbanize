<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createStatisticSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistic_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('boardId');
            $table->integer('periodId');
            $table->integer('variationId');
            $table->integer('intervalId');
            $table->text('settings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistic_settings');
    }

}
