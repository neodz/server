<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->boolean('thumbnail')->default(false);
            $table->unsignedBigInteger('touristic_activity_id');
            $table->foreign('touristic_activity_id')->references('id')->on('touristic_activities')->onDelete('cascade');;

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
        Schema::dropIfExists('photo_activities');
    }
}
