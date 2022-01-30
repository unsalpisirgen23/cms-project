<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->nullable();
            $table->string('content',255)->nullable();
            $table->string('img_url',255)->nullable();
            $table->string('meta_description',255)->nullable();
            $table->string('meta_title',255)->nullable();
            $table->string('slug',255)->nullable();
            $table->integer('status')->default(0);
            $table->integer('author_id')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
