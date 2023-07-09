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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer("ISBN")->unique();
            $table->string("KitapAdi");
            $table->string("YazarAdi");
            $table->string("Yayinlayan");
            $table->integer("YayinTarihi");
            $table->string("KitapDili");
            $table->integer("SayfaSayisi");
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
        Schema::dropIfExists('books');
    }
};
