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
        /**
         * S => Solteiro
         * C => Casado
         * D => Divorciado
         * V => Viúvo
         * O => Outro
         * 
         * E => Ensino Médio
         * S => Superior
         * P => Pós-graduação
         * M => Mestrado
         * D => Doutorado
         */
    
        Schema::create('driver_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_user_id')->constrained('driver_user')->onDelete('cascade');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('nome_mae');
            $table->string('nome_pai');
            $table->integer('quantidade_filhos');
            $table->enum('estado_civil', ['S', 'C', 'D', 'V', 'O']);
            $table->enum('escolaridade', ['E', 'S', 'P', 'M', 'D']);
            $table->string('orgao_emissor_rne')->nullable();
            $table->date('data_emissao_rne')->nullable();
            $table->date('data_validade_rne')->nullable();
            $table->string('numero_passaporte')->nullable();
            $table->string('pais_emissor_passaporte')->nullable();
            $table->string('numero_rg')->nullable();
            $table->string('estado_emissor_rg', 2)->nullable();
            $table->date('data_emissao_rg')->nullable();
            $table->string('carteira_trabalho')->nullable();
            $table->string('numero_serie_ctps')->nullable();
            $table->string('pis_pasep')->nullable();
            $table->string('titulo_eleitor')->nullable();
            $table->string('secao_eleitoral')->nullable();
            $table->string('zona_eleitoral')->nullable();
            $table->string('certificado_reservista')->nullable();
            $table->string('numero_cnh')->nullable();
            $table->enum('categoria_habilitacao', ['A', 'B', 'C', 'D', 'E']);
            $table->date('data_emissao_cnh')->nullable();
            $table->date('data_validade_cnh')->nullable();
            $table->date('data_primeira_cnh')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_documents');
    }
};
