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
        Schema::create('poll_vote', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_poll_nominee');
            $table->unsignedBigInteger('id_poll_category');
            $table->timestamps();
            $table->foreign('id_poll_nominee')->references('id')->on('poll_nominee');
            $table->foreign('id_poll_category')->references('id')->on('poll_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poll_vote');
    }
};
