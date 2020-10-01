<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToAdvCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adv_companies', function (Blueprint $table) {
            $table->integer('tarif')->after('status')->nullable();
            $table->integer('chrono')->after('tarif')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adv_companies', function (Blueprint $table) {
            $table->dropColumn(['tarif, chrono']);
        });
    }
}
