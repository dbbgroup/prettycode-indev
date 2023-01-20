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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->timestamps();
            $table->bigInteger('author_id');
            $table->text('title');
            $table->text('content');
            $table->string('type');
            $table->bigInteger('like_count')->default(0);
            $table->text('slug');
            $table->text('topic');
            $table->integer('relevancy');
            $table->bigInteger('view_count')->default(0);
            $table->boolean('is_active');
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
};
