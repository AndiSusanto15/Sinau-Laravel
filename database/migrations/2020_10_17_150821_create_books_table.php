<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_buku');
            $table->string('penerbit');
            $table->string('stok');

            $sudahAdatahun = $table->hasColumn("tahun_terbit");
            if ($sudahAdatahun) {
                // ternyata sudah ada
            } else {
                $table->string("tahun_terbit");
            }
            $table->renameColumn("penerbit", "penerbit_buku");
            $table->dropColumn("penerbit", "penerbit_buku");

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
}
