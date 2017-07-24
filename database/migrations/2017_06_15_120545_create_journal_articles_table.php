<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_articles', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('parent_id')->default(0)->nullable();
            $table->integer('lft')->unsigned()->nullable();
            $table->integer('rgt')->unsigned()->nullable();
            $table->integer('depth')->unsigned()->nullable();
            
            $table->integer('journal_category_id')->unsigned()->default(0);
            $table->integer('author_id')->unsigned()->default(0);
            $table->string('title');
            $table->string('slug')->default('');
            $table->longText('content')->nullable();
            $table->varchar('mini')->nullable();
            $table->string('image')->nullable();
            $table->string('minimage')->nullable();

            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('PUBLISHED');
            $table->dateTime('date')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();

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
        Schema::drop('journal_articles');
    }
}
