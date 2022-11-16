<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('blogs', function (Blueprint $table) {
        $table->id()->unique();
        $table->string('author',10);
        $table->string('title',50);
        $table->text('body');
        $table->string('keyword',255);
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
    Schema::dropIfExists('blogs');
}
}

