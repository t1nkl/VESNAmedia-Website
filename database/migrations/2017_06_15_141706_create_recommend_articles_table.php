<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommendArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommend_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->default('');
            $table->string('image')->nullable();
            $table->text('recommend_photos')->nullable();
            $table->longText('content')->nullable();
            $table->enum('status', ['PUBLISHED', 'NOT PUBLISHED'])->default('PUBLISHED');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();

            $table->text('contact_map')->nullable();
            $table->text('contact_address')->nullable();
            $table->text('contact_phone')->nullable();
            $table->text('contact_timetable')->nullable();
            $table->text('contact_facebook')->nullable();
            $table->text('contact_instagram')->nullable();
            $table->text('contact_youtube')->nullable();
            $table->text('contact_url')->nullable();

            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();

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
        Schema::drop('recommend_articles');
    }
}
