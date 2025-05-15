<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKategoriTable extends Migration
{
    public function up()
    {
        Schema::create('m_kategori', function (Blueprint $table) {
            $table->bigIncrements('kategori_id'); // PRIMARY KEY!
            $table->string('kategori_kode', 10);
            $table->string('kategori_nama', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_kategori');
    }
}
