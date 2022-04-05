<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huis', function (Blueprint $table) {
            $table->string("oppasser")->unique();
            $table->string("name");
            $table->string("huisnummer");
            $table->string("postcode");
            $table->string("plaatsnaam");
            $table->string("image1");
            $table->string("image2")->nullable();
            $table->string("image3")->nullable();
            $table->string("image4")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huis');
    }
}
