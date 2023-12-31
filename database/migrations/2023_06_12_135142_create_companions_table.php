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
        Schema::create('companions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->string('name', 100);
            $table->string('rg', 100);
            $table->string('cpf', 100);
            $table->unsignedBigInteger('kindship_id');
            $table->foreign('kindship_id')->references('id')->on('kindships');
            $table->string('cep', 8);
            $table->string('logradouro', 100);
            $table->string('bairro', 100);
            $table->string('cns', 20);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companions');
    }
};
