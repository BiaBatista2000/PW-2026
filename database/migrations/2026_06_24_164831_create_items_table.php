<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {

            $table->id();

            $table->string('codigo')->unique();

            $table->string('nome');

            $table->string('categoria');

            $table->string('marca');

            $table->integer('estoque')->default(0);

            $table->decimal('preco', 10, 2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};