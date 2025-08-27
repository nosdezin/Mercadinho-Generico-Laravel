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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('nome');
            $table->integer('preco');
            $table->json('comentarios')->nullable();
            $table->integer('nota');
            $table->integer('estoque');
            $table->text('image_url');
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
