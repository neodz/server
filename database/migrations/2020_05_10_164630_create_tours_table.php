<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Name');
            $table->text('Description');
            $table->text('Terms&Conditions');
            $table->Float('Rating');
            $table->integer('Participants');
            $table->dateTime('EndDate');
            $table->unsignedBigInteger('bonus_id');
            $table->foreign('bonus_id')->references('id')->on('bonuses');

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
        Schema::dropIfExists('tours');
    }
}
