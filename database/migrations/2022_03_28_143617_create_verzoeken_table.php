<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerzoekenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verzoeken', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("dier");
            $table->string("oppasser");
            $table->foreign("dier")->references("name")->on("huisdieren");
            $table->foreign("oppasser")->references("email")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verzoeken');
    }
}
