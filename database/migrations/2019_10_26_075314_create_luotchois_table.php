<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuotchoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luot_choi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nguoi_choi_id');
            $table->unsignedInteger('so_cau');
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoichois');
            $table->integer('diem');
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
        Schema::dropIfExists('luot_choi');
    }
}
