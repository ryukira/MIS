<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapKlaimsTable extends Migration
{
    public function up()
    {
        Schema::create('rekap_klaims', function (Blueprint $table) {
            $table->id();
            $table->string('lob');
            $table->string('penyebab_klaim');
            $table->date('periode');
            $table->decimal('nilai_beban_klaim', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rekap_klaims');
    }
}
