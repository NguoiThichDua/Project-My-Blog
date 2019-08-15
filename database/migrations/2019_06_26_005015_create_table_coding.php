<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCoding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('coding', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('body');
            $table->integer('user_id');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
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
        Schema::dropIfExists('coding');
    }
}
