<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReputationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reputations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('whisky_id');
            $table->unsignedBigInteger('total_score');
            
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('smell_id');
            $table->unsignedBigInteger('taste_id');
            $table->unsignedBigInteger('aftertaste_id');
            $table->unsignedBigInteger('amount');
            $table->string('comment',100);
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('whisky_id')->references('id')->on('whiskies')->onDelete('cascade');
            
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('smell_id')->references('id')->on('smells')->onDelete('cascade');
            $table->foreign('taste_id')->references('id')->on('tastes')->onDelete('cascade');
            $table->foreign('aftertaste_id')->references('id')->on('aftertastes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reputations');
    }
}
