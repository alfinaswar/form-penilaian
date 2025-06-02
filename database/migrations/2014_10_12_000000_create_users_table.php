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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nama_sekolah');  // Nama Sekolah
            $table->string('npsn')->nullable();  // Nomor Pokok Sekolah Nasional (opsional)
            $table->string('akreditasi')->nullable();  // Nomor Pokok Sekolah Nasional (opsional)
            $table->string('jenjang')->nullable();  // SD / SMP / SMA / SMK
            $table->string('total_guru')->nullable();  // SD / SMP / SMA / SMK
            $table->string('total_siswa')->nullable();  // SD / SMP / SMA / SMK
            $table->string('total_kelas')->nullable();  // SD / SMP / SMA / SMK
            $table->string('status_sekolah')->nullable();  // Negeri / Swasta
            $table->text('alamat_sekolah')->nullable();  // Alamat lengkap sekolah
            $table->string('kota')->nullable();  // Kota atau Kabupaten
            $table->string('provinsi')->nullable();  // Provinsi
            $table->string('kecamatan')->nullable();  // Kecamatan
            $table->string('kode_pos')->nullable();  // Kode Pos
            $table->string('telepon_sekolah')->nullable();  // Nomor Telepon Sekolah
            $table->string('email_sekolah')->nullable();  // Email resmi sekolah
            $table->string('website_sekolah')->nullable();  // Website sekolah
            $table->text('deskripsi_sekolah')->nullable();  // Deskripsi tambahan tentang sekolah
            $table->string('logo')->nullable();  // Logo sekolah
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
