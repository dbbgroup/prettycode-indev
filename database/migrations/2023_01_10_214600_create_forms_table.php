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
        Schema::create('forms', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->timestamps();
            $table->bigInteger('author_id');
            $table->text('title');
            $table->boolean('is_active');
            $table->bigInteger('fill_count')->default(0);
            $table->text('content')->nullable();
            $table->text('slug');
            $table->string('controller')->nullable();
            $table->string('method')->nullable();
            $table->string('btn_style')->default('form-button form-button-primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
};
