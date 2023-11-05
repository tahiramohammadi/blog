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
        Schema::create('math_question', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question')->default('0')->nullable();
            $table->unsignedBigInteger('catagory_id');
              $table->foreign('catagory_id')->references('id')->on('catagory')->onDelete('cascade');
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
        Schema::dropIfExists('math_question');
    }
};

