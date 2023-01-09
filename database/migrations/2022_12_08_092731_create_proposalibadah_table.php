<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalibadahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposalibadah', function (Blueprint $table) {
            $table->id();
            $table->string('namaproposal');
            $table->string('nohp');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('fileproposal');
            $table->string('sktj');
            $table->string('suratpernyataan');
            $table->string('suratdomisili');
            $table->string('susunankepengurusan');
            $table->string('rekomendasicamat');
            $table->string('rekomendasikemenag');
            $table->string('pernyataantidakkonflik');
            $table->string('buktitanah');
            $table->string('identitaspengurus');
            $table->string('rekening');
            $table->string('denahlokasi');
            $table->string('fotobangunansekretariat');
            $table->string('gambarbangunan')->nullable();    
            $table->string('status');
            $table->integer('created_by');
            $table->integer('verifikasi')->nullable(); 
            $table->text('keterangan');   
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
        Schema::dropIfExists('proposalibadah');
    }
}
