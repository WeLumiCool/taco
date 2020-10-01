<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseRadiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_radios', function (Blueprint $table) {
            $table->id();
            $table->string('time')->nullable();
            $table->integer('price_weekdays')->nullable();
            $table->integer('price_weekend')->nullable();
            $table->integer('advertiser_id')->nullable();
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
        Schema::dropIfExists('case_radios');
    }
}
