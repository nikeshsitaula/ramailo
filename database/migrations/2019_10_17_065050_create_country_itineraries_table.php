<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryItinerariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_itineraries', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('country')->nullable();
            $table->string('itineraryname')->nullable();
            $table->string('itineraryimage')->nullable();
            $table->string('description',1200)->nullable();

            $table->string('subheadingname')->nullable();
            $table->string('subimageone')->nullable();
            $table->string('subimagetwo')->nullable();
            $table->string('subdescription',1200)->nullable();

            $table->string('sliderheadingname')->nullable();
            $table->string('sliderimageone')->nullable();
            $table->string('sliderimagetwo')->nullable();
            $table->string('sliderimagethree')->nullable();
            $table->string('sliderdescription',1200)->nullable();

            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('country_itineraries');
    }
}
