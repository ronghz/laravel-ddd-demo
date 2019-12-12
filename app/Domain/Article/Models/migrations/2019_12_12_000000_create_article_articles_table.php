<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 64)->nullable(false);
            $table->text('content')->nullable(false);
            $table->integer('category_id')->default(0);
            $table->integer('recommend_order')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_articles');
    }
}
