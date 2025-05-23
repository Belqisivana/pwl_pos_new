<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMBarangTable extends Migration
{
    public function up()
    {
        Schema::create('m_barang', function (Blueprint $table) {
            $table->bigIncrements('barang_id');
            $table->unsignedBigInteger('kategori_id');
            $table->string('barang_kode', 10);
            $table->string('barang_nama', 100);
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->timestamps();

            $table->foreign('kategori_id')->references('kategori_id')->on('m_kategori')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_barang');
    }
}
