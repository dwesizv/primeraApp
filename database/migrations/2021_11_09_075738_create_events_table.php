<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idperformance')->unsigned();
            $table->bigInteger('idplace')->unsigned();
            $table->date('date')->useCurrent(); //yyyy-mm-dd
            $table->decimal('performancebudget', 9, 2)->default(0);
            $table->decimal('placebudget', 9, 2)->default(0);
            $table->decimal('price', 9, 2)->default(0);
            $table->timestamps();
            $table->foreign('idperformance')->references('id')->on('performance');
            $table->foreign('idplace')->references('id')->on('place');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
