<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_posts', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->string('topic');
            $table->string('class');
            $table->string('time');
            $table->string('method');
            $table->integer('price');
            $table->integer('phone');
            $table->string('location');
            $table->string('desc');
            $table->string('number_lesson');
            $table->string('time_teaching');
            $table->unsignedBigInteger('parent_id');
            $table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');
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
        Schema::dropIfExists('p_posts');
    }
}
