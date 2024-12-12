<?php

use App\Enums\SexDriverUser;
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
         * M => Masculino
         * F => Feminino
         * O => Outro
         */

        Schema::create('driver_user', function (Blueprint $table) {
            $table->id();
            $table->string('primeiro_nome');
            $table->string('ultimo_nome');
            $table->string('cpf_rne')->unique();
            $table->string('email')->unique();
            $table->string('telefone_celular');
            $table->date('data_nascimento');
            $table->enum('sexo', array_column(SexDriverUser::cases(), 'name'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_user');
    }
};
