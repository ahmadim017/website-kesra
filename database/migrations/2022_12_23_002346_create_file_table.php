<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file', function (Blueprint $table) {
          
                $table->bigIncrements('id');
                $table->string('tanggal');
                $table->string('norekening');
                $table->string('uraian');
                $table->string('nominal');
                $table->string('penyedia');
                $table->string('tglorder');
                $table->string('tglcair');
                $table->text('keterangan')->nullable();
                $table->string('file');
                $table->integer('id_kegiatan');
                $table->string('tittle');
                $table->string('tahun');
                $table->date('tglupload');
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
        Schema::dropIfExists('file');
    }
}
