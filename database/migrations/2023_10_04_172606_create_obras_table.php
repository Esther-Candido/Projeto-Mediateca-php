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
        Schema::create('obras', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('tipo_id'); Quando se seguem as convenções
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos_obra');

            $table->string('nome');
            $table->float('preco',8,2);
            $table->integer('exemplares');
            $table->boolean('disponivel');
            //Livros
            $table->string('isbn',20)->nullable();
            $table->text('descr')->nullable();
            //DVD
            $table->unsignedInteger('duracao')->nullable();
            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obras');
    }
};
