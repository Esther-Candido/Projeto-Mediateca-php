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
        Schema::create('autor_obra', function (Blueprint $table) {
            $table->foreignId('autor_id')->constrained('autores')->onDelete('cascade');
            $table->foreignId('obra_id')->constrained('obras');
            $table->primary(['obra_id','autor_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autor_obra');
    }
};
