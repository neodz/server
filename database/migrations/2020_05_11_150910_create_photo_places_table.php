<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_places', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->boolean('thumbnail')->default(false);
            $table->unsignedBigInteger('place_id');
            $table->foreign('place_id')->references('id')->on('touristic_places')->onDelete('cascade');;

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
        Schema::dropIfExists('photo_places');
    }
}
