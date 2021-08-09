<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuletinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buletin', function (Blueprint $table) {
            $table->id();
            $table->string('cover');
            $table->string('judul');
            $table->mediumText('konten');
            $table->bigInteger('id_kategori_buletin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buletin');
    }
}
