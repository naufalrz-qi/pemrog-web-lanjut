<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//disini saya langsung generate migratenya saat membuat model
class CreateMidsemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mid_002', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('judul',20);
            $table->text('isi');
            $table->string('penulis',20);
            $table->text('keterangan');
            $table->integer('tahun_terbit');
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
        Schema::dropIfExists('mid_002');
    }
}
