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
         * F => Fluente
         * I => Intermediário
         * B => Básico
         * N => Nenhuma
         */

        Schema::create('driver_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_user_id')->constrained('driver_user')->onDelete('cascade');
            $table->unsignedBigInteger('languages_id');
            $table->enum('fluencia', ['F', 'I', 'B', 'N']);
            $table->timestamps();

            $table->foreign('languages_id')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_languages');
    }
};
