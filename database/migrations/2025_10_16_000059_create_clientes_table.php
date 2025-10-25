<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('sobrenome', 100);
            $table->string('cpf', 14)->unique(); 
            $table->string('email', 150)->unique();
            $table->string('cep', 9);
            $table->string('logradouro', 150);
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('uf', 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
