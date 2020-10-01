<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_tvs', function (Blueprint $table) {
            $table->id();
            $table->string('time')->nullable();
            $table->string('type')->nullable();
            $table->integer('price')->nullable();
            $table->text('desc')->nullable();
            $table->string('category')->nullable();
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
        Schema::dropIfExists('case_tvs');
    }
}
