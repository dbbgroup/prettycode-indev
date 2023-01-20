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
        Schema::create('comments', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->timestamps();
            $table->bigInteger('post_id')->nullable();
            $table->bigInteger('comment_id')->nullable();
            $table->bigInteger('author_id');
            $table->boolean('is_active');
            $table->boolean('is_solve')->default(0);
            $table->bigInteger('like_count')->default(0);
            $table->text('content');
            $table->boolean('is_liked_by_author')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
