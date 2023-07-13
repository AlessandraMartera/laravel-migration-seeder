<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('agency',20);
            $table->string('departure_station',20);
            $table->string('arrival_station',20);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('code',8);
            $table->integer('n_carriage');
            $table->boolean('in_time')->default(true);
            $table->boolean('delated')->default(false);

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
        Schema::dropIfExists('trains');
    }
};
