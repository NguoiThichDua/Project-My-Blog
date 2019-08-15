<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',3000);
            $table->string('body',5000);
            $table->integer('user_id');
            $table->string('image_1',555)->default('noImage.jpg');
            $table->string('image_2',555);
            $table->string('image_3',555);
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
        Schema::dropIfExists('news');
    }
}
