<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performance', function (Blueprint $table) {
            $table->id(); //id
            $table->string('name', 200)->unique();
            $table->string('category', 50)->nullable();
            $table->string('artist', 150)->default('sin especificar');
            $table->decimal('budget', 9, 2)->default(0);
            $table->timestamps(); //marcas de tiempo: 2, fecha creación, edición
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performance');
    }
}
