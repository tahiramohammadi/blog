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
        Schema::create('math_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('option_a_id');
            $table->unsignedBigInteger('option_b_id');
            $table->unsignedBigInteger('option_c_id');
            $table->unsignedBigInteger('option_d_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('question_id')->references('id')->on('physic_question')->onDelete('cascade');
            $table->foreign('option_a_id')->references('id')->on('math_options')->onDelete('cascade');
            $table->foreign('option_b_id')->references('id')->on('math_options')->onDelete('cascade');
            $table->foreign('option_c_id')->references('id')->on('math_options')->onDelete('cascade');
         $table->foreign('option_d_id')->references('id')->on('math_options')->onDelete('cascade');
         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('math_answers');
    }
};