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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('rg', 15);
            $table->string('cpf', 15);
            $table->date('dt_nascimento');
            $table->string('cns', 20);
            $table->string('telefone', 50);
            $table->string('cep', 8);
            $table->string('logradouro', 100);
            $table->string('numero', 100);
            $table->string('bairro', 100);
            $table->text('complemento')->nullable();
            $table->string('ac', 2)->nullable();
            $table->string('transp', 1)->nullable();
            $table->boolean('obito')->default(false);
            $table->date('dt_obito')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
