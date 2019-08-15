<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentCodingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('comment_coding', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('coding_id');
            $table->integer('user_id');
            $table->string('title')->nullable();
            $table->string('body',5555);
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
        Schema::dropIfExists('comment_coding');
    }
}
