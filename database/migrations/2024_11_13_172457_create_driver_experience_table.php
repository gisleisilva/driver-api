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
        Schema::create('driver_experience', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_user_id')->constrained('driver_user')->onDelete('cascade');
            $table->string('nome_ultima_empresa');
            $table->string('endereco_ultima_empresa');
            $table->string('funcao_cargo_ultima_empresa');
            $table->text('motivo_desligamento_ultima_empresa')->nullable();
            $table->date('mes_ano_admissao');
            $table->date('mes_ano_desligamento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_experience');
    }
};
