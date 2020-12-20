<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWayToReputations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reputations', function (Blueprint $table) {
            $table->unsignedBigInteger('way_id');
            
            $table->foreign('way_id')->references('id')->on('ways')->onDelete('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reputations', function (Blueprint $table) {
            //
        });
    }
}
