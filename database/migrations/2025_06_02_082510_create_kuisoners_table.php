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
        Schema::create('kuisoners', function (Blueprint $table) {
            $table->id();
            $table->string('idUser');
            $table->json('Status1');
            $table->json('Bobot1');
            $table->json('Total1');
            $table->json('Nilai1');
            $table->json('Total2');
            $table->json('Nilai2');
            $table->json('Status2');
            $table->json('Bobot2');
            $table->json('Total3');
            $table->json('Nilai3');
            $table->json('Status3');
            $table->json('Bobot3');
            $table->string('TotalAkhir');
            $table->string('Link');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuisoners');
    }
};
