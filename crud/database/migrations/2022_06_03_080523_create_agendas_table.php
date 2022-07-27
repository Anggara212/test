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
            Schema::create('agendas', function (Blueprint $table) {
                $table->id();
                $table->string('namaguru');
                $table->string('materipembelajaran');
                $table->enum('matapelajaran',['IPS','IPA','MTK']);
                $table->string('jampelajaran');
                $table->enum('absensi',['Hadir','Tidak-hadir']);
                $table->enum('kelas',['X','XI','IX']);
                $table->string('jenispembelajaran');
                $table->string('linkpembelajaran');
                $table->string('dokumentasi');
                $table->string('keterangan');
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
        Schema::dropIfExists('agendas');
    }
};
