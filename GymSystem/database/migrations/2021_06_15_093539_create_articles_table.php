<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 255);
            $table->string('short_description');
            $table->text('content');
            $table->string('SEO_title', 60);
            $table->string('SEO_description', 160);
            $table->string('slug', 255)->unique();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('image_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('articles_images')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('articles_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
