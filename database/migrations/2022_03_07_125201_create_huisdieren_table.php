<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisdierenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huisdieren', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("kind");
            $table->string("eigenaar");
            $table->string("oppasser")->nullable();
            $table->integer("verzoek")->default(0);
            $table->foreign("eigenaar")->references("email")->on("users");
            $table->foreign("kind")->references("kind")->on("dieren");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table("huisdieren", function (Blueprint $table){
            $table->dropForeign("huisdieren_kind_foreign");
        });
        Schema::dropIfExists('huisdieren');
    }
}
