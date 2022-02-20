<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('phone');
            $table->string('method');
            $table->string('subject');
            $table->string('topic');
            $table->string('class');
            $table->integer('price');
            $table->string('time_teaching');
            $table->string('desc');
            $table->string('achievement');
            $table->string('experience');
            $table->unsignedBigInteger('tutor_id');
            $table->foreign('tutor_id')->references('id')->on('tutors')->onDelete('cascade');
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
        Schema::dropIfExists('t_posts');
    }
}
