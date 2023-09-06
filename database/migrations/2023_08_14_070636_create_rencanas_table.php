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
        Schema::create('rencana', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rencana',50);
            $table->string('kategori_rencana',50);
            $table->date('tanggal_rencana');
            $table->string('isi_rencana');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rencana');
    }
};
