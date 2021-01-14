<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhiskysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whiskies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('whisky_name');
            $table->string('maker');
            $table->decimal('percentage',3,1);
            $table->string('whisky_image');
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
        Schema::dropIfExists('whiskys');
    }
}
