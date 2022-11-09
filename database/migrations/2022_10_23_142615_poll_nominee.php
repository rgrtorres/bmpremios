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
        Schema::create('poll_nominee', function(Blueprint $table){
            $table->id('id');
            $table->unsignedBigInteger('id_category');
            $table->string('name_poll_nominee');
            $table->string('picture_poll_nominee');
            $table->enum('status_poll_nominee', ['active', 'inactive']);
            $table->timestamps();

            $table->foreign('id_category')->references('id')->on('poll_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poll_nominee');
    }
};
