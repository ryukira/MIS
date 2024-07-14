<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlaimPerLobsTable extends Migration
{
    public function up()
    {
        Schema::create('klaim_per_lobs', function (Blueprint $table) {
            $table->id();
            $table->string('lob');
            $table->string('penyebab_klaim');
            $table->integer('jumlah_nasabah');
            $table->date('periode');
            $table->decimal('nilai_beban_klaim', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('klaim_per_lobs');
    }
}

