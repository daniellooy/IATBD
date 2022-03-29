<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToHuisdierenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('huisdieren', function (Blueprint $table) {
            $table->string("image")->default("/img/dier_default.jpg");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huisdieren', function (Blueprint $table) {
            $table->dropColumn("image");
        });
    }
}
