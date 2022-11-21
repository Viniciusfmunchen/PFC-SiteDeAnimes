<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_pieces', function(Blueprint $table){
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')->on('characters');
            $table->unsignedBigInteger('piece_id');
            $table->foreign('piece_id')->references('id')->on('pieces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_pieces');
    }
};
