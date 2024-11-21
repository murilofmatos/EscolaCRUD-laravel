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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aluno_id');
            $table->float('portugues', 2, 1)->nullable();
            $table->float('matematica', 2, 1)->nullable();
            $table->float('ciencias', 2, 1)->nullable();
            $table->float('historia', 2, 1)->nullable();
            $table->float('ingles', 2, 1)->nullable();
            $table->float('geografia', 2, 1)->nullable();
            $table->foreign('aluno_id', 2, 1)->references('id')->on('alunos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
