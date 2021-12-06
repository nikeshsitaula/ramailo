<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorldDestinationsTable extends Migration
{
    public function up()
    {
        Schema::create('world_destinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country');
            $table->string('speciality', 1000);
            $table->string('continent');
            $table->string('countryimage')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('world_destinations');
    }
}
