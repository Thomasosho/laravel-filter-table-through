<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRenovationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renovations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('state');
            $table->string('typeintervention');
            $table->string('year');
            $table->string('quality');
            $table->string('totalcost')->nullable();
            $table->string('actualcost')->nullable();
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
        Schema::dropIfExists('renovations');
    }
}
