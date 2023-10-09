<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kepengurusans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim')->unique();
            $table->foreignId('jurusan_id')->constrained('jurusans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('jabatan_id')->constrained('jabatans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('kementerian_id')->constrained('kementerians')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('departemen')->nullable();
            $table->date('tanggal_lahir');
            $table->string('no_hp');
            $table->string('foto');
            $table->string('instagram')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepengurusans');
    }
};
