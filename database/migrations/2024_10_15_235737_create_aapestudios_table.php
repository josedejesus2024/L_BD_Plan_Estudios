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
        Schema::create('aapestudios', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->unsignedBigInteger('id_d');
            $table->unsignedBigInteger('id_f');
            $table->foreign('id_d')->references('id')->on('aadivisiones')->onDelete('cascade');
            $table->foreign('id_f')->references('id')->on('aafuncionarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aapestudios');
    }
};

