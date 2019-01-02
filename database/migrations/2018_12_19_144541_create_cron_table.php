<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCronTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cron', function (Blueprint $table) {
            $table->increments('id'); // PK
            $table->timestamp('date');
            $table->string('api_key'); // FK eigentlich zu BenutzerID
            $table->unsignedInteger('statistic_id'); // FK
            $table->timestamps();
        });

        Schema::table('cron', function($table) {
            $table->foreign('statistic_id')->references('id')->on('statistic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cron');
    }
}
