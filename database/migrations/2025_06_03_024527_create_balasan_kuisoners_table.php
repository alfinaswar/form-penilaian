<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('balasan_kuisoners', function (Blueprint $table) {
            $table->id();
            $table->string('kuisoner_id', 100)->nullable();
            $table->string('responden_id', 100)->nullable();
            $table->string('file_kuisoner', 255)->nullable();
            $table->string('bukti_dukung', 255)->nullable();
            $table->text('keterangan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balasan_kuisoners');
    }
};
