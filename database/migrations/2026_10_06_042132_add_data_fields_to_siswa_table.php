<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->string('nama')->after('id');
            $table->string('nisn')->nullable()->after('nama');
            $table->string('kelas')->nullable()->after('nisn');
            $table->string('jurusan')->nullable()->after('kelas');
            $table->string('jenis_kelamin')->nullable()->after('jurusan');
            $table->string('status')->nullable()->after('jenis_kelamin');
            $table->string('foto')->nullable()->after('status');
        });
    }

    public function down(): void
    {
  
    }
};