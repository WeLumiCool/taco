<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseOnlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_onlines', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('position')->nullable();
            $table->string('place')->nullable();
            $table->text('desc')->nullable();
            $table->integer('price')->nullable();
            $table->string('advertiser_id')->nullable();
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
        Schema::dropIfExists('case_onlines');
    }
}
