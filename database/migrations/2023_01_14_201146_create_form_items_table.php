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
        Schema::create('form_items', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->timestamps();
            $table->text('label');
            $table->text('placeholder')->nullable();
            $table->string('name');
            $table->text('content');
            $table->string('style')->default('form__input');
            $table->string('type');
            $table->bigInteger('form_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_items');
    }
};
