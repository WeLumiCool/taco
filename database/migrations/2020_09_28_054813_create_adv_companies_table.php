<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adv_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('file')->nullable();
            $table->string('link')->nullable();
            $table->string('total_price')->nullable();
            $table->text('desc')->nullable();
            $table->text('comment')->nullable();
            $table->integer('status')->nullable();
            $table->integer('case_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('advertiser_id')->nullable();
            $table->integer('type_id')->nullable();
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
        Schema::dropIfExists('adv_companies');
    }
}
